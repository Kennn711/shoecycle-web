{{-- Order Customer --}}
<h1 class="dark:text-white text-center">Semua Sepatu yang Tersedia di ShoeCycle</h1>

<!-- resources/views/shoes/data.blade.php -->

@if ($shoes->isEmpty())
    <p>Tidak ada sepatu yang tersedia.</p>
@else
    <div class="flex flex-wrap justify-center space-x-4 mt-60">
        @foreach ($shoes as $shoe)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-800">
                <img class="rounded-t-lg" width="400" src="{{ $shoe->imagedetail[0]->image }}" alt="{{ $shoe->name }}" />
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $shoe->name }}</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $shoe->description }}</p>
                    <!-- Modal toggle -->
                    <button data-modal-target="crud-modal-{{ $shoe->id }}" data-modal-toggle="crud-modal-{{ $shoe->id }}" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                        LIHAT DETAIL SEPATU
                    </button>


                    <!-- Main modal -->
                    <div id="crud-modal-{{ $shoe->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Detail Sepatu {{ $shoe->name }}
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form class="p-4 md:p-5" action="{{ route('add.cart', $shoe->id) }}" method="POST">
                                    @csrf
                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                        <div class="col-span-2 sm:col-span-1">
                                            <h1 class="block mb-2 text-lg font-bold text-gray-900 dark:text-white">Nama Sepatu</h1>
                                            <h3 class="dark:text-white">{{ $shoe->name }}</h3>
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <h1 class="block mb-2 text-lg font-bold text-gray-900 dark:text-white">Ukuran Sepatu</h1>
                                            <h3 class="dark:text-white">{{ $shoe->size }}</h3>
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <h1 class="block mb-2 text-lg font-bold text-gray-900 dark:text-white">Harga</h1>
                                            <h3 class="dark:text-white">Rp {{ $shoe->price }}</h3>
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <h1 class="block mb-2 text-lg font-bold text-gray-900 dark:text-white">Stok Tersedia</h1>
                                            <h3 class="dark:text-white">{{ $shoe->stock }}</h3>
                                        </div>
                                        <div class="col-span-2">
                                            <h1 class="block mb-2 text-lg font-bold text-gray-900 dark:text-white">Deskripsi :</h1>
                                            <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>{{ $shoe->description }}</textarea>
                                        </div>
                                    </div>

                                    <!-- Quantity Input (jumlah stok yang akan dibeli) -->
                                    <div class="flex justify-between items-center mt-4 space-x-4">
                                        @if ($shoe->stock > 0)
                                            <div class="max-w-xs">
                                                <div class="relative flex items-center">
                                                    <button type="button" id="decrement-button" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                        <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                                        </svg>
                                                    </button>
                                                    <input type="number" id="quantity-input" name="qty" min="1" max="{{ $shoe->stock }}" value="1" class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-20 py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                                    <button type="button" id="increment-button" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                        <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        @else
                                        @endif

                                        <!-- Button Masukkan Keranjang -->
                                        @if ($shoe->stock > 0)
                                            <button type="submit" class="text-white inline-flex items-center bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                MASUKKAN KERANJANG
                                            </button>
                                        @else
                                            <button disabled class="text-white inline-flex w-full text-center items-center bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                STOK HABIS
                                            </button>
                                        @endif
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif

<div id="crud-modal-{{ $see->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Detail Sepatu {{ $see->name }}
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <img class="object-cover w-full h-64" src="{{ $see->imagedetail[0]->image }}" alt="{{ $see->name }}">
            <form class="p-4 md:p-5" action="{{ route('add.cart', $see->id) }}" method="POST">
                @csrf
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2 sm:col-span-1">
                        <h1 class="block mb-2 text-lg font-bold text-gray-900 dark:text-white">Nama Sepatu</h1>
                        <h3 class="dark:text-white">{{ $see->name }}</h3>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <h1 class="block mb-2 text-lg font-bold text-gray-900 dark:text-white">Ukuran Sepatu</h1>
                        <h3 class="dark:text-white">{{ $see->size }}</h3>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <h1 class="block mb-2 text-lg font-bold text-gray-900 dark:text-white">Harga</h1>
                        <h3 class="dark:text-white">Rp {{ $see->price }}</h3>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <h1 class="block mb-2 text-lg font-bold text-gray-900 dark:text-white">Stok Tersedia</h1>
                        <h3 class="dark:text-white">{{ $see->stock }}</h3>
                    </div>
                    <div class="col-span-2">
                        <h1 class="block mb-2 text-lg font-bold text-gray-900 dark:text-white">Deskripsi :</h1>
                        <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>{{ $see->description }}</textarea>
                    </div>
                </div>

                <!-- Quantity Input (jumlah stok yang akan dibeli) -->
                <div class="flex justify-between items-center mt-4 space-x-4">
                    @if ($see->stock > 0)
                        <div class="max-w-xs">
                            <div class="relative flex items-center">
                                <button type="button" id="decrement-button" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                    <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                    </svg>
                                </button>
                                <input type="number" id="quantity-input" name="qty" min="1" max="{{ $see->stock }}" value="1" class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-20 py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                <button type="button" id="increment-button" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                    <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @else
                    @endif

                    <!-- Button Masukkan Keranjang -->
                    @if ($see->stock > 0)
                        <button type="submit" class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            MASUKKAN KERANJANG
                        </button>
                    @else
                        <button disabled class="text-white inline-flex w-full text-center items-center bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            STOK HABIS
                        </button>
                    @endif
                </div>
            </form>

        </div>
    </div>
