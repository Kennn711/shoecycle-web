@extends('layouts-backend/index')

@section('backend-title', 'Admin | Tambah Sepatu')
@push('breadcumb-role')
    {{ auth()->user()->role }}
@endpush

@section('breadcumb-title', 'Data Sepatu')
@push('breadcumb-backend-role')
    <i class="fi-br-admin w-6 h-6 text-xl"></i>
@endpush

@push('breadcumb-sub-title')
    <svg class = "w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fillRule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clipRule="evenodd"></path>
    </svg>
    <p class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Tambah Sepatu</p>
@endpush
@section('backend-content')
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="max-w-xl mx-auto bg-white p-10 rounded-3xl shadow-lg">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-gray-800 sm:text-3xl dark:text-white">
                    Form Tambah Sepatu
                </h1>
                <hr class="mt-8 border-gray-300 dark:border-gray-700">
            </div>

            <div class="mt-8">
                <form action="{{ route('shoes.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-4 lg:gap-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                            <div>
                                <label for="name" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Nama Sepatu</label>
                                <input type="text" value="{{ old('name') }}" name="name" class="py-3 px-4 transition-all duration-300 block w-full border-gray-200 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            </div>

                            <div>
                                <label for="size" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Ukuran</label>
                                <input type="number" value="{{ old('size') }}" name="size" class="py-3 px-4 transition-all duration-300 block w-full border-gray-200 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            </div>
                        </div>

                        <div>
                            <label for="price" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Harga</label>
                            <input type="number" value="{{ old('price') }}" name="price" class="py-3 px-4 transition-all duration-300 block w-full border-gray-200 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                            <div>
                                <label for="stock" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Stok</label>
                                <input type="number" value="{{ old('stock') }}" name="stock" class="py-3 px-4 transition-all duration-300 block w-full border-gray-200 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            </div>

                            <div class="flex items-end justify-center">
                                <button type="button" class="tambah rounded-md px-3.5 py-2 w-full m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-[#1E293B] text-[#1E293B] hover:text-white">
                                    <span class="absolute w-64 h-0 transition-all duration-500 origin-center rotate-45 -translate-x-20 bg-[#1E293B] top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                                    <span class="relative text-[#1E293B] transition duration-500 group-hover:text-white ease">Tambah Gambar</span>
                                </button>
                            </div>

                        </div>

                        <div>
                            <label for="description" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Deskripsi</label>
                            <textarea style="resize: none" value="{{ old('description') }}" name="description" rows="5" class="py-3 px-4 transition-all duration-300 block w-full border-gray-200 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"></textarea>
                        </div>
                    </div>

                    <div class="max-w-2xl mx-auto mt-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Masukkan Gambar Sepatu</label>
                    </div>

                    <div class="relative z-0 w-full mb-5 group file-inputs">
                    </div>

                    <hr class="mt-8 border-gray-300 dark:border-gray-700">

                    <div class="mt-8 grid">
                        <button class="w-full py-3 px-4 transition-all duration-300 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-3xl border border-transparent bg-[#1E293B] text-white hover:shadow-md hover:shadow-slate-600 focus:outline-none focus:bg-[#1E293B] disabled:opacity-50 disabled:pointer-events-none">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/jquery/jquery.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".tambah").on("click", function() {
                let fileInput = `
            <div class="flex items-center gap-2 mt-2">
                <input name="image[]" type="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" multiple>
                <button type="button" class="delete-input text-white bg-red-500 px-3 py-2 rounded-lg hover:bg-red-600 transition-colors duration-200"><i class="bi bi-trash-fill text-xl"></i></button>
            </div>`;

                $(".file-inputs").append(fileInput);

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
