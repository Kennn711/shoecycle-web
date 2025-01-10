<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

use function PHPUnit\Framework\isNull;

class SessionController extends Controller
{
    function index()
    {
        return view("welcome");
    }

    function loginPage()
    {
        return view("auth.login");
    }

    function login(Request $request)
    {
        $validation = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($validation)) {
            $request->session()->regenerate();

            $user = Auth::user();

            $message = [
                "type-message" => "success",
                "message" => "Selamat Datang, <b>$user->name</b>"
            ];

            // Logika login multi role
            if ($user->role === 'admin') {
                return redirect()->intended('dashboard')->with($message);
            } else if ($user->role === 'customer') {
                return redirect()->intended('order')->with($message);
            } else if ($user->role === 'driver') {
                return redirect()->intended('ordershoes')->with($message);
            }
        } else {
            $message = [
                'type-message' => 'error',
                'message' => 'Email / Password anda salah !'
            ];
            return redirect()->back()->with($message);
        }
    }

    function register(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $validation['password'] = bcrypt($request->password);

        User::create($validation);

        $message = [
            "type-message" => "success",
            "message" => "Anda Berhasil Membuat Akun <br><b>Silahkan Login !</b>"
        ];

        return redirect()->route("login")->with($message);
    }

    function dashboard()
    {
        return view("page.dashboard");
    }

    function logout()
    {
        $user = Auth::user();

        Auth::logout();

        $message = [
            "type-message" => "success",
            "message" => "Sampai Jumpa lagi, <b>$user->name</b>"
        ];

        return redirect()->route("login")->with($message);
    }


    // Lengkapi Profil Akun
    function completeProfile()
    {
        $user = Auth::user();

        if ($user->role == 'admin' || $user->role == 'driver') {
            return view('auth.account-profile.backend-desc-account', compact('user'));
        }

        if ($user->role == 'customer') {
            return view('auth.account-profile.desc-account', compact('user'));
        }
    }

    function storeProfile(Request $request)
    {
        $validation = $request->validate([
            'email'    => 'required',
            'name'     => 'required',
            'no_hp'    => 'nullable',
            'address'  => 'nullable',
            'avatar'    => 'image|mimes:jpeg,png,jpg,webp'
        ]);

        // cek pass
        $user = User::find(Auth::user()->id);
        if (!empty($validation['password'])) {
            $validation['password'] = bcrypt($request->password);
        }
        if ($request->hasFile('avatar')) {
            // Hapus avatar yang lama (Jika Ada)
            if ($user->avatar) {
                $oldImagePath = public_path('uploads/avatar/' . $user->avatar);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Menghapus file avatar yang lama
                }
            }

            // Simpan Avatar yang baru
            $file_name = rand(1000, 9999) . '.' . date('ymdHis') . '.' . $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move(public_path('uploads/avatar/'), $file_name);
            $validation['avatar'] = $file_name;
        }

        $user->update($validation);

        $userName = Auth::user();
        $message = [
            "type-message" => "success",
            "message" => "Berhasil Mengupdate Akun <b>$userName->name</b>"
        ];

        if (Auth::user()->role == 'customer') {
            return redirect()->route('view.cart')->with($message);
        }
        if (Auth::user()->role == 'admin') {
            return redirect()->route('page.dashboard')->with($message);
        }
        if (Auth::user()->role == 'driver') {
            return redirect()->route('ordershoes.view')->with($message);
        }
    }

    public function updateCheckout(Request $request)
    {
        $validasi = $request->validate([
            'address' => 'required',
            'no_hp' => 'required'
        ]);

        $user = User::find(Auth::user()->id);

        $user->update($validasi);

        $message = [
            "type-message" => "success",
            "message" => "Berhasil Mengupdate Profil"
        ];

        return redirect()->back()->with($message);
    }
}
