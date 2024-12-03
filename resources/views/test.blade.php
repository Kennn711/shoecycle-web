<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Lengkapi Profil Anda</title>
</head>

<body class="dark:bg-gray-900">
    <div class="max-w-md mx-auto my-5">
        <div class="bg-white shadow-md rounded-lg p-6 dark:bg-gray-800">
            <div class="flex justify-between items-center mb-1">
                <h2 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Profil Akun</h2>
                @if (Auth()->user()->role == 'customer')
                    <a href="{{ route('view.cart') }}" class="font-semibold uppercase text-white bg-blue-500 px-4 py-2 rounded-lg hover:bg-blue-600">Kembali</a>
                @endif
                @if (Auth()->user()->role == 'admin')
                    <a href="{{ route('page.dashboard') }}" class="font-semibold uppercase text-white bg-blue-500 px-4 py-2 rounded-lg hover:bg-blue-600">Kembali</a>
                @endif
                @if (Auth()->user()->role == 'driver')
                    <a href="{{ route('ordershoes.view') }}" class="font-semibold uppercase text-white bg-blue-500 px-4 py-2 rounded-lg hover:bg-blue-600">Kembali</a>
                @endif
            </div>
            <form action="{{ route('store.profile', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="relative z-0 w-full mb-5 group">
                    <input type="email" value="{{ old('email', $user->email) }}" name="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="name" value="{{ old('username', $user->name) }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_username" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="password" name="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" value="{{ old('address', $user->address) }}" name="address" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="number" value="{{ old('no_hp', $user->no_hp) }}" name="no_hp" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor Telepon</label>
                    </div>
                </div>

                <!-- Menampilkan Gambar Profil jika ada -->

                <div class="relative z-0 w-full mb-5 group">
                    <label for="file_input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ubah Avatar Akun Anda</label>
                    <input id="file_input" name="avatar" type="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help">
                </div>
                <div class="mb-5 grid place-items-center w-full">
                    @if ($user->avatar)
                        <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mx-auto">Avatar Lama Anda</p>
                        <img src="{{ asset('uploads/avatar/' . $user->avatar) }}" alt="Gambar Profil" class="w-24 h-24 rounded-full mb-4 mx-auto">
                    @else
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-300">Belum ada gambar profil.</p>
                    @endif
                </div>

                <button class="w-full font-semibold uppercase text-white bg-blue-500 px-4 py-2 rounded-lg hover:bg-blue-600">UBAH</button>
            </form>
        </div>
    </div>

    @extends('layouts.partial.script')
</body>

</html>