</div>

<a href="{{ route('view.cart') }}"><button>Keranjang</button></a>
{{-- Order Customer END --}}


{{-- Cart --}}
@extends('layouts.main')

@section('title', 'Keranjang Belanja')
@section('page_title', 'Keranjang Belanja')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (empty($cart) || count($cart) == 0)
        <p class="text-center">Keranjang kosong. <a href="{{ route('order.view') }}" class="text-blue-500">Belanja sekarang!</a></p>
    @else
        <div class="w-full px-6 py-6 mx-auto">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white dark:bg-gray-800 border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="flex items-center justify-between p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent dark:bg-gray-700">
                            <h6 class="dark:text-white">Keranjang Belanja</h6>
                        </div>
                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">
                                <table class="items-center w-full mb-0 align-top border-collapse text-slate-500 dark:text-gray-400">
                                    <thead class="bg-gray-50 dark:bg-gray-700 text-xs font-semibold text-gray-700 dark:text-gray-400 uppercase tracking-wide">
                                        <tr>
                                            <th class="px-6 py-3 text-center">No</th>
                                            <th class="px-6 py-3 text-center">Nama Sepatu</th>
                                            <th class="px-6 py-3 text-center">Gambar</th>
                                            <th class="px-6 py-3 text-center">Harga</th>
                                            <th class="px-6 py-3 text-center">Jumlah</th>
                                            <th class="px-6 py-3 text-center">Sub Total</th>
                                            <th class="px-6 py-3 text-center">Aksi</th>
                                            <th class="px-6 py-3 text-center"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cart as $id => $item)
                                            <tr class="bg-white dark:bg-gray-800 border-b dark:border-gray-700">
                                                <td class="p-2 text-center">{{ $loop->iteration }}</td>
                                                <td class="p-2 text-center">{{ $item['name'] }}</td>
                                                <td class="p-2 text-center">
                                                    <img src="{{ $item['image'] }}" width="100" alt="{{ $item['name'] }}">
                                                </td>
                                                <td class="p-2 text-center">Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                                                <td class="p-2 text-center">{{ $item['quantity'] }}</td>
                                                <td class="p-2 text-center">Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
                                                <td class="p-2 text-center">
                                                    <form action="{{ route('remove.cart', $id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus sepatu ini dari keranjang?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-white bg-red-500 hover:bg-red-600 font-medium rounded-lg text-sm px-4 py-2">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot class="bg-gray-50 dark:bg-gray-700">
                                        <tr>
                                            <td colspan="2" class="p-2 text-left">
                                                <form action="{{ route('clear.cart') }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin mengosongkan keranjang?');">
                                                    @csrf
                                                    <button class="text-white bg-red-500 hover:bg-red-600 font-medium rounded-lg text-sm px-4 py-2">Kosongkan Keranjang</button>
                                                </form>
                                            </td>
                                            <td colspan="4" class="text-right font-bold p-2">Total Keseluruhan</td>
                                            <td class="text-center font-bold p-2">Rp {{ number_format(array_sum(array_map(function ($item) {return $item['price'] * $item['quantity'];}, $cart)),0,',','.') }}</td>
                                            <td class="p-2 text-center">
                                                <form action="{{ route('checkout') }}" method="GET">
                                                    @csrf

                                                    @foreach ($cart as $id => $item)
                                                        <input type="hidden" name="shoes_id[]" value="{{ $id }}">
                                                    @endforeach

                                                    <button type="submit" class="text-white bg-blue-500 hover:bg-blue-600 font-medium rounded-lg text-sm px-4 py-2">Checkout</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

{{-- Cart END --}}
