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
                            <textarea style="resize: none" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>{{ $shoes->description }}</textarea>
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
        <div class="text-center my-14">
            <hr class="border-black-300 border-t-2 w-[600px] ml-[50px] -mb-4" />
            <h1>PRODUK LAINNYA</h1>
            <hr class="border-black-300 border-t-2 w-[600px] ml-auto mr-[50px] -mt-3" />
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 xl:gap-8 px-4 max-w-full mx-3 lg:mx-10 xl:mx-28 mt-10 mb-10 sm:mt-14 sm:mb-14 md:mt-20 md:mb-20">
            @foreach ($otherShoes as $see2)
                <div class="relative flex w-full max-w-[26rem] flex-col rounded-xl bg-gray-100 bg-clip-border text-gray-700 shadow-lg">
                    <div class="relative mx-4 mt-4 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
                        <img src="{{ asset($see2->imagedetail[0]->image) }}" alt="" alt="ui/ux review check">
                        <div class="to-bg-black-10 absolute inset-0 h-full w-full bg-gradient-to-tr from-transparent via-transparent to-black/60"></div>
                    </div>
                    <div class="p-5 flex-grow">
                        <div class="mb-3 flex items-center justify-between">
                            <h5 class="block font-sans text-[10px] sm:text-lg xl:text-base 2xl:text-lg font-medium leading-snug max-w-12 sm:max-w-20 md:max-w-48 tracking-normal text-blue-gray-900 antialiased">{{ $see2->name }}</h5>
                            <p class="flex items-center gap-1.5 font-sans text-base font-normal leading-relaxed text-blue-gray-900 antialiased">
                                <span class="text-gray-900 font-bold  text-[0.50rem] sm:text-lg xl:text-sm 2xl:text-lg">Rp {{ number_format($see2->price, 0, ',', '.') }}</span>
                            </p>
                        </div>
                        <div>
                            <p class="block font-sans text-[7px] sm:text-base font-light leading-relaxed text-gray-700 antialiased truncate">{{ $see2->description }}</p>
                        </div>
                    </div>
                    <div class="p-3 pt-2 sm:p-6 sm:pb-3 mb-2">
                        <a href="{{ route('order-detail.view', $see2->id) }}">
                            <button class="block w-full select-none rounded-3xl bg-green-800 py-1.5 px-3 sm:py-3.5 sm:px-7 text-center align-middle font-sans text-[0.50rem] sm:text-sm font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button" data-ripple-light="true">Lihat Detail
                            </button>
                        </a>
                    </div>
                </div>
            @endforeach
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
