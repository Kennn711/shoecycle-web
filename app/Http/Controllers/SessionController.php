<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    function registerPage()
    {
        return view("auth.register");
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

            // Logika login multi role
            if ($user->role === 'admin') {
                return redirect()->intended('dashboard');
            } else if ($user->role === 'customer') {
                return redirect()->intended('order');
            } else if ($user->role === 'driver') {
                return redirect()->intended('ordershoes');
            } else {
                return redirect()->route('login.view');
            }
        }
    }

    function register(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $validation['password'] = password_hash($validation['password'], PASSWORD_BCRYPT);

        User::create($validation);

        return redirect()->route("login");
    }

    function dashboard()
    {
        return view("page.dashboard");
    }

    function logout()
    {
        Auth::logout();

        return redirect()->route("login");
    }


    // Lengkapi Profil Akun
    function completeProfile()
    {
        $user = Auth::user();
        return view('auth.account-profile.desc-account', compact('user'));
    }

    function storeProfile(Request $request)
    {
        // Validasi Input
        // dd($request->all());
        $validation = $request->validate([
            'email'    => 'required',
            'name'     => 'required',
            'no_hp'    => 'numeric',
            'address'  => '',
            'avatar'    => 'image|mimes:jpeg,png,jpg'
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
            $file_name = $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move(public_path('uploads/avatar/'), $file_name);
            $validation['avatar'] = $file_name;
        }

        $user->update($validation);

        if (Auth::user()->role == 'customer') {
            return redirect()->route('view.cart')->with('success', 'Berhasil Cuy');
        }
        if (Auth::user()->role == 'admin') {
            return redirect()->route('page.dashboard')->with('success', 'Berhasil Cuy');
        }
        if (Auth::user()->role == 'driver') {
            return redirect()->route('ordershoes.view')->with('success', 'Berhasil Cuy');
        }
    }
}
