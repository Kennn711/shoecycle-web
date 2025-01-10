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
                                                <form id="delete-cart-{{ $id }}" action="{{ route('remove.cart', $id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="confirmDeleteCart({{ $id }}, '{{ $item['name'] }}')" type="button" class="inline-flex items-center text-base font-medium text-red-600 hover:underline dark:text-red-500">
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

                            <div class="space-y-4">
                                <dl class="flex items-center mb-4 justify-between gap-4">
                                    <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                                    <dd class="text-base font-bold text-gray-900 dark:text-white">Rp {{ number_format(array_sum(array_map(function ($item) {return $item['price'] * $item['quantity'];}, $cart)),0,',','.') }}</dd>
                                </dl>
                                <a href="{{ route('checkout') }}">
                                    <button class="mt-7 px-8 z-30 py-4 bg-green-700 rounded-md text-white relative font-semibold after:-z-20 after:absolute after:h-1 after:w-1 after:bg-green-800 after:left-5 overflow-hidden after:bottom-0 after:translate-y-full after:rounded-md after:hover:scale-[300] after:hover:transition-all after:hover:duration-700 after:transition-all after:duration-700 transition-all duration-700 [text-shadow:3px_5px_2px_#0c340c;] hover:[text-shadow:2px_2px_2px_#0c340c] text-xl">
                                        Lanjutkan Pembayaran
                                    </button>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
