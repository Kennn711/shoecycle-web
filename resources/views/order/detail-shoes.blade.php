@extends('layouts-customer.index')

@section('title-frontend', 'ShoeCycle | Detail Sepatu')

@section('content-frontend')
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 px-4 mb-8 relative">
                <img src="{{ asset($shoes->imagedetail[0]->image) }}" alt="Product" id="mainImage" class="w-[700px] h-[500px] rounded-lg shadow-md mb-4 opacity-100 transition-opacity duration-500 ease-in-out">

                <div class="flex gap-4 py-4 justify-center overflow-x-auto">
                    @foreach ($shoes->imagedetail as $index => $see)
                        <img src="{{ asset($see->image) }}" alt="Thumbnail 1" class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300" onclick="changeImage('{{ asset($see->image) }}', {{ $index }})">
                    @endforeach
                </div>
            </div>

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

                    <div class="mb-6">
                        <div class="max-w-xs mb-6">
                            <div class="relative flex items-center">
                                {{-- button kurang - --}}
                                <button type="button" id="decrement-button" class="bg-green-700 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-green-500 border border-green-700 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                    <svg class="w-3 h-3 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                    </svg>
                                </button>
                                <input type="number" id="quantity-input" name="qty" min="1" max="{{ $shoes->stock }}" value="1" class="bg-gray-200 border border-green-700 h-11 text-center font-semibold text-gray-900 text-sm focus:border-green-700 focus:outline-none focus:ring-0 block w-20 py-2.5" required />
                                {{-- button tambah +  --}}
                                <button type="button" id="increment-button" class="bg-green-700 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-green-500 border border-green-700 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                    <svg class="w-3 h-3 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="flex space-x-4 mb-6">
                            <button class="overflow-hidden relative w-[350px] mt-5 p-2 h-12 bg-white text-black border-2 border-green-700 rounded-3xl text-base font-semibold cursor-pointer z-10 group hover:border-green-600">Masukkan ke Keranjang
                                <span class="absolute w-[380px] h-32 -top-8 -left-2 bg-green-200 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                                <span class="absolute w-[380px] h-32 -top-8 -left-2 bg-green-400 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-left">
                                </span>
                                <span class="absolute w-[380px] h-32 -top-8 -left-2 bg-green-600 transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-1000 duration-500 origin-left">
                                </span>
                                <span class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2.5 left-40 z-10">
                                    <i class="fi-br-shopping-cart-add text-xl text-white"></i>
                                </span>
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
            //  script tambah kurang jumlah barang 
            const decrementButton = document.getElementById('decrement-button');
            const incrementButton = document.getElementById('increment-button');
            const quantityInput = document.getElementById('quantity-input');

            const minQty = parseInt(quantityInput.min);
            const maxQty = parseInt(quantityInput.max);

            decrementButton.addEventListener('click', () => {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue > minQty) {
                    quantityInput.value = currentValue - 1;
                }
            });

            incrementButton.addEventListener('click', () => {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue < maxQty) {
                    quantityInput.value = currentValue + 1;
                }
            });
            // end 

            // animasi ganti gambar produk 
            let currentIndex = 0;
            const images = @json($shoes->imagedetail);
            const mainImage = document.getElementById("mainImage");

            function changeImage(src, index) {

                if (index !== undefined) {
                    currentIndex = index;
                } else {
                    currentIndex = images.findIndex(image => image.image === src);
                }

                mainImage.classList.remove("opacity-100");
                mainImage.classList.add("opacity-0");

                setTimeout(() => {
                    mainImage.src = src;
                    mainImage.classList.remove("opacity-0");
                    mainImage.classList.add("opacity-100");
                }, 200);
            }
            //    end 
        </script>

        {{-- hilangkan tombol atas bawah pada input jumlah barang yang akan di pesan  --}}
        <style>
            input[type="number"]::-webkit-outer-spin-button,
            input[type="number"]::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
        </style>
    </div>
@endsection
