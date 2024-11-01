@extends('layouts.main')

@section('title', 'Data Sepatu')
@section('page_title', 'Tabel Sepatu')

@section('content')
    <div class="w-full px-32 py-6 mx-auto my-32">
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white dark:bg-gray-800 border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex items-center justify-between bg-blue-900 p-6 pb-6 mb-2 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="dark:text-white text-gray-100 text-2xl uppercase font-mono font-bold">Data Sepatu</h6>
                        <a href="{{ route('shoes.create') }}" class="ml-auto font-medium uppercase text-white bg-green-500 transition-colors duration-200 px-4 py-2 rounded-lg hover:bg-green-600">
                            <i class="bi bi-plus-square-fill text-2xl text-white"></i>
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
                                            NAMA SEPATU</th>
                                        <th class="px-1 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            UKURAN</th>
                                        <th class="px-1 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            HARGA</th>
                                        <th class="px-1 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            STOK</th>
                                        <th class="px-1 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            DESKRIPSI</th>
                                        <th class="px-1 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            GAMBAR SEPATU</th>
                                        <th class="px-1 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($shoes as $see)
                                        <tr>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="py-1">
                                                    <div class="flex flex-col justify-center">
                                                        <h6 class="mb-0 text-center align-middle text-sm dark:text-white">{{ $loop->iteration }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80">{{ $see->name }}
                                                </p>
                                            </td>
                                            <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80">{{ $see->size }}</p>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">Rp {{ number_format($see->price, 0, ',', '.') }}</span>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $see->stock }}</span>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $see->description }}</span>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                @foreach ($see->imagedetail as $index => $detail)
                                                    <!-- Buat ID Modal Dinamis -->
                                                    @php $modalId = "modal-" . $see->id . "-" . $index; @endphp

                                                    <!-- Tombol Lihat Gambar -->
                                                    <button data-modal-target="{{ $modalId }}" data-modal-toggle="{{ $modalId }}" class="text-white bg-blue-800 hover:bg-blue-900 transition-colors duration-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                                        LIHAT GAMBAR
                                                    </button>

                                                    <!-- Main Modal -->
                                                    <div id="{{ $modalId }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                            <!-- Modal content -->
                                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                                <!-- Modal header -->
                                                                <div class="flex items-center justify-between p-4 md:p-5 shadow- border-b rounded-t bg-blue-900 dark:border-gray-600">
                                                                    <h3 class="text-xl font-semibold uppercase text-white dark:text-white">
                                                                        Gambar {{ $see->name }}
                                                                    </h3>
                                                                </div>
                                                                <!-- Modal body -->
                                                                <div class="p-4 md:p-5 space-y-4">
                                                                    <img src="{{ asset($detail->image) }}" width="100%">
                                                                </div>
                                                                <!-- Modal footer -->
                                                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                    <button data-modal-hide="{{ $modalId }}" type="button" class="h-12 text-white w-full transition-colors duration-200 bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-duration-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600">TUTUP</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </td>

                                            @php
                                                $isInDetails = DB::table('transaction_details')
                                                    ->where('shoes_id', $see->id)
                                                    ->exists();
                                            @endphp

                                            @if (!$isInDetails)
                                                <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <form action="{{ route('shoes.destroy', $see->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('shoes.edit', $see->id) }}" class="text-xl font-semibold uppercase bg-yellow-300 hover:bg-yellow-400 transition-colors duration-200 text-white px-4 py-2 rounded-lg"><button type="button"><i class="bi bi-pencil-square"></i></button></a>
                                                        <button type="submit" class="text-xl font-semibold uppercase bg-red-500 hover:bg-red-600 transition-colors duration-200 text-white px-4 py-2 rounded-lg "><i class="bi bi-trash-fill"></i></button>
                                                    </form>
                                                </td>
                                            @endif

                                            @if ($isInDetails)
                                                <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <a href="{{ route('shoes.edit', $see->id) }}" class="text-xl font-semibold uppercase bg-yellow-300 hover:bg-yellow-400 transition-colors duration-200 text-white px-4 py-2 rounded-lg"><button type="button"><i class="bi bi-pencil-square"></i></button></a>
                                                </td>
                                            @endif
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
