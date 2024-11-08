<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("driver.data", [
            "driver" => User::where("role", "driver")->orderBy("name", "asc")->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("driver.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validation    =  $request->validate([
            "name"     => "required",
            "email"    => "required|unique:users",
            "password" => "required",
            "no_hp"    => "nullable|numeric",
            "address"  => "",
            "avatar"   => 'nullable|image|mimes:jpeg,png,jpg'
        ]);


        // Enkripsi Password
        $validation['password'] = bcrypt($request->password);

        // Mengset level sebagai driver
        $validation['role'] = "driver";

        if ($request->hasFile('avatar')) {
            $file_name = $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move(public_path('uploads/avatar/'), $file_name);
            $validation['avatar'] = $file_name;
        }

        User::create($validation);

        // Sweetalert
        $message = [
            "type-message" => "success",
            "message" => "Berhasil Tambah Akun Driver : <br> <b>$request->name</b>"
        ];

        return redirect()->route("driver.index")->with($message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $driver = User::findOrFail($id);

        return view("driver.form-edit", [
            "driver" => $driver
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $validation = $request->validate([
            "name"    => "required",
            "email"   => "required|unique:users,email,$id",
            "no_hp"   => "nullable|numeric",
            "address" => "nullable",
            "avatar"  => "image|mimes:jpeg,png,jpg"
        ]);

        if (!empty($request->password)) {
            $validation['password'] = bcrypt($request->password);
        }

        $driver = User::find($id);

        if ($request->hasFile('avatar')) {
            // Jika Mengupload / Mengubah Foto Profil, maka hapus yang lama
            if ($driver->avatar) {
                $oldImagePath = public_path('uploads/avatar/' . $driver->avatar);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Simpan Foto Profil yang baru
            $file_name = $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move(public_path('uploads/avatar/'), $file_name);
            $validation['avatar'] = $file_name;
        }

        $driver->update($validation);

        // Sweetalert
        $message = [
            "type-message" => "success",
            "message" => "Berhasil Edit Akun Driver : <br> <b>$request->name</b>"
        ];

        return redirect()->route("driver.index")->with($message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $driver = User::find($id);
        $driverName = $driver->name;

        $driver->delete();

        $message = [
            "type-message" => "success",
            "message" => "Berhasil Hapus Akun Driver : <br> <b>{$driverName}</b>"
        ];

        return redirect()->route("driver.index")->with($message);
    }
}
