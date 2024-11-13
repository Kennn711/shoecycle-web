@extends('layouts-customer.index')

@section('title-frontend', 'ShoeCycle | Beli Sepatu')
@section('page_title', 'Pesan Sepatu')

@section('content-frontend')
    @if ($shoes->isEmpty())
        <p>Tidak ada sepatu yang tersedia.</p>
    @else
        <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 xl:gap-8 px-4 max-w-full mx-3 lg:mx-10 xl:mx-28 mt-10 mb-10 sm:mt-14 sm:mb-14 md:mt-20 md:mb-20">
            @foreach ($shoes as $see)
                <div class="relative flex w-full max-w-[26rem] flex-col rounded-xl bg-gray-100 bg-clip-border text-gray-700 shadow-lg">
                    <div class="relative mx-4 mt-4 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
                        <img src="{{ $see->imagedetail[0]->image }}" alt="{{ $see->name }}" alt="ui/ux review check">
                        <div class="to-bg-black-10 absolute inset-0 h-full w-full bg-gradient-to-tr from-transparent via-transparent to-black/60"></div>
                    </div>
                    <div class="p-5 flex-grow">
                        <div class="mb-3 flex items-center justify-between">
                            <h5 class="block font-sans text-[10px] sm:text-lg xl:text-base 2xl:text-lg font-medium leading-snug max-w-12 sm:max-w-20 md:max-w-48 tracking-normal text-blue-gray-900 antialiased">{{ $see->name }}</h5>
                            <p class="flex items-center gap-1.5 font-sans text-base font-normal leading-relaxed text-blue-gray-900 antialiased">
                                <span class="text-gray-900 font-bold  text-[0.50rem] sm:text-lg xl:text-sm 2xl:text-lg">Rp {{ number_format($see->price, 0, ',', '.') }}</span>
                            </p>
                        </div>
                        <div>
                            <p class="block font-sans text-[7px] sm:text-base font-light leading-relaxed text-gray-700 antialiased truncate">{{ $see->description }}</p>
                        </div>
                    </div>
                    <div class="p-3 pt-2 sm:p-6 sm:pb-3 mb-2">
                        @if ($see->stock > 0)
                            <a href="{{ route('order-detail.view', $see->id) }}">
                                <button class="block w-full select-none rounded-3xl bg-green-700 py-1.5 px-3 sm:py-3.5 sm:px-7 text-center align-middle font-sans text-[0.50rem] sm:text-sm font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button" data-ripple-light="true">Lihat Detail
                                </button>
                            </a>
                        @else
                            <button disabled class="bg-red-600 text-white py-2 px-4 rounded-full font-bold transition-colors duration-200 hover:bg-red-700">STOK HABIS</button>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
