@extends('layouts-customer.index')

@section('title-frontend', 'ShoeCycle | Beli Sepatu')
@section('page_title', 'Pesan Sepatu')

@section('content-frontend')
    @if ($shoes->isEmpty())
        <p>Tidak ada sepatu yang tersedia.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 px-4 max-w-full mx-40 mt-20">
            @foreach ($shoes as $see)
                <div class="bg-white rounded-lg shadow-lg p-4">
                    <div class="relative overflow-hidden">
                        <img class="object-cover w-full h-64" src="{{ $see->imagedetail[0]->image }}" alt="{{ $see->name }}">
                        <div class="absolute inset-0 bg-black opacity-30"></div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mt-4">{{ $see->name }}</h3>
                    <p class="text-gray-500 text-sm mt-2">{{ $see->description }}</p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-gray-900 font-bold text-lg">Rp {{ number_format($see->price, 0, ',', '.') }}</span>
                        @if ($see->stock > 0)
                            <a href="{{ route('order-detail.view', $see->id) }}">
                                <button type="button" class="bg-green-700 text-white py-2 px-4 rounded-full font-bold transition-colors duration-200 hover:bg-green-800">LIHAT DETAIL SEPATU</button>
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
