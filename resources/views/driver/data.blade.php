@extends('layouts.main')

@section('title', 'Data Driver')
@section('page_title', 'Tabel Driver')

@section('content')
    <div class="w-full px-32 py-6 mx-auto my-32">
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white dark:bg-gray-800 border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex items-center justify-between bg-blue-900 p-6 pb-6 mb-2 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="dark:text-white text-gray-100 text-2xl uppercase font-mono font-bold">Data Driver</h6>
                        <a href="{{ route('driver.create') }}" class="ml-auto font-medium uppercase text-white px-4 py-2 rounded-lg ">
                            <button class="bg-white text-center w-56 rounded-2xl h-14 relative text-black text-xl font-semibold group" type="button">
                                <div class="bg-green-400 rounded-xl h-12 w-1/4 flex items-center justify-center absolute left-1 top-[4px] group-hover:w-[215px] z-10 duration-500">
                                    <i class="bi bi-plus-square-fill text-xl text-white"></i>
                                </div>
                                <p class="translate-x-2">Tambah</p>
                            </button>

                        </a>
                    </div>
                    <div class="flex-auto px-2 pt-0 pb-3">
                        <div class="p-0 overflow-x-auto">
                            <table class="items-center w-full mb-0 align-center border-collapse dark:border-white/40 text-slate-500">
                                <thead class="align-bottom">
                                    <tr>
                                        <th class="px-1 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            NO</th>
                                        <th class="px-1 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            NAMA DRIVER</th>
                                        <th class="px-1 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            EMAIL</th>
                                        <th class="px-1 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            NOMOR TELEPON</th>
                                        <th class="px-1 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            ALAMAT</th>
                                        <th class="px-1 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            FOTO PROFIL</th>
                                        <th class="px-1 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($driver as $see)
                                        <tr>
                                            <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2 py-1">
                                                    <div class="flex flex-col justify-center">
                                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">{{ $loop->iteration }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-2 align-middle justify-center bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p class="mb-0 text-xs font-semibold text-center leading-tight dark:text-white dark:opacity-80">{{ $see->name }}
                                                </p>
                                            </td>
                                            <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">{{ $see->email }}</p>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                @if (empty($see->no_hp))
                                                    <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">Masih Belum Memasukkan</span>
                                                @endif
                                                <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $see->no_hp }}</span>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                @if (empty($see->address))
                                                    <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">Masih Belum Memasukkan</span>
                                                @endif
                                                <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $see->address }}</span>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                @if (empty($see->avatar))
                                                    <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">Belum Memasukkan Profil</span>
                                                @endif
                                                @if (!empty($see->avatar))
                                                    <!-- Buat ID Modal Dinamis -->
                                                    @php $avatarId = "avatar-" . $see->id . "-"; @endphp
                                                    <button data-modal-target="{{ $avatarId }}" data-modal-toggle="{{ $avatarId }}" class="relative px-4 py-2 text-sm font-medium rounded-md bg-white isolation-auto z-10 border-2 border-blue-900 before:absolute before:w-full before:text-blue-900 before:transition-all before:duration-700 before:hover:w-full hover:text-white before:-left-full before:hover:left-0 before:rounded-full before:bg-blue-900 before:-z-10 before:aspect-square before:hover:scale-150 overflow-hidden before:hover:duration-500" type="button">
                                                        LIHAT FOTO PROFIL
                                                    </button>

                                                    <!-- Main Modal -->
                                                    <div id="{{ $avatarId }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                            <!-- Modal content -->
                                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                                <!-- Modal header -->
                                                                <div class="flex items-center justify-between p-4 md:p-5 shadow- border-b rounded-t bg-blue-900 dark:border-gray-600">
                                                                    <h3 class="text-xl font-semibold uppercase text-white dark:text-white">
                                                                        Foto Profil Akun {{ $see->name }}
                                                                    </h3>
                                                                </div>
                                                                <!-- Modal body -->
                                                                <div class="p-4 md:p-5 space-y-4">
                                                                    <img src="{{ asset('uploads/avatar/' . $see->avatar) }}" width="100%">
                                                                </div>
                                                                <!-- Modal footer -->
                                                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                    <button data-modal-hide="{{ $avatarId }}" type="button" class="relative w-full px-4 py-2 text-sm font-medium rounded-md bg-white isolation-auto z-10 border-2 border-blue-900 before:absolute before:w-full before:text-blue-900 before:transition-all before:duration-700 before:hover:w-full hover:text-white before:-left-full before:hover:left-0 before:rounded-full before:bg-blue-900 before:-z-10 before:aspect-square before:hover:scale-150 overflow-hidden before:hover:duration-700">TUTUP</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </td>

                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <form action="{{ route('driver.destroy', $see->id) }}" method="POST" class="flex space-x-4">
                                                    @csrf
                                                    @method('DELETE')

                                                    <!-- Edit Button with animation -->
                                                    <a href="{{ route('driver.edit', $see->id) }}" class="text-xl font-semibold uppercase bg-yellow-300 hover:bg-yellow-400 text-white px-4 py-2 rounded-lg transform transition duration-200 ease-in-out hover:scale-110">
                                                        <button type="button">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </button>
                                                    </a>

                                                    <!-- Delete Button with animation -->
                                                    <button type="submit" class="text-xl font-semibold uppercase bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transform transition duration-200 ease-in-out hover:scale-110">
                                                        <i class="bi bi-trash-fill"></i>
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
