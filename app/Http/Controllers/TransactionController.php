<?php

namespace App\Http\Controllers;

use App\Models\Shoes;
use App\Models\TransactionDetail;
use App\Models\Wallet;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    function index()
    {
        $transactions = Transaction::with(['transactiondetails', 'user', 'driver'])->orderByRaw("
        CASE
            WHEN transaction_status = 'pending' THEN 1
            WHEN transaction_status = 'accepted' THEN 2
            WHEN transaction_status = 'completed' THEN 3
            WHEN transaction_status = 'cancelled' THEN 4
            ELSE 5
        END
        ")->get();
        return view("transaction.transaction", [
            'transactions' => $transactions,
        ]);
    }

    function indexCustomer()
    {
        $customerId = Auth::id();
        $transactions = Transaction::with(["transactiondetails", "user", "driver"])->where("user_id", $customerId)->orderByRaw("
            CASE
                WHEN transaction_status = 'pending' THEN 1
                WHEN transaction_status = 'accepted' THEN 2
                WHEN transaction_status = 'completed' THEN 3
                WHEN transaction_status = 'cancelled' THEN 4
                ELSE 5
            END
        ")->get();
        return view("transaction.transaction-history", [
            'transaction' => $transactions
        ]);
    }

    public function cart()
    {
        return view("transaction.cart");
    }

    function getCartTotal()
    {
        $cart = session('cart', []);
        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return $total;
    }

    public function storeTransaction(Request $request)
    {
        $cart = session('cart'); // mengambil data session keranjang
        $user = Auth::user(); // mengambil data user yang sedang login

        $validation = $request->validate([
            'proof_of_payment' => 'required|image|mimes:jpeg,jpg,png,webp',
        ]);

        if (empty($user->no_hp)) {
            $message = [
                "type-message" => "warning",
                "message" => "Mohon Lengkapi Nomor Telepon Anda"
            ];
            return redirect()->route("complete.profile")->with($message);
        }

        if (empty($user->address)) {
            $message = [
                "type-message" => "warning",
                "message" => "Mohon Lengkapi Alamat Anda"
            ];
            return redirect()->route("complete.profile")->with($message);
        }
        // || empty($user->address)) {


        // membuat kode resi

        // Menghitung total dari keranjang
        $total = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));

        // Upload file (image) bukti pembayaran ke folder public/uploads/payment
        if ($request->hasFile('proof_of_payment')) {
            $file = $request->file('proof_of_payment');
            $file_name = rand(1000, 9999) . date("ymdHis") . '.' . $file->getClientOriginalName();
            $file->move(public_path("uploads/payment/"), $file_name);

            $validation['proof_of_payment'] = $file_name;
        }

        // Menyimpan transaksi ke dalam table transaction
        $transaction = Transaction::create([
            'user_id' => $user->id,
            'code' => Transaction::code(),
            'proof_of_payment' => $validation['proof_of_payment'],
            'total' => $total, // dapat dari session cart
            'payment_date' => now(),
            'transaction_status' => Transaction::STATUS_PENDING,
        ]);

        // Menyimpan Detail Transaksi
        foreach ($cart as $id => $item) {
            TransactionDetail::create([
                'transaction_id' => $transaction->id,
                'shoes_id' => $id,
                'quantity' => $item['quantity'],
                'subtotal' => $item['price'] * $item['quantity'],
            ]);

            // Mengurangi stok sepatu dengan jumlah stok yang ingin dibeli oleh user
            $shoes = Shoes::findOrFail($id);
            $shoes->stock -= $item['quantity'];
            $shoes->save();
        }

        // Menghapus data dari session
        session()->forget('cart');

        // Redirect ke halaman transaction dengan success

        $user = Auth::user();
        if ($user->role == 'customer') {
            $message = [
                "type-message" => "success",
                "message" => ""
            ];
            return redirect()->route("transaction-customer.index")->with("success", "Transaksi Berhasil");
        }
        return redirect()->route("transaction.index")->with('success', 'Transaksi Berhasil');
    }

    // Switch Status Transaksi
    public function transactionStatus(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);

        $transaction->transaction_status = $request->input('transaction_status');
        $transaction->save();

        if ($transaction->transaction_status == 'accepted') {
            $transaction->delivery_status = 'pending';
            $transaction->save();
        }

        if ($transaction->transaction_status == 'cancelled') {
            foreach ($transaction->transactiondetails as $details) {
                $shoes = Shoes::findOrFail($details->shoes_id);
                $shoes->stock += $details->quantity;
                $shoes->save();
            }
        }

        return redirect()->route("transaction.index");
    }

    // Switch Status Pengiriman
    function deliveryStatus(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delivery_status = $request->input('delivery_status');
        $transaction->save();

        if ($transaction->delivery_status == 'shipped') {
            $transaction->save();
            return redirect()->route("myorder.view");
        }

        if ($transaction->delivery_status == 'delivered') {
            $transaction->transaction_status = 'completed';
            $transaction->received_date = now();
            $transaction->save();

            $message = [
                "type-message" => "success",
                "message" => "Pesanan <b>$transaction->code</b> Terkirim"
            ];
            return redirect()->route("myorder.view")->with($message);
        }
    }

    // Driver
    function indexDriver()
    {
        $transactions = Transaction::with('transactiondetails')->get();
        return view("page.ordershoes", [
            "transactions" => $transactions
        ]);
    }

    function myOrder() // View Daftar Pesanan (Driver)
    {
        $driverId = Auth::id(); // Id driver yang sedang login
        $myOrders = Transaction::where('driver_id', $driverId)->orderByRaw("
        CASE
            WHEN delivery_status = 'pending' THEN 1
            WHEN delivery_status = 'shipped' THEN 2
            WHEN delivery_status = 'delivered' THEN 3
            ELSE 4
        END
        ")->get();

        return view("page.myorder", compact('myOrders'));
    }

    // Proses menyimpan data transaksi ke dalam view myorder sesuai id driver
    function addToMyOrder(Request $request)
    {
        $driverId = Auth::id();

        // Ambil transaksi_id
        $transactionId = $request->input('checkbox');

        // Periksa apakah checkbox memiliki data
        if (is_array($transactionId) && count($transactionId) > 0) {
            foreach ($transactionId as $see) {
                $transaction = Transaction::find($see);

                if ($transaction) {
                    $transaction->driver_id = $driverId;
                    $transaction->save();
                }
            }

            $message = [
                "type-message" => "success",
                "message" => "Berhasil Tambah Pesanan <b>$transaction->code</b> !"
            ];
            return redirect()->route('myorder.view')->with($message);
        } else {
            // Jika tidak ada transaksi yang dipilih
            $message = [
                "type-message" => "error",
                "message" => "Tidak ada pesanan yang <br> dipilih !"
            ];
            return redirect()->back()->with($message);
        }
    }
}
