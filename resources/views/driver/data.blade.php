@extends('layouts-backend/index')

@section('backend-title', 'Admin | Kelola Driver')
@push('breadcumb-role')
    {{ auth()->user()->role }}
@endpush

@section('breadcumb-title', 'Kelola Driver')

@push('breadcumb-backend-role')
    <i class="fi-br-admin w-6 h-6 text-xl"></i>
@endpush

@section('backend-content')
    <div class="flex justify-between mt-3">
        <div class="ml-24">
            <h1 class="text-2xl font-semibold">Tabel Driver</h1>
        </div>
        <div>
            <input type="text" id="search" placeholder="Cari Driver..." class="border px-3 py-2 mr-6 border-slate-400 transition-all duration-300 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
            <a href="{{ route('driver.create') }}">
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
                    <th scope="col" class="px-6 py-4 font-medium text-left text-gray-50">Nama</th>
                    <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Nomor Telepon</th>
                    <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Alamat</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-50">Aksi</th>
                </tr>
            </thead>
            <tbody id="driverTable" class="divide-y divide-gray-100 border-t border-gray-100">
                @foreach ($driver as $see)
                    <tr id="driverTable" class="hover:bg-gray-100 transition-colors duration-200">
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                            <div class="relative h-10 w-10">
                                @if (empty($see->avatar))
                                    <img class="h-full w-full rounded-full object-cover object-center" src="{{ asset('uploads/avatar/empty-avatar.webp  ') }}" alt="" />
                                @else
                                    <img class="h-full w-full rounded-full object-cover object-center" src="{{ asset('uploads/avatar/' . $see->avatar) }}" alt="" />
                                @endif
                            </div>
                            <div class="text-sm">
                                <div class="font-medium text-gray-700">{{ $see->name }}</div>
                                <div class="text-gray-400">{{ $see->email }}</div>
                            </div>
                        </th>
                        @if (!$see->no_hp)
                            <td class="px-6 align-middle text-center py-4">Belum Memasukkan Nomor HP</td>
                        @else
                            <td class="px-6 align-middle text-center py-4">{{ $see->no_hp }}</td>
                        @endif

                        @if (!$see->address)
                            <td class="px-6 align-middle text-center py-4">Belum Memasukkan Alamat</td>
                        @else
                            <td class="px-6 align-middle text-center py-4">{{ $see->address }}</td>
                        @endif

                        <td class="px-6 py-4">
                            <div class="flex space-x-2">
                                <a href="{{ route('driver.edit', $see->id) }}">
                                    <button class="px-3.5 py-2 bg-yellow-300 rounded-md hover:rounded-xl hover:bg-yellow-400 transition-all duration-300 text-white">
                                        <i class="bi bi-pencil-square text-xl text-white"></i>
                                    </button>
                                </a>

                                <form id="delete-driver-{{ $see->id }}" action="{{ route('driver.destroy', $see->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="confirmDeleteDriver({{ $see->id }}, '{{ $see->email }}')" class="px-3.5 py-2 bg-red-600 rounded-md hover:rounded-xl hover:bg-red-700 transition-all duration-300 text-white">
                                        <i class="bi bi-trash-fill text-xl text-white"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Searching --}}
    <script src="{{ asset('assets/jquery/jquery.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#driverTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection
