<?php

namespace App\Http\Controllers;

use App\Models\ImageDetail;
use App\Models\Shoes;
use Illuminate\Http\Request;

class ShoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("shoes.data", [
            "shoes" => Shoes::with('imagedetail')->orderBy('name', 'asc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("shoes.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            "name" => "required",
            "size" => "required",
            "price" => "required",
            "stock" => "required",
            "description" => "required",
            "image.*" => "required|image|mimes:jepg,png,jpg"
        ]);

        // Menghapus "image" dari array validation agar tidak disimpan ke dalam tabel shoes
        unset($validation["image"]);

        // Menyimpan data yang dimasukkan ke dalam tabel shoes 
        $shoes = Shoes::create($validation);

        // Memeriksa apakah ada file gambar yang diupload
        if ($request->hasFile("image")) {
            foreach ($request->file("image") as $file) {
                $file_name = rand(1000, 9000) . date("ymdHis") . '.' . $file->getClientOriginalName();

                // Memindahkan file gambar ke folder public/uploads/shoes
                $file->move(public_path("uploads/shoes/"), $file_name);

                ImageDetail::create([
                    "shoes_id" => $shoes->id, // Foreign key dari sepatu yang akan disimpan di table
                    "image" => "uploads/shoes/" . $file_name, // path atau lokasi file gambar disimpan
                ]);
            }
        }

        $message = [
            "type-message" => "success",
            "message" => "Berhasil Tambah Sepatu : <br> <b>$request->name</b>",
        ];

        return redirect()->route("shoes.index")->with($message);
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
        $shoes = Shoes::with('imagedetail')->findOrFail($id);

        return view("shoes.form-edit", [
            "shoes" => $shoes
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validation = $request->validate([
            "name" => "required",
            "size" => "required",
            "price" => "required",
            "stock" => "required",
            "description" => "required",
            "image.*" => "nullable|image|mimes:jpeg,png,jpg,webp"
        ]);

        // Temukan sepatu berdasarkan id
        $shoes = Shoes::find($id);

        // Cek apakah ada file gambar baru yang diupload
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            foreach ($shoes->imagedetail as $imageDetail) {
                $oldImagePath = public_path($imageDetail->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
                $imageDetail->delete();
            }

            // Simpan gambar baru
            foreach ($request->file('image') as $file) {
                $file_name = rand(1000, 9999) . date("ymdHis") . '.' . $file->getClientOriginalName();
                $file->move(public_path("uploads/shoes/"), $file_name);

                // Simpan detail gambar ke dalam tabel image_detail
                ImageDetail::create([
                    'shoes_id' => $shoes->id,
                    'image' => "uploads/shoes/" . $file_name,
                ]);
            }
        }

        // Update Data Sepatu
        $shoes->update($validation);

        $message = [
            "type-message" => "success",
            "message" => "Berhasil Edit Sepatu : <br> <b>$request->name</b>"
        ];

        return redirect()->route("shoes.index")->with($message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shoes = Shoes::find($id);
        $shoesName = $shoes->name;

        if (!$shoes) {
            return redirect()->route("shoes.index");
        }

        $images = ImageDetail::where("shoes_id", $shoes->id)->get();

        foreach ($images as $image) {
            // Menentukan path file gambar
            $file_path = public_path("uploads/shoes/" . basename($image->image));

            if (file_exists($file_path)) {
                unlink($file_path);
            }

            // Hapus gambar dari table image_detail 
            $image->delete();
        }


        $shoes->delete();

        $message = [
            "type-message" => "success",
            "message" => "Berhasil Menghapus Sepatu : <br> <b>{$shoesName}</b>"
        ];

        return redirect()->route("shoes.index")->with($message);
    }

    // Function menampilkan id sepatu ke view pesanan (POV Customer)
    public function order()
    {
        return view("order.data", [
            "shoes" => Shoes::with('imagedetail')->get()
        ]);
    }

    public function orderDetail($id)
    {
        $shoes = Shoes::with("imagedetail")->findOrFail($id);

        return view("order.detail-shoes", [
            "shoes" => $shoes,
        ]);
    }
}
