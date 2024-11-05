@extends('layouts-backend/index')

@section('backend-title', 'Admin | Tambah Akun Driver')
@section('breadcumb-role', 'Admin')
@section('breadcumb-title', 'Kelola Driver')
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

                    <div class="grid max-w-2xl mx-auto mt-8">
                        <div class="flex flex-col items-center space-y-5 sm:flex-row sm:space-y-0">

                            <img class="object-cover w-40 h-40 p-1 rounded-full ring-2 ring-[#1E293B] dark:ring-[#1E293B]" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGZhY2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="Bordered avatar">

                            <div class="flex flex-col space-y-5 sm:ml-8">
                                <button type="button" class="py-2 px-4 text-base font-medium text-white focus:outline-none bg-[#1E293B] rounded-lg border border-indigo-200 hover:rounded-xl duration-300 focus:z-10 focus:ring-4 focus:ring-indigo-200 ">
                                    <i class="bi bi-upload text-xl"></i>
                                </button>
                            </div>
                        </div>

                        <div class="items-center mt-8 sm:mt-14 text-[#202142]">

                            <div class="flex flex-col items-center w-full mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-4 sm:space-y-0 sm:mb-6">
                                <div class="w-full">
                                    <label for="first_name" class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">
                                        Username</label>
                                    <input type="text" id="first_name" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Masukkan Username Driver" required>
                                </div>

                                <div class="w-full">
                                    <label for="password" class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">
                                        Password</label>
                                    <input type="password" id="password" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Masukkan Password Akun" required>
                                </div>

                            </div>

                            <div class="mb-2 sm:mb-6">
                                <label for="email" class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Email</label>
                                <input type="email" id="email" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Masukkan Email Akun" required>
                            </div>

                            <div class="flex flex-col items-center w-full mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-4 sm:space-y-0 sm:mb-6">
                                <div class="w-full">
                                    <label for="no_hp" class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Nomor Telepon</label>
                                    <input type="number" id="no_hp" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Masukkan Nomor Telepon Driver" required>
                                </div>

                                <div class="w-full">
                                    <label for="address" class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Alamat</label>
                                    <input type="text" id="address" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Masukkan Alamat Driver" required>
                                </div>

                            </div>
                            <hr class="mt-8 border-gray-300 dark:border-gray-700">
                            <button type="submit" class="w-full mt-8 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-[#1E293B] text-white hover:rounded-3xl duration-300 focus:outline-none focus:bg-[#1E293B] disabled:opacity-50 disabled:pointer-events-none">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
