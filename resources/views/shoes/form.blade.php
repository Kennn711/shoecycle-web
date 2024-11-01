@extends('layouts.main')

@section('title', 'FORM TAMBAH SEPATU')
@section('page_title', 'Data Sepatu')

@section('content')


    <div class="w-1/2 mx-auto my-32">
        <div class="shadow-md p-6 bg-blue-900 dark:bg-gray-800 rounded-t-lg">
            <div class="flex justify-between items-center mb-1">
                <h2 class="text-2xl font-bold mb-2 text-white uppercase dark:text-white">Form Tambah Sepatu</h2>
                <a href="{{ route('shoes.index') }}" class="font-semibold text-2xl transition-colors duration-200 uppercase text-white bg-white px-6 py-2 rounded-lg hover:bg-gray-400"><i class="bi bi-arrow-return-left text-blue-900"></i></a>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-b-lg p-6 dark:bg-gray-800">
            <form action="{{ route('shoes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Sepatu</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="size" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_size" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Ukuran</label>
                </div>

                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="price" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Harga</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="stock" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Stok</label>
                    </div>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Sepatu</label>
                    <textarea style="resize: none" id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Deskripsi Sepatu"></textarea>
                </div>

                <!-- Tombol Tambah berada di bawah deskripsi -->
                <div class="relative z-0 w-full mb-5 group">
                    <button type="button" class="tambah mb-2 text-white bg-green-500 px-4 py-2 rounded-lg hover:bg-green-600 transition-colors duration-200">Tambah Gambar</button>
                </div>

                <!-- Input File dan Tombol Delete -->
                <div class="relative z-0 w-full mb-5 group file-inputs">
                    <label for="file_input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar Sepatu</label>
                    <div class="flex items-center gap-2">
                    </div>
                </div>
                <button class="w-full font-semibold uppercase transition-colors duration-200 text-white bg-green-500 px-4 py-2 rounded-lg hover:bg-green-600">TAMBAH</button>
            </form>
        </div>
    </div>

    <script src="{{ asset('assets/jquery/jquery.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".tambah").on("click", function() {
                let fileInput = `
            <div class="flex items-center gap-2 mt-2">
                <input name="image[]" type="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" multiple>
                <button type="button" class="delete-input text-white bg-red-500 px-3 py-2 rounded-lg hover:bg-red-600 transition-colors duration-200">Delete</button>
            </div>`;

                $(this).closest('.relative').next('.file-inputs').append(fileInput);

                updateDeleteButtons();
            });

            $(document).on("click", ".delete-input", function() {
                $(this).closest('.flex').remove();

                updateDeleteButtons();
            });

            function updateDeleteButtons() {
                const fileInputs = $("input[type='file']");
                if (fileInputs.length <= 1) {
                    $(".delete-input").hide();
                } else {
                    $(".delete-input").show();
                }
            }
        });
    </script>

@endsection

@extends('layouts.partial.script')
