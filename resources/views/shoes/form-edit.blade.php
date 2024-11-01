@extends('layouts.main')

@section('title', 'FORM EDIT SEPATU')
@section('page_title', 'Data Sepatu')

@section('content')
    <div class="w-1/2 mx-auto my-32">
        <div class="shadow-md p-6 bg-blue-900 dark:bg-gray-800 rounded-t-lg">
            <div class="flex justify-between items-center mb-1">
                <h2 class="text-2xl font-bold mb-2 text-white uppercase dark:text-white">Form Edit Sepatu</h2>
                <a href="{{ route('shoes.index') }}" class="font-semibold text-2xl transition-colors duration-200 uppercase text-white bg-white px-6 py-2 rounded-lg hover:bg-gray-400"><i class="bi bi-arrow-return-left text-blue-900"></i></a>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-b-lg p-6 dark:bg-gray-800">
            <form action="{{ route('shoes.update', $shoes->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="name" value="{{ $shoes->name }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Sepatu</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="size" value="{{ $shoes->size }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_size" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Ukuran</label>
                </div>

                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="price" value="{{ $shoes->price }}" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Harga</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="stock" value="{{ $shoes->stock }}" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Stok</label>
                    </div>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Sepatu</label>
                    <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Deskripsi Sepatu">{{ $shoes->description }}</textarea>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar Sepatu Lama :</label>

                    <!-- Trigger Button -->
                    <button type="button" data-modal-target="shoes-modal-{{ $shoes->id }}" data-modal-toggle="shoes-modal-{{ $shoes->id }}" class="block mb-3 transition-colors duration-200 text-white w-full bg-blue-800 hover:bg-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        LIHAT GAMBAR
                    </button>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="file_input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan Gambar Baru : </label>
                        <div class="file-inputs"></div>
                        <button type="button" class="tambah mb-2 text-white bg-green-500 px-4 py-2 rounded-lg hover:bg-green-600 transition-colors duration-200">Tambah Gambar</button>
                    </div>
                </div>
                <button class="w-full font-semibold uppercase transition-colors duration-200 text-white bg-green-500 px-4 py-2 rounded-lg hover:bg-green-600">UBAH</button>
        </div>
        </form>
        <!-- Main Modal -->
        <div id="shoes-modal-{{ $shoes->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal Content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal Header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t bg-blue-900 dark:border-gray-600">
                        <h3 class="text-xl font-semibold uppercase text-white shadow-xl dark:text-white">
                            Gambar {{ $shoes->name }}
                        </h3>
                        <button type="button" class="text-gray-400 transition-colors duration-200 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="shoes-modal-{{ $shoes->id }}">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal Body -->
                    <div class="owl-carousel owl-theme p-4 md:p-5 space-y-4">
                        @foreach ($shoes->imagedetail as $see)
                            <div class="item">
                                <img src="{{ asset($see->image) }}" class="w-[300px] h-[300px] object-cover">
                            </div>
                        @endforeach
                    </div>
                    <!-- Modal Footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="shoes-modal-{{ $shoes->id }}" type="button" class="text-white w-full transition-colors duration-200 bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
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

                $(this).closest('.relative').append(fileInput);

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
