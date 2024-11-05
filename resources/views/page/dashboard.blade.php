@extends('layouts-backend/index')

@section('backend-title', 'Admin | Dashboard')
@section('breadcumb-role', 'Admin')
@section('breadcumb-title', 'Dashboard')

@section('backend-content')
    <div class="flex flex-wrap my-5 -mx-2">
        <!-- Card 1 -->
        <div class="w-full md:w-1/4 p-2">
            <div class="flex items-center flex-row w-full bg-gradient-to-r dark:from-cyan-500 dark:to-blue-500 from-indigo-500 via-purple-500 to-pink-500 rounded-md p-3">
                <div class="flex text-indigo-500 dark:text-white items-center bg-white dark:bg-[#0F172A] p-2 rounded-md flex-none w-8 h-8 md:w-12 md:h-12">
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
            <div class="flex items-center flex-row w-full bg-gradient-to-r dark:from-cyan-500 dark:to-blue-500 from-indigo-500 via-purple-500 to-pink-500 rounded-md p-3">
                <div class="flex text-indigo-500 dark:text-white items-center bg-white dark:bg-[#0F172A] p-2 rounded-md flex-none w-8 h-8 md:w-12 md:h-12">
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
            <div class="flex items-center flex-row w-full bg-gradient-to-r dark:from-cyan-500 dark:to-blue-500 from-indigo-500 via-purple-500 to-pink-500 rounded-md p-3">
                <div class="flex text-indigo-500 dark:text-white items-center bg-white dark:bg-[#0F172A] p-2 rounded-md flex-none w-8 h-8 md:w-12 md:h-12">
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
            <div class="flex items-center flex-row w-full bg-gradient-to-r dark:from-cyan-500 dark:to-blue-500 from-indigo-500 via-purple-500 to-pink-500 rounded-md p-3">
                <div class="flex text-indigo-500 dark:text-white items-center bg-white dark:bg-[#0F172A] p-2 rounded-md flex-none w-8 h-8 md:w-12 md:h-12">
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
@endsection
