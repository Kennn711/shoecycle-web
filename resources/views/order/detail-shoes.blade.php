@extends('layouts-customer.index')

@section('title-frontend', 'ShoeCycle | Detail Sepatu')

@section('content-frontend')
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap -mx-4">
            <!-- Product Images -->
            <div class="w-full md:w-1/2 px-4 mb-8">
                @foreach ($shoes->imagedetail as $see)
                    <img src="{{ asset($see->image) }}" alt="Product" class="w-full h-auto rounded-lg shadow-md mb-4" id="mainImage">
                    <div class="flex gap-4 py-4 justify-center overflow-x-auto">
                        <img src="{{ asset($see->image) }}" alt="Thumbnail 1" class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300" onclick="changeImage(this.src)">
                    </div>
                @endforeach
            </div>

            <!-- Product Details -->
            <div class="w-full md:w-1/2 px-4">
                <form action="{{ route('add.cart', $shoes->id) }}" method="POST" class="bg-white shadow-xl rounded-lg p-6">
                    @csrf
                    <h2 class="text-3xl font-bold mb-4">{{ $shoes->name }}</h2>
                    <div class="mb-4">
                        <span class="text-2xl font-bold mr-2">Rp {{ number_format($shoes->price, 0, ',', '.') }}</span>
                    </div>
                    <div class="grid gap-2 mb-4 grid-cols-2">
                        <div class="col-span-2 sm:col-span-1">
                            <h1 class="block mb-2 text-lg font-bold text-gray-900 dark:text-white">Ukuran Sepatu</h1>
                            <h3 class="dark:text-white">{{ $shoes->size }}</h3>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <h1 class="block mb-2 text-lg font-bold text-gray-900 dark:text-white">Stok Tersedia</h1>
                            <h3 class="dark:text-white">{{ $shoes->stock }}</h3>
                        </div>
                        <div class="col-span-2">
                            <h1 class="block mb-2 text-lg font-bold text-gray-900 dark:text-white">Deskripsi :</h1>
                            <textarea style="resize: none" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>Lorem, ipsum.</textarea>
                        </div>
                    </div>

                    <!-- Add to Cart and Quantity Selector -->
                    <div class="mb-6">
                        <div class="max-w-xs mb-6">
                            <div class="relative flex items-center">
                                <button type="button" id="decrement-button" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                    <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                    </svg>
                                </button>
                                <input type="number" id="quantity-input" name="qty" min="1" max="{{ $shoes->stock }}" value="1" class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-20 py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                <button type="button" id="increment-button" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                    <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="flex space-x-4 mb-6">
                            <button type="submit" class="bg-green-700 flex gap-2 items-center text-white px-6 py-2 rounded-md hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                <i class="fi-br-shopping-cart-add text-xl"></i>
                                Tambahkan ke Keranjang
                            </button>
                        </div>
                    </div>
                </form>
            </div>


        </div>

        <script>
            function changeImage(src) {
                document.getElementById('mainImage').src = src;
            }
        </script>
    </div>
@endsection
