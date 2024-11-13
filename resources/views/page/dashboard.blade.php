@extends('layouts-backend/index')

@section('backend-title', 'Admin | Dashboard')
@push('breadcumb-role')
    {{ auth()->user()->role }}
@endpush

@section('breadcumb-title', 'Dashboard')
@push('breadcumb-backend-role')
    <i class="fi-br-admin w-6 h-6 text-xl"></i>
@endpush

@section('backend-content')
    <div class="flex flex-wrap my-5 -mx-2">
        <!-- Card 1 -->
        <div class="w-full md:w-1/4 p-2">
            <div class="flex items-center flex-row w-full bg-gradient-to-r dark:from-cyan-500 dark:to-blue-500 from-indigo-500 via-purple-500 to-pink-500 rounded-3xl p-3">
                <div class="flex text-indigo-500 dark:text-white items-center bg-white dark:bg-[#0F172A] p-2 rounded-3xl flex-none w-8 h-8 md:w-12 md:h-12">
                    <i class="bi bi-people-fill text-3xl object-scale-down transition duration-500"></i>
                </div>
                <div class="flex flex-col justify-around flex-grow ml-5 text-white">
                    <div class="text-sm whitespace-nowrap">
                        Jumlah Akun Customer
                    </div>
                    <div>
                        {{ $customerCount }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="w-full md:w-1/4 p-2">
            <div class="flex items-center flex-row w-full bg-gradient-to-r dark:from-cyan-500 dark:to-blue-500 from-indigo-500 via-purple-500 to-pink-500 rounded-3xl p-3">
                <div class="flex text-indigo-500 dark:text-white items-center bg-white dark:bg-[#0F172A] p-2 rounded-3xl flex-none w-8 h-8 md:w-12 md:h-12">
                    <i class="bi bi-truck text-3xl object-scale-down transition duration-500"></i>
                </div>
                <div class="flex flex-col justify-around flex-grow ml-5 text-white">
                    <div class="text-sm whitespace-nowrap">
                        Jumlah Akun Driver
                    </div>
                    <div>
                        {{ $driverCount }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="w-full md:w-1/4 p-2">
            <div class="flex items-center flex-row w-full bg-gradient-to-r dark:from-cyan-500 dark:to-blue-500 from-indigo-500 via-purple-500 to-pink-500 rounded-3xl p-3">
                <div class="flex text-indigo-500 dark:text-white items-center bg-white dark:bg-[#0F172A] p-2 rounded-3xl flex-none w-8 h-8 md:w-12 md:h-12">
                    <i class=" fi-br-hiking-boot text-3xl object-scale-down transition duration-500"></i>
                </div>
                <div class="flex flex-col justify-around flex-grow ml-5 text-white">
                    <div class="text-sm whitespace-nowrap">
                        Jumlah Sepatu yang Tersedia
                    </div>
                    <div>
                        {{ $shoesCount }}
                    </div>
                </div>

            </div>
        </div>
        <!-- Card 4 -->
        <div class="w-full md:w-1/4 p-2">
            <div class="flex items-center flex-row w-full bg-gradient-to-r dark:from-cyan-500 dark:to-blue-500 from-indigo-500 via-purple-500 to-pink-500 rounded-3xl p-3">
                <div class="flex text-indigo-500 dark:text-white items-center bg-white dark:bg-[#0F172A] p-2 rounded-3xl flex-none w-8 h-8 md:w-12 md:h-12">
                    <i class="bi bi-receipt-cutoff text-3xl object-scale-down transition duration-500"></i>
                </div>
                <div class="flex flex-col justify-around flex-grow ml-5 text-white">
                    <div class="text-sm whitespace-nowrap">
                        Jumlah Transaksi yang Dilakukan
                    </div>
                    <div>
                        {{ $transactionCount }}
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container mx-auto p-4 grid grid-cols-1 md:grid-cols-2 gap-10">
        <!-- Table 1: Data Transaksi yang Terbaru -->
        <div class="bg-white shadow-md rounded-3xl p-6">
            <div class="flex justify-between">
                <h2 class="text-xl font-semibold mb-4">Data Transaksi yang Terbaru</h2>
                <a href="{{ route('transaction.index') }}" class="font-semibold hover:underline">Lihat Semua</a>
            </div>
            <hr class="mb-1">
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Nama Customer</th>
                            <th class="py-2 px-4 border-b">Kode Resi</th>
                            <th class="py-2 px-4 border-b">Total</th>
                            <th class="py-2 px-4 border-b">Tanggal Pembayaran</th>
                            <th class="py-2 px-4 border-b">Status Transaksi</th>
                            <th class="py-2 px-4 border-b">Status Pengiriman</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $see)
                            <tr>
                                <td class="py-2 px-4 border-b text-center">{{ $see->user->name }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $see->code }}</td>
                                <td class="py-2 px-4 border-b text-center">Rp {{ number_format($see->total, 0, ',', '.') }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $see->payment_date }}</td>
                                <td class="py-2 px-4 border-b text-center">
                                    @if ($see->transaction_status == 'pending')
                                        <span class="inline-flex items-center rounded-full bg-gray-300 hover:bg-gray-400 transition-colors duration-300 px-6 py-2 text-sm font-semibold text-[#1E293B]">
                                            Pending
                                        </span>
                                    @endif

                                    @if ($see->transaction_status == 'accepted')
                                        <span class="inline-flex items-center rounded-full bg-yellow-200 hover:bg-yellow-300 transition-colors duration-300 px-6 py-2 text-sm font-semibold text-[#1E293B]">
                                            Diproses
                                        </span>
                                    @endif

                                    @if ($see->transaction_status == 'cancelled')
                                        <span class="inline-flex items-center rounded-full bg-red-400 hover:bg-red-500 transition-colors duration-300 px-6 py-2 text-sm font-semibold text-[#1E293B]">
                                            Ditolak
                                        </span>
                                    @endif

                                    @if ($see->transaction_status == 'completed')
                                        <span class="inline-flex items-center rounded-full bg-green-300 hover:bg-green-400 transition-colors duration-300 px-6 py-2 text-sm font-semibold text-[#1E293B]">
                                            Selesai
                                        </span>
                                    @endif
                                </td>
                                <td class="py-2 px-4 border-b text-center">
                                    @if ($see->transaction_status == 'cancelled' && is_null($see->delivery_status))
                                    @endif

                                    @if ($see->transaction_status == 'pending' && is_null($see->delivery_status))
                                    @endif

                                    @if ($see->transaction_status == 'accepted' && $see->delivery_status == 'pending')
                                        <span class="inline-flex items-center rounded-full bg-gray-300 hover:bg-gray-400 transition-colors duration-300 px-6 py-2 text-sm font-semibold text-[#1E293B]">
                                            Pending
                                        </span>
                                    @endif

                                    @if ($see->delivery_status == 'shipped')
                                        <span class="inline-flex items-center rounded-full bg-yellow-200 hover:bg-yellow-300 transition-colors duration-300 px-6 py-2 text-sm font-semibold text-[#1E293B]">
                                            Dikirim
                                        </span>
                                    @endif

                                    @if ($see->transaction_status == 'completed')
                                        <span class="inline-flex items-center rounded-full bg-green-300 hover:bg-green-400 transition-colors duration-300 px-6 py-2 text-sm font-semibold text-[#1E293B]">
                                            Terkirim
                                        </span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Table 2: Table Kanan -->
        <div class="bg-white shadow-md rounded-3xl p-6">
            <h2 class="text-xl font-semibold mb-4">Table Kanan</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Kolom A</th>
                            <th class="py-2 px-4 border-b">Kolom B</th>
                            <th class="py-2 px-4 border-b">Kolom C</th>
                            <th class="py-2 px-4 border-b">Kolom D</th>
                            <th class="py-2 px-4 border-b">Kolom E</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border-b text-center">Data A</td>
                            <td class="py-2 px-4 border-b text-center">Data B</td>
                            <td class="py-2 px-4 border-b text-center">Data C</td>
                            <td class="py-2 px-4 border-b text-center">Data D</td>
                            <td class="py-2 px-4 border-b text-center">Data E</td>
                        </tr>
                        <!-- Tambahkan data lain sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
