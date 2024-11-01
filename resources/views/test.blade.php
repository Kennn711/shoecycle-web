@extends('layouts-customer.index')

@section('title-frontend', 'ShoeCycle | Keranjang')
@section('content-frontend')
    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl"><i class="bi bi-cart3"></i> Checkout</h2>

            <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                    <div class="space-y-6">

                        <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 md:p-6">
                            <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                                <a href="#" class="shrink-0 md:order-1">
                                    <img class="h-20 w-20 dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg" alt="imac image" />
                                </a>
                                <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                    <p class="text-base font-medium text-gray-900 dark:text-white">Lorem, ipsum dolor.</p>
                                    <div class="flex items-center gap-4">
                                        <form>
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
                                                        <td class="px-2 py-1 text-base font-bold text-gray-400 dark:text-white text-center"><span id="quantity">70</span></td>
                                                        <td class="px-2 py-1 text-base font-bold text-gray-400 dark:text-white text-center">Rp 40.000,00</td>
                                                        <td class="px-2 py-1 text-base font-bold text-gray-400 dark:text-white text-center">Rp 90.000,00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                    <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                        <p class="text-xl font-semibold text-gray-900 dark:text-white">Ringkasan Pesanan</p>

                        <!-- Wrapper untuk produk dengan scroll jika lebih dari 3 item -->
                        <div class="space-y-4 max-h-72 overflow-y-auto border-b border-gray-300 pt-2 pr-2 dark:border-gray-700">
                            <!-- Produk pertama -->
                            <div class="flex items-start gap-4">
                                <div class="w-32 h-28 max-lg:w-24 max-lg:h-24 flex p-3 shrink-0 bg-gray-300 rounded-md">
                                    <img src="https://readymadeui.com/images/product10.webp" class="w-full object-contain" />
                                </div>
                                <div class="w-full">
                                    <h3 class="text-base text-gray-900 dark:text-white">Split Sneakers</h3>
                                    <ul class="text-xs text-gray-500 dark:text-gray-300 space-y-2 mt-2">
                                        <li class="flex flex-wrap gap-4">Ukuran <span class="ml-auto">37</span></li>
                                        <li class="flex flex-wrap gap-4">Jumlah <span class="ml-auto">2</span></li>
                                        <li class="flex flex-wrap gap-4">Subtotal <span class="ml-auto">Rp 70.000,00</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-32 h-28 max-lg:w-24 max-lg:h-24 flex p-3 shrink-0 bg-gray-300 rounded-md">
                                    <img src="https://readymadeui.com/images/product10.webp" class="w-full object-contain" />
                                </div>
                                <div class="w-full">
                                    <h3 class="text-base text-gray-900 dark:text-white">Split Sneakers</h3>
                                    <ul class="text-xs text-gray-500 dark:text-gray-300 space-y-2 mt-2">
                                        <li class="flex flex-wrap gap-4">Ukuran <span class="ml-auto">37</span></li>
                                        <li class="flex flex-wrap gap-4">Jumlah <span class="ml-auto">2</span></li>
                                        <li class="flex flex-wrap gap-4">Subtotal <span class="ml-auto">Rp 70.000,00</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-32 h-28 max-lg:w-24 max-lg:h-24 flex p-3 shrink-0 bg-gray-300 rounded-md">
                                    <img src="https://readymadeui.com/images/product10.webp" class="w-full object-contain" />
                                </div>
                                <div class="w-full">
                                    <h3 class="text-base text-gray-900 dark:text-white">Split Sneakers</h3>
                                    <ul class="text-xs text-gray-500 dark:text-gray-300 space-y-2 mt-2">
                                        <li class="flex flex-wrap gap-4">Ukuran <span class="ml-auto">37</span></li>
                                        <li class="flex flex-wrap gap-4">Jumlah <span class="ml-auto">2</span></li>
                                        <li class="flex flex-wrap gap-4">Subtotal <span class="ml-auto">Rp 70.000,00</span></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Produk tambahan lainnya yang akan ditampilkan dalam scrollbar -->
                            <!-- Tambahkan produk lainnya di sini jika ada lebih dari 3 -->
                        </div>

                        <!-- Batas total harga -->
                        <div class="border-b border-gray-300 pt-2 dark:border-gray-700">
                            <dl class="flex items-center mb-4 justify-between gap-4">
                                <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                                <dd class="text-base font-bold text-gray-900 dark:text-white">Rp 210.000,00</dd>
                            </dl>
                        </div>

                        <!-- Form Checkout -->
                        <form>
                            @csrf
                            <button type="submit" class="flex w-full items-center justify-center rounded-lg bg-green-600 hover:bg-green-700 transition-colors duration-200 px-5 py-2.5 text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Checkout</button>
                        </form>

                        <!-- Form Kosongkan Keranjang -->
                        <form>
                            @csrf
                            <button class="flex w-full items-center justify-center rounded-lg bg-red-600 hover:bg-red-700 transition-colors duration-200 px-5 py-2.5 text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Kosongkan Keranjang</button>
                        </form>

                        <!-- Lanjut Belanja -->
                        <div class="flex items-center justify-center gap-2">
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400"> Atau </span>
                            <a href="#" class="inline-flex items-center gap-2 text-sm font-medium text-primary-700 hover:underline dark:text-primary-500">
                                Lanjut Belanja
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
