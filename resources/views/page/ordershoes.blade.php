@extends('layouts-backend/index')

@section('backend-title', 'Driver | Pesanan Sepatu')
@push('breadcumb-role')
    {{ auth()->user()->role }}
@endpush

@section('breadcumb-title', 'Daftar Pesanan')
@push('breadcumb-backend-role')
    <i class="fi-br-user-helmet-safety w-6 h-6 text-xl"></i>
@endpush

@section('backend-content')
    @if ($transactions->where('transaction_status', 'accepted')->isNotEmpty())
        <form action="{{ route('add.to.myorder') }}" method="POST">
            @csrf
            <div class="flex justify-between">
                <div>
                    <h1 class="text-2xl font-semibold ml-24 mt-3">Tabel Pesanan</h1>
                </div>
                <div>
                    <button type="submit" class="rounded-md px-3.5 py-2 m-1 mr-24 overflow-hidden relative group cursor-pointer border-2 font-medium border-[#1E293B] text-[#1E293B] hover:text-white">
                        <span class="absolute w-64 h-0 transition-all duration-500 origin-center rotate-45 -translate-x-20 bg-[#1E293B] top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                        <span class="relative text-[#1E293B] transition duration-500 group-hover:text-white ease">
                            <i class="bi bi-bookmark-plus-fill text-md text-2xl"></i>
                        </span>
                    </button>
                </div>
            </div>
            <div class="overflow-hidden rounded-3xl border border-gray-200 shadow-md mt-4 mb-5 ml-20 mr-20">
                <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                    <thead class="bg-[#1E293B]">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-50">No</th>
                            <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Nama Customer</th>
                            <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Total</th>
                            <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Kode Resi</th>
                            <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Detail</th>
                            <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Status Transaksi</th>
                            <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Pilih</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                        @php
                            $acceptedStatus = false;
                        @endphp

                        @foreach ($transactions as $see)
                            @if ($see->transaction_status == 'accepted')
                                @php
                                    $acceptedStatus = true;
                                @endphp
                                @if (empty($see->driver_id))
                                    <tr class="hover:bg-gray-100">
                                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                                        <td class="px-6 align-middle text-center py-4">{{ $see->user->name }}</td>
                                        <td class="px-6 align-middle text-center py-4">Rp {{ number_format($see->total, 0, ',', '.') }}</td>
                                        <td class="px-6 align-middle text-center py-4">{{ $see->code }}</td>
                                        <td class="px-6 align-middle text-center py-4">
                                            @php $modalDetailId = "modalproof-" . $see->id; @endphp

                                            <button type="button" data-modal-target="{{ $modalDetailId }}" data-modal-toggle="{{ $modalDetailId }}" class="rounded-md px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-[#1E293B] text-[#1E293B] hover:text-white">
                                                <span class="absolute w-64 h-0 transition-all duration-500 origin-center rotate-45 -translate-x-20 bg-[#1E293B] top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                                                <span class="relative text-[#1E293B] transition duration-500 group-hover:text-white ease">
                                                    <i class="bi bi-card-text text-xl"></i>
                                                </span>
                                            </button>

                                            @push('modal')
                                                <div id="{{ $modalDetailId }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                        <!-- Modal content -->
                                                        <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                                                            <!-- Modal header -->
                                                            <div class="flex items-center justify-between bg-[#1E293B] p-4 md:p-5 border-b rounded-t-3xl dark:border-gray-600">
                                                                <h3 class="text-xl font-semibold text-white dark:text-white">
                                                                    Detail Pesanan {{ $see->code }}
                                                                </h3>
                                                            </div>
                                                            <!-- Modal body -->
                                                            <div class=" bg-gray-100 p-4 md:p-5 space-y-4">
                                                                <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-5">
                                                                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                                            <tr>
                                                                                <th scope="col" class="px-3 py-3 text-center">
                                                                                    NO
                                                                                </th>
                                                                                <th scope="col" class="px-3 py-3 text-center">
                                                                                    NAMA SEPATU
                                                                                </th>
                                                                                <th scope="col" class="px-3 py-3 text-center">
                                                                                    JUMLAH
                                                                                </th>
                                                                                <th scope="col" class="px-3 py-3 text-center">
                                                                                    HARGA
                                                                                </th>
                                                                                <th scope="col" class="px-3 py-3 text-center">
                                                                                    SUBTOTAL
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <div class="flex flex-col space-y-6 mb-4">
                                                                                <div class="flex justify-between">
                                                                                    <div class="flex items-start">
                                                                                        <i class="bi bi-person-badge-fill mr-4 text-4xl"></i>
                                                                                        <div>
                                                                                            <h1 class="text-lg font-bold">Nama Customer</h1>
                                                                                            <p class="text-gray-600">{{ $see->user->name }}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="flex items-start">
                                                                                        <i class="bi bi-cash-stack mr-12 text-4xl"></i>
                                                                                        <div class="mr-7">
                                                                                            <h1 class="text-lg font-bold">Total Harga</h1>
                                                                                            <p class="text-gray-600">Rp {{ number_format($see->total, 0, ',', '.') }}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex justify-between">
                                                                                    <div class="flex items-start">
                                                                                        <i class="bi bi-calendar3 mr-4 text-4xl"></i>
                                                                                        <div>
                                                                                            <h1 class="text-lg font-bold">Tanggal Pembelian</h1>
                                                                                            <p class="text-gray-600">{{ $see->payment_date }}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="flex items-start">
                                                                                        <i class="bi bi-calendar2-check mr-8 text-4xl"></i>
                                                                                        <div>
                                                                                            <h1 class="text-lg font-bold">Tanggal Diterima</h1>
                                                                                            @if (empty($see->received_date))
                                                                                                <p class="text-gray-600">Belum Diterima</p>
                                                                                            @endif
                                                                                            @if (!empty($see->received_date))
                                                                                                <p class="text-gray-600">{{ $see->received_date }}</p>
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex justify-between">
                                                                                    <div class="flex items-start">
                                                                                        <i class="bi bi-receipt mr-4 text-4xl"></i>
                                                                                        <div>
                                                                                            <h1 class="text-lg font-bold">Status Transaksi</h1>
                                                                                            @if ($see->transaction_status == 'pending')
                                                                                                <p class="text-gray-600">Pesanan Belum Diproses</p>
                                                                                            @endif
                                                                                            @if ($see->transaction_status == 'cancelled')
                                                                                                <p class="text-gray-600">Pesanan Dibatalkan</p>
                                                                                            @endif
                                                                                            @if ($see->transaction_status == 'accepted')
                                                                                                <p class="text-gray-600">Pesanan Diproses</p>
                                                                                            @endif
                                                                                            @if ($see->transaction_status == 'completed')
                                                                                                <p class="text-gray-600">Selesai</p>
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="flex items-start">
                                                                                        <i class="bi bi-truck mr-6 text-4xl"></i>
                                                                                        <div>
                                                                                            <h1 class="text-lg font-bold">Status Pengiriman</h1>
                                                                                            @if ($see->delivery_status == 'shipped')
                                                                                                <p class="text-gray-600">Pesanan Dikirim</p>
                                                                                            @endif
                                                                                            @if ($see->delivery_status == 'delivered')
                                                                                                <p class="text-gray-600">Pesanan Terkirim</p>
                                                                                            @endif
                                                                                            @if ($see->transaction_status == 'cancelled')
                                                                                                <p class="text-gray-600">Pesanan Dibatalkan</p>
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex justify-between">
                                                                                    <div class="flex items-start">
                                                                                        <i class="fi-br-user-helmet-safety mr-4 text-4xl"></i>
                                                                                        <div>
                                                                                            <h1 class="text-lg font-bold">Dikirim Oleh</h1>
                                                                                            @if ($see->transaction_status == 'cancelled')
                                                                                                <p class="text-gray-600">Pesanan Dibatalkan</p>
                                                                                            @endif
                                                                                            @if (empty($see->driver_id) || is_null($see->driver_id))
                                                                                                <p class="text-gray-600"></p>
                                                                                            @endif
                                                                                            @if (!empty($see->driver_id))
                                                                                                <p class="text-gray-600">{{ $see->driver->name }}</p>
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex justify-between">
                                                                                    <div class="flex items-start">
                                                                                        <i class="fi-br-land-layer-location mr-4 mt-2 text-4xl"></i>
                                                                                        <div>
                                                                                            <h1 class="text-lg font-bold">Alamat</h1>
                                                                                            <p class="text-gray-600 max-w-[30rem]">{{ $see->user->address }}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            @foreach ($see->transactiondetails as $detail)
                                                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                                        {{ $loop->iteration }}
                                                                                    </th>
                                                                                    <td class="px-6 py-4 text-center">
                                                                                        {{ $detail->shoes->name }}
                                                                                    </td>
                                                                                    <td class="px-6 py-4 text-center">
                                                                                        {{ $detail->quantity }}
                                                                                    </td>
                                                                                    <td class="px-6 py-4 text-center">
                                                                                        Rp {{ number_format($detail->shoes->price, 0, ',', '.') }}
                                                                                    </td>
                                                                                    <td class="px-6 py-4 text-center">
                                                                                        Rp {{ number_format($detail->subtotal, 0, ',', '.') }}
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <!-- Modal footer -->
                                                            <div class="flex items-center justify-center p-4 md:p-5 border-t rounded-b dark:border-gray-600">
                                                                <button data-modal-hide="{{ $modalDetailId }}" type="button" class="w-full py-2.5 px-5 text-sm font-medium text-white focus:outline-none bg-[#1E293B] rounded-3xl hover:shadow-md hover:shadow-slate-600 duration-300 focus:z-10 focus:ring-4 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">TUTUP</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endpush
                                        </td>
                                        <td class="px-6 py-4 align-middle text-center">
                                            @if ($see->transaction_status == 'accepted')
                                                <span class="inline-flex items-center rounded-full bg-yellow-200 hover:bg-yellow-300 transition-colors duration-300 px-6 py-2 text-sm font-semibold text-[#1E293B]">
                                                    Diproses
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 align-middle text-center">
                                            <label class="relative justify-center flex cursor-pointer items-center rounded-full p-1 hover:p-1" for="checkbox-1" data-ripple-dark="true">
                                                <input type="checkbox" name="checkbox[]" value="{{ $see->id }}" class="before:content[''] peer relative h-8 w-8 cursor-pointer appearance-none rounded-md border border-[#1E293B] transition-all focus:outline-none focus:ring-2 focus:ring-[#1E293B] before:absolute before:top-2/4 before:left-2/4 before:block before:h-14 before:w-14 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-[#1E293B] before:opacity-0 before:transition-opacity checked:border-[#1E293B] checked:bg-[#1E293B] checked:before:bg-[#1E293B] hover:before:opacity-20" id="checkbox-1" />
                                                <div class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-white opacity-0 transition-opacity peer-checked:opacity-100">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                            </label>
                                        </td>
                                    </tr>
                                @endif
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </form>
    @else
        <div class="text-center space-y-6">
            <img src="{{ asset('uploads/ilustration/empty-delivery-amico.png') }}" alt="" class="h-96 w-auto mx-auto">
            <p class="text-2xl font-semibold text-gray-900 dark:text-white">Belum Ada Pesanan yang Harus Diantar Nih</p>
            <p class="text-lg text-gray-500 dark:text-gray-400">Anda bisa Istirahat Sebentar Yak !</p>
        </div>
    @endif
@endsection
