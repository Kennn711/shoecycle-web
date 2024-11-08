@extends('layouts-backend/index')

@section('backend-title', 'Admin | Tabel Sepatu')
@section('breadcumb-role', 'Admin')
@section('breadcumb-title', 'Data Sepatu')

@section('backend-content')
    <div class="flex justify-between">
        <div>
            <h1 class="text-2xl font-semibold ml-24 mt-3">Tabel Sepatu</h1>
        </div>
        <div>
            <a href="{{ route('shoes.create') }}">
                <button class="rounded-md px-3.5 py-2 m-1 mr-24 overflow-hidden relative group cursor-pointer border-2 font-medium border-[#1E293B] text-[#1E293B] hover:text-white">
                    <span class="absolute w-64 h-0 transition-all duration-500 origin-center rotate-45 -translate-x-20 bg-[#1E293B] top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                    <span class="relative text-[#1E293B] transition duration-500 group-hover:text-white ease">
                        <i class="bi bi-plus-square-fill text-2xl"></i>
                    </span>
                </button>
            </a>
        </div>
    </div>
    <div class="overflow-hidden rounded-3xl border border-gray-200 shadow-md mt-2 mb-5 ml-20 mr-20">
        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
            <thead class="bg-[#1E293B]">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-50">No</th>
                    <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Nama Sepatu</th>
                    <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Ukuran</th>
                    <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Harga</th>
                    <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Stok</th>
                    <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Deskripsi</th>
                    <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Gambar Sepatu</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-50">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                @foreach ($shoes as $see)
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4">
                            {{ $loop->iteration }}
                        </td>
                        <td class="px-6 align-middle text-center py-4">{{ $see->name }}</td>
                        <td class="px-6 align-middle text-center py-4">{{ $see->size }}</td>
                        <td class="px-6 align-middle text-center py-4">Rp {{ number_format($see->price, 0, ',', '.') }}</td>
                        <td class="px-6 align-middle text-center py-4">{{ $see->stock }}</td>
                        <td class="px-6 align-middle text-center py-4">
                            @php $modalDescId = "modalDesc-" . $see->id . "-" ; @endphp

                            <button data-modal-target="{{ $modalDescId }}" data-modal-toggle="{{ $modalDescId }}" class="rounded-md px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-[#1E293B] text-[#1E293B] hover:text-white">
                                <span class="absolute w-64 h-0 transition-all duration-500 origin-center rotate-45 -translate-x-20 bg-[#1E293B] top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                                <span class="relative text-[#1E293B] transition duration-500 group-hover:text-white ease">
                                    <i class="bi bi-card-text text-xl"></i>
                                </span>
                            </button>

                            @push('modal')
                                <div id="{{ $modalDescId }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between bg-[#1E293B] p-4 md:p-5 border-b rounded-t-3xl dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-white dark:text-white">
                                                    Deskripsi {{ $see->name }}
                                                </h3>
                                            </div>
                                            <!-- Modal body -->
                                            <div class=" bg-gray-100 p-4 md:p-5 space-y-4">
                                                <h2>{{ $see->description }}</h2>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                <button data-modal-hide="{{ $modalDescId }}" type="button" class="w-full py-2.5 px-5 ms-3 text-sm font-medium text-white focus:outline-none bg-[#1E293B] rounded-lg border border-gray-200 hover:rounded-3xl duration-300 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">TUTUP</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endpush

                        </td>
                        <td class="px-6 py-4 align-middle text-center">
                            @php $modalId = "modal-" . $see->id . "-" ; @endphp

                            <button data-modal-target="{{ $modalId }}" data-modal-toggle="{{ $modalId }}" class="rounded-md px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-[#1E293B] text-[#1E293B] hover:text-white">
                                <span class="absolute w-64 h-0 transition-all duration-500 origin-center rotate-45 -translate-x-20 bg-[#1E293B] top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                                <span class="relative text-[#1E293B] transition duration-500 group-hover:text-white ease">
                                    <i class="bi bi-images text-xl"></i>
                                </span>
                            </button>

                            @push('modal')
                                <div id="{{ $modalId }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between bg-[#1E293B] p-4 md:p-5 border-b rounded-t-3xl dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-white dark:text-white">
                                                    Gambar {{ $see->name }}
                                                </h3>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="owl-carousel owl-theme bg-gray-100 p-4 md:p-5 space-y-4">
                                                @foreach ($see->imagedetail as $index => $detail)
                                                    <div class="item">
                                                        <img src="{{ asset($detail->image) }}" class="w-[300px] h-[300px] object-cover">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                <button data-modal-hide="{{ $modalId }}" type="button" class="w-full py-2.5 px-5 ms-3 text-sm font-medium text-white focus:outline-none bg-[#1E293B] rounded-lg border border-gray-200 hover:rounded-3xl duration-300 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">TUTUP</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endpush
                        </td>
                        @php
                            $isInDetails = DB::table('transaction_details')
                                ->where('shoes_id', $see->id)
                                ->exists();
                        @endphp

                        @if (!$isInDetails)
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <a href="{{ route('shoes.edit', $see->id) }}">
                                        <button class="px-3.5 py-2 bg-yellow-300 rounded-md hover:rounded-xl hover:bg-yellow-400 transition-all duration-300 text-white">
                                            <i class="bi bi-pencil-square text-xl text-white"></i>
                                        </button>
                                    </a>

                                    <form id="delete-shoes-{{ $see->id }}" action="{{ route('shoes.destroy', $see->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="confirmDeleteShoes({{ $see->id }}, '{{ $see->name }}')" class="px-3.5 py-2 bg-red-600 rounded-md hover:rounded-xl hover:bg-red-700 transition-all duration-300 text-white">
                                            <i class="bi bi-trash-fill text-xl text-white"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        @else
                            <td class="px-6 py-4">
                                <a href="{{ route('shoes.edit', $see->id) }}">
                                    <button class="px-3.5 py-2 bg-yellow-300 rounded-md hover:rounded-xl hover:bg-yellow-400 transition-all duration-300 text-white">
                                        <i class="bi bi-pencil-square text-xl text-white"></i>
                                    </button>
                                </a>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
