@extends('layouts-customer.index')

@section('title-frontend', 'ShoeCycle | Keranjang')
@section('content-frontend')
    @if (empty($cart) || count($cart) == 0)
        <section class="bg-white py-16 antialiased dark:bg-gray-900 md:py-32 flex justify-center items-center">
            <div class="text-center space-y-6">
                <img src="{{ asset('uploads/ilustration/Add to Cart-amico.png') }}" alt="" class="h-64 w-auto mx-auto">
                <p class="text-2xl font-semibold text-gray-900 dark:text-white">Wah, keranjang mu masih kosong!</p>
                <p class="text-lg text-gray-500 dark:text-gray-400">Yuk isi dengan sepatu-sepatu impianmu.</p>
                <a href="{{ route('order.view') }}" class="inline-flex items-center justify-center rounded-lg bg-green-600 hover:bg-green-700 transition-colors duration-200 px-5 py-2.5 text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Mulai Belanja
                </a>
            </div>
        </section>
    @else
        <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
            <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl"><i class="bi bi-cart3"></i> Keranjang Belanja</h2>

                <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                    <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                        <div class="space-y-6">
                            @foreach ($cart as $id => $item)
                                <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 md:p-6">
                                    <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                                        <a href="#" class="shrink-0 md:order-1">
                                            <img class="h-20 w-20 dark:hidden" src="{{ $item['image'] }}" alt="{{ $item['name'] }}" />
                                        </a>
                                        <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                            <p class="text-base font-medium text-gray-900 dark:text-white">{{ $item['name'] }}</p>
                                            <div class="flex items-center gap-4">
                                                <form action="{{ route('remove.cart', $id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="inline-flex items-center text-base font-medium text-red-600 hover:underline dark:text-red-500">
                                                        <i class="bi bi-trash-fill"></i> Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between md:order-3 md:justify-end">
                                            <div class="text-end md:order-4 md:w-full">
                                                <div class="overflow-x-auto mt-[-10px]">
                                                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                        <thead>
                                                            <tr>
                                                                <th class="px- py-1 text-sm font-medium text-gray-900 dark:text-gray-400 text-center">Quantity</th>
                                                                <th class="px- py-1 text-sm font-medium text-gray-900 dark:text-gray-400 text-center">Harga</th>
                                                                <th class="px- py-1 text-sm font-medium text-gray-900 dark:text-gray-400 text-center">Subtotal</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="px-2 py-1 text-base font-bold text-gray-400 dark:text-white text-center"><span id="quantity">{{ $item['quantity'] }}</span></td>
                                                                <td class="px-2 py-1 text-base font-bold text-gray-400 dark:text-white text-center">Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                                                                <td class="px-2 py-1 text-base font-bold text-gray-400 dark:text-white text-center">Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                        <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                            <p class="text-xl font-semibold text-gray-900 dark:text-white">Ringkasan Pesanan</p>

                            <!-- Tambahkan bagian untuk menampilkan gambar bank dan nomor rekening -->
                            <!-- Tambahkan bagian untuk menampilkan gambar bank dan nomor rekening secara vertikal -->
                            <div class="space-y-4 border-b border-gray-300 pt-2 dark:border-gray-700">
                                <p class="text-base font-bold text-gray-900 dark:text-white">Pilih Rekening : (Transfer ke Salah Satu nomor dibawah ini )</p>
                                <div class="flex gap-8">
                                    <!-- Bagian Bank -->
                                    <div class="flex flex-col gap-2">
                                        <div class="flex items-center">
                                            <img src="{{ asset('uploads/logo/BRI.jpg') }}" alt="Bank 1" class="h-8 w-auto">
                                            <span class="ml-2 text-sm font-medium">12345678</span>
                                        </div>
                                        <div class="flex items-center">
                                            <img src="{{ asset('uploads/logo/BNI.png') }}" alt="Bank 2" class="h-8 w-auto">
                                            <span class="ml-2 text-sm font-medium">23456789</span>
                                        </div>
                                        <div class="flex items-center">
                                            <img src="{{ asset('uploads/logo/BCA.jpg') }}" alt="Bank 3" class="h-8 w-auto">
                                            <span class="ml-2 text-sm font-medium">34567890</span>
                                        </div>
                                        <div class="flex items-center">
                                            <img src="{{ asset('uploads/logo/MANDIRI.webp') }}" alt="Bank 4" class="h-10 w-auto">
                                            <span class="ml-2 text-sm font-medium">45678901</span>
                                        </div>
                                    </div>

                                    <!-- Garis Pembatas Vertikal -->
                                    <div class="border-l border-gray-300 dark:border-gray-700 h-auto mx-2"></div>

                                    <!-- Bagian E-Wallet -->
                                    <div class="flex flex-col gap-2 mr-5">
                                        <div class="flex items-center">
                                            <img src="{{ asset('uploads/logo/OVO.jpeg') }}" alt="E-Wallet 1" class="h-8 w-auto">
                                            <span class="ml-2 text-sm font-medium">01234567</span>
                                        </div>
                                        <div class="flex items-center">
                                            <img src="{{ asset('uploads/logo/DANA.jpg') }}" alt="E-Wallet 2" class="h-8 w-auto">
                                            <span class="ml-2 text-sm font-medium">12345678</span>
                                        </div>
                                        <div class="flex items-center">
                                            <img src="{{ asset('uploads/logo/GOPAY.jpg') }}" alt="E-Wallet 3" class="h-8 w-auto">
                                            <span class="ml-2 text-sm font-medium">23456789</span>
                                        </div>
                                        <div class="flex items-center">
                                            <img src="{{ asset('uploads/logo/SHOPPEPAY.jpg') }}" alt="E-Wallet 4" class="h-8 w-auto">
                                            <span class="ml-2 text-sm font-medium">34567890</span>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="space-y-4 border-b border-gray-300 pt-2 dark:border-gray-700">
                                <dl class="flex items-center mb-4 justify-between gap-4">
                                    <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                                    <dd class="text-base font-bold text-gray-900 dark:text-white">Rp {{ number_format(array_sum(array_map(function ($item) {return $item['price'] * $item['quantity'];}, $cart)),0,',','.') }}</dd>
                                </dl>
                            </div>
                            <form action="{{ route('checkout.detail') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @foreach ($cart as $id => $item)
                                    <input type="hidden" name="shoes_id[]" value="{{ $id }}">
                                @endforeach
                                <div class="flex items-center justify-center w-full mb-4">
                                    <label for="file-upload" class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg aria-hidden="true" class="w-8 h-8 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V12m0 0V8m0 4H3.5a2.5 2.5 0 00-2.5 2.5V17.5A2.5 2.5 0 003.5 20H5m14-4v4a2.5 2.5 0 002.5 2.5H20m-4-4v-4a2.5 2.5 0 00-2.5-2.5H12"></path>
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                            <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                            <p id="file-name" class="text-sm text-gray-500 mt-2"></p>
                                        </div>
                                        <input id="file-upload" name="proof_of_payment" type="file" class="hidden" onchange="showFileName()">
                                    </label>
                                </div>

                                <button class="flex w-full items-center justify-center rounded-lg bg-green-600 hover:bg-green-700 transition-colors duration-200 px-5 py-2.5 text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Kirim Bukti Pembayaran</button>
                            </form>

                            <form action="{{ route('clear.cart') }}" method="POST">
                                @csrf
                                <button class="flex w-full items-center justify-center rounded-lg bg-red-600 hover:bg-red-700 transition-colors duration-200 px-5 py-2.5 text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Kosongkan Keranjang</button>
                            </form>
                            <div class="flex items-center justify-center gap-2">
                                <span class="text-sm font-normal text-gray-500 dark:text-gray-400"> Atau </span>
                                <a href="#" class="inline-flex items-center gap-2 text-sm font-medium text-primary-700 hover:underline dark:text-primary-500">
                                    Lanjut Belanja <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Show File Name --}}
        <script>
            function showFileName() {
                const input = document.getElementById('file-upload');
                const fileNameDisplay = document.getElementById('file-name');
                fileNameDisplay.textContent = input.files.length > 0 ? input.files[0].name : 'No file chosen';
            }
        </script>
    @endif
@endsection
