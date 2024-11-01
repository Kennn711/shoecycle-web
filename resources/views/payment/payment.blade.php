<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Pembayaran</title>
</head>

<body class="dark:bg-gray-900">
    <div class="max-w-md mx-auto my-5">
        <div class="bg-white shadow-md rounded-lg p-6 dark:bg-gray-800">
            <div class="flex justify-between items-center mb-1">
                <h2 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Pembayaran</h2>
                <a href="{{ route('view.cart') }}" class="font-semibold uppercase text-white bg-blue-500 px-4 py-2 rounded-lg hover:bg-blue-600">Kembali</a>
            </div>
            <form action="{{ route('checkout.detail') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="relative z-0 w-full mb-5 group">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Silahkan Transfer ke Nomor Rekening ini (Pilih Salah Satu)</label>
                    <textarea id="description" name="description" rows="14" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>{{ $wallets->wallets }}</textarea>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="file_input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kirim Bukti Pembayaran : </label>
                    <input id="file_input" name="proof_of_payment" type="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help">
                </div>
                <button class="w-full font-semibold uppercase text-white bg-blue-500 px-4 py-2 rounded-lg hover:bg-blue-600">KONFIRMASI</button>
            </form>
        </div>
    </div>

    @extends('layouts.partial.script')
</body>

</html>
