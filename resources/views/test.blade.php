@extends('layouts.main')

@section('title', 'Tabel Transaksi')
@section('page_title', 'Data Transaksi')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/datatable/flowbite.css') }}">
@endpush

@section('content')
    <div class="w-full pl-24 pr-8 py-6 mx-auto my-32">
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white dark:bg-gray-800 border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex bg-blue-900 items-center justify-center p-6 pb-6 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="dark:text-white text-gray-100 text-xl uppercase font-mono font-bold">Data Transaksi yang Dilakukan</h6>
                    </div>
                    <div class="flex-auto px-2 pt-0 pb-3">
                        <div class="p-0 overflow-x-auto">
                            <table class="items-center w-full mb-0 align-center border-collapse dark:border-white/40 text-slate-500">
                                <thead class="align-bottom">
                                    <tr>
                                        <th class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">NO</th>
                                        <th class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">NAMA CUSTOMER</th>
                                        <th class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">BUKTI PEMBAYARAN</th>
                                        <th class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">TANGGAL PEMBELIAN</th>
                                        <th class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">TANGGAL DITERIMA</th>
                                        <th class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">TOTAL</th>
                                        <th class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">KODE RESI</th>
                                        <th class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">DETAIL</th>
                                        <th class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">STATUS TRANSAKSI</th>
                                        <th class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">STATUS PENGIRIMAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $see)
                                        <tr>
                                            <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="py-1">
                                                    <h6 class="mb-0 text-sm text-center leading-normal dark:text-white">{{ $loop->iteration }}</h6>
                                                </div>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">{{ $see->user->name }}</p>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                @php $modalId = "modal-" . $see->id; @endphp
                                                <button data-modal-target="{{ $modalId }}" data-modal-toggle="{{ $modalId }}" class=" text-white transition-colors duration-200 bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-duration-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                                    LIHAT GAMBAR
                                                </button>

                                                <div id="{{ $modalId }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                        <div class="relative rounded-lg shadow dark:bg-gray-700">
                                                            <div class="flex items-center justify-between p-4 md:p-5 border-blue-950 rounded-t shadow-xl bg-blue-900 dark:border-gray-600">
                                                                <h3 class="text-xl font-semibold uppercase text-white dark:text-white">Bukti Pembayaran</h3>
                                                            </div>
                                                            <div class="p-4 md:p-5 space-y-4 bg-white">
                                                                <img src="{{ asset('uploads/payment/' . $see->proof_of_payment) }}" width="100%">
                                                            </div>
                                                            <div class="flex items-center p-4 md:p-5 border-t bg-white border-gray-200 rounded-b dark:border-gray-600">
                                                                <button data-modal-hide="{{ $modalId }}" type="button" class="h-12 text-white w-full transition-colors duration-200 bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-duration-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600">TUTUP</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $see->payment_date }}</span>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $see->received_date }}</span>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">Rp {{ number_format($see->total, 0, ',', '.') }}</span>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $see->code }}</span>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                @php $modalDetailId = "modaldetail-" . $see->id; @endphp
                                                <button data-modal-target="{{ $modalDetailId }}" data-modal-toggle="{{ $modalDetailId }}" class=" text-white transition-colors duration-200 bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-duration-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                                    LIHAT DETAIL
                                                </button>

                                                <div id="{{ $modalDetailId }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t bg-blue-900 shadow-xl dark:border-gray-600">
                                                                <h3 class="text-xl font-semibold text-white uppercase dark:text-white">Detail Pesanan {{ $see->code }}</h3>
                                                            </div>
                                                            <div class="p-4 md:p-5 space-y-4">

                                                            </div>
                                                            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                <button data-modal-hide="{{ $modalDetailId }}" type="button" class="h-12 text-white w-full transition-colors duration-200 bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-duration-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600">TUTUP</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                @if ($see->transaction_status == 'accepted')
                                                    <button disabled class="text-sm w-40 font-semibold bg-yellow-300 uppercase text-white px-5 py-2.5 rounded-lg">DIPROSES</button>
                                                @endif

                                                @if ($see->transaction_status == 'pending')
                                                    <form action="{{ route('transaction.status', $see->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        <input type="hidden" name="transaction_status" value="accepted">
                                                        <button type="submit" class="text-sm font-semibold uppercase bg-green-700 text-white px-5 py-2.5 rounded-lg">TERIMA</button>
                                                    </form>
                                                    <form action="{{ route('transaction.status', $see->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        <input type="hidden" name="transaction_status" value="cancelled">
                                                        <button type="submit" class="text-sm font-semibold uppercase bg-red-700 text-white px-5 py-2.5 rounded-lg">TOLAK</button>
                                                    </form>
                                                @endif

                                                @if ($see->transaction_status == 'completed')
                                                    <button disabled class="text-sm w-40 font-semibold bg-green-700 uppercase text-white px-5 py-2.5 rounded-lg">SELESAI</button>
                                                @endif

                                                @if ($see->transaction_status == 'cancelled')
                                                    <button disabled class="text-sm font-semibold uppercase bg-red-700 w-40 text-white px-5 py-2.5 rounded-lg">DIBATALKAN</button>
                                                @endif
                                            </td>
                                            @if ($see->transaction_status == 'cancelled' && is_null($see->delivery_status))
                                                <td class="text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent"></td>
                                            @endif
                                            @if ($see->delivery_status == 'pending' && is_null($see->delivery_status))
                                                <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <button disabled class="text-xs w-40 font-semibold bg-gray-400 uppercase text-white px-5 py-2.5 rounded-lg">PENDING</button>
                                                </td>
                                            @endif
                                            @if ($see->transaction_status == 'completed')
                                                <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <button disabled class="text-sm font-semibold uppercase bg-green-700 text-white px-5 py-2.5 rounded-lg">TERKIRIM</button>
                                                </td>
                                            @endif
                                            @if ($see->delivery_status == 'shipped')
                                                <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <button disabled class="text-sm font-semibold uppercase bg-yellow-300 text-white px-5 py-2.5 rounded-lg">DIKIRIM <i class="bi bi-truck text-sm"></i></button>
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
