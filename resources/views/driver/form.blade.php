@extends('layouts-backend/index')

@section('backend-title', 'Admin | Tambah Akun Driver')
@push('breadcumb-role')
    {{ auth()->user()->role }}
@endpush

@section('breadcumb-title', 'Kelola Driver')
@push('breadcumb-backend-role')
    <i class="fi-br-admin w-6 h-6 text-xl"></i>
@endpush

@push('breadcumb-sub-title')
    <svg class = "w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fillRule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clipRule="evenodd"></path>
    </svg>
    <p class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Tambah Akun Driver</p>
@endpush

@section('backend-content')
    <div class="flex justify-center items-center min-h-screen">
        <main class="w-full min-h-screen py-1 md:w-2/3 lg:w-3/4">
            <div class="p-2 md:p-4 flex justify-center">
                <div class="w-full px-6 pb-8 mt-8 pt-8 sm:max-w-xl rounded-3xl shadow-xl bg-white">
                    <h2 class="text-3xl font-bold text-gray-800 sm:text-3xl text-center dark:text-white">Tambah Akun Driver</h2>
                    <hr class="mt-8 border-gray-300 dark:border-gray-700">

                    <form action="{{ route('driver.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid max-w-2xl mx-auto mt-8">
                            <div class="mx-auto w-64 text-center">
                                <div class="relative w-64 h-64 cursor-pointer" onclick="document.getElementById('avatar').click();">
                                    <img id="preview-img" class="w-64 h-64 rounded-full object-cover shadow-2xl" src="{{ asset('uploads/avatar/empty-avatar.webp') }}" alt="Foto Profil Driver" />
                                    <div class="w-64 h-64 group hover:bg-gray-200 opacity-60 rounded-full absolute top-0 left-0 flex justify-center items-center transition duration-500">
                                        <i class="bi bi-upload hidden group-hover:block w-12 text-4xl"></i>
                                    </div>
                                </div>
                                <input type="file" id="avatar" name="avatar" class="hidden" accept="image/*" onchange="previewFile()">
                                <!-- Tambahkan elemen ini untuk menampilkan nama file -->
                                <p id="file-name" class="mt-2 text-sm text-gray-600"></p>
                            </div>

                            <script>
                                function previewFile() {
                                    const fileInput = document.getElementById('avatar');
                                    const previewImg = document.getElementById('preview-img');
                                    const fileNameDisplay = document.getElementById('file-name');

                                    const file = fileInput.files[0];
                                    if (file) {
                                        const reader = new FileReader();
                                        reader.onload = function(e) {
                                            previewImg.src = e.target.result;
                                        };
                                        reader.readAsDataURL(file);

                                        // Tampilkan nama file di bawah gambar
                                        fileNameDisplay.textContent = file.name;
                                    } else {
                                        previewImg.src = 'https://images.pexels.com/photos/2690323/pexels-photo-2690323.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500';
                                        fileNameDisplay.textContent = '';
                                    }
                                }
                            </script>



                            <div class="items-center mt-8 sm:mt-14 text-[#202142]">

                                <div class="flex flex-col items-center w-full mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-4 sm:space-y-0 sm:mb-6">
                                    <div class="w-full">
                                        <label for="first_name" class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">
                                            Username</label>
                                        <input type="text" value="{{ old('name') }}" name="name" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Masukkan Username Driver">
                                    </div>

                                    <div class="w-full">
                                        <label for="password" class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">
                                            Password</label>
                                        <input type="password" value="{{ old('password') }}" name="password" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Masukkan Password Akun">
                                    </div>

                                </div>

                                <div class="mb-2 sm:mb-6">
                                    <label for="email" class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Email</label>
                                    <input type="email" value="{{ old('email') }}" name="email" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Masukkan Email Akun">
                                </div>

                                <div class="flex flex-col items-center w-full mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-4 sm:space-y-0 sm:mb-6">
                                    <div class="w-full">
                                        <label for="no_hp" class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Nomor Telepon</label>
                                        <input type="number" value="{{ old('no_hp') }}" name="no_hp" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Masukkan Nomor Telepon Driver">
                                    </div>

                                    <div class="w-full">
                                        <label for="address" class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Alamat</label>
                                        <input type="text" value="{{ old('address') }}" name="address" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Masukkan Alamat Driver">
                                    </div>

                                </div>
                                <hr class="mt-8 mb-8 border-gray-300 dark:border-gray-700">
                                <button class="w-full py-3 px-4 transition-all duration-300 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-3xl border border-transparent bg-[#1E293B] text-white hover:shadow-md hover:shadow-slate-600 focus:outline-none focus:bg-[#1E293B] disabled:opacity-50 disabled:pointer-events-none">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
@endsection
