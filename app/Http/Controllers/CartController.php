<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shoes;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        // Mendapatkan data sepatu sesuai ID sepatu
        $shoes = Shoes::find($id);

        // Mendapatkan jumlah input an stok dari customer
        $qty = $request->input('qty', 1); // 1 Adalah nilai deafult jika tidak ada input jumlah

        // Mendapatkan keranjang dari session / buat keranjang kosong jika tidak ada
        $cart = session()->get('cart', []);

        $shoesName = $shoes->name;

        // Jika sepatu yang ditambahkan sudah dikeranjang, tambahkan jumlah / stok nya saja
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $qty;
        } else {
            $cart[$id] = [
                'name' => $shoes->name,
                'price' => $shoes->price,
                'stock' => $shoes->stock,
                'size' => $shoes->size,
                'quantity' => $qty,
                'image' => $shoes->imagedetail[0]->image
            ];
        }

        $countSession = count($cart);

        // Simpan keranjang ke dalam session
        session()->put('cart', $cart);

        // Menghitung Jumlah Pesanan di keranjang
        session()->put('count_cart', $countSession);

        $message = [
            "type-message" => "success",
            "message" => "Berhasil Menambahkan <b>{$shoesName}</b> ke <b>Keranjang</b>"
        ];

        return redirect()->route("order.view")->with($message);
    }

    public function viewCart()
    {
        // Mengambil keranjang dari session
        $cart = session()->get('cart', []);

        return view('transaction.cart',  compact('cart'));
    }

    public function removeFromCart($id)
    {
        // Mengambil keranjang dari session
        $cart = session()->get('cart', []);

        $shoesName = isset($cart[$id]) ? $cart[$id]['name'] : 'Sepatu tidak ditemukan';

        // Hapus item dari keranjang jika ada
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        $countSession = count($cart);

        session()->put('count_cart', $countSession);

        $message = [
            "type-message" => "success",
            "message" => "Berhasil Menghapus <br> <b>{$shoesName}</b> dari <b>Keranjang</b>"
        ];

        return redirect()->back()->with($message);
    }

    public function clearCart()
    {
        // Mengosongkan keranjang dari session
        session()->forget('cart');
        session()->put('count_cart', 0);

        $message = [
            "type-message" => "success",
            "message" => "Berhasil Mengkosongkan <b>Keranjang</b>"
        ];

        return redirect()->back()->with($message);
    }

    public function checkout()
    {
        // Mengambil keranjang dari session
        $cart = session()->get('cart', []);

        return view('transaction.checkout',  compact('cart'));
    }
}
