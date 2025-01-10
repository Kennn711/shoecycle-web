@extends('layouts-backend/index')

@section('backend-title', 'Admin | Tabel Transaksi')
@push('breadcumb-role')
    {{ auth()->user()->role }}
@endpush

@section('breadcumb-title', 'Data Transaksi')
@push('breadcumb-backend-role')
    <i class="fi-br-admin w-6 h-6 text-xl"></i>
@endpush

@section('backend-content')
    <div class="flex justify-between mt-3 mx-24">
        <div>
            <h1 class="text-2xl font-semibold">Tabel Transaksi</h1>
        </div>
        <div>
            <input type="text" id="search" placeholder="Cari Data Transaksi..." class="border px-3 py-2 mr-6 border-slate-400 transition-all duration-300 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
        </div>
    </div>
    <div class="overflow-hidden rounded-3xl border border-gray-200 shadow-md mt-4 mb-5 ml-20 mr-20">
        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
            <thead class="bg-[#1E293B]">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-50">No</th>
                    <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Nama Customer</th>
                    <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Bukti Pembayaran</th>
                    <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Bukti Pengiriman</th>
                    <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Total</th>
                    <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Kode Resi</th>
                    <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Detail</th>
                    <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Status Transaksi</th>
                    <th scope="col" class="px-6 py-4 font-medium text-center text-gray-50">Status Pengiriman</th>
                </tr>
            </thead>
            <tbody id="transactionTable" class="divide-y divide-gray-100 border-t border-gray-100">
                @foreach ($transactions as $see)
                    <tr class="hover:bg-gray-100 transition-colors duration-200">
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 align-middle text-center py-4">{{ $see->user->name }}</td>
                        <td class="px-6 align-middle text-center py-4">
                            @php $modalProofId = "modaldetail-" . $see->id; @endphp

                            <button data-modal-target="{{ $modalProofId }}" data-modal-toggle="{{ $modalProofId }}" class="rounded-md px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-[#1E293B] text-[#1E293B] hover:text-white">
                                <span class="absolute w-64 h-0 transition-all duration-500 origin-center rotate-45 -translate-x-20 bg-[#1E293B] top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                                <span class="relative text-[#1E293B] transition duration-500 group-hover:text-white ease">
                                    <i class="bi bi-images text-xl"></i>
                                </span>
                            </button>

                            @push('modal')
                                <div id="{{ $modalProofId }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between bg-[#1E293B] p-4 md:p-5 border-b rounded-t-3xl dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-white dark:text-white">
                                                    Bukti Pembayaran {{ $see->code }}
                                                </h3>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="bg-gray-100 p-4 md:p-5 space-y-4">
                                                <img src="{{ asset('uploads/payment/' . $see->proof_of_payment) }}" width="100%">
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="flex items-center justify-center p-4 md:p-5 border-t rounded-b dark:border-gray-600">
                                                <button data-modal-hide="{{ $modalProofId }}" type="button" class="py-2.5 px-5 w-full text-sm font-medium text-white focus:outline-none bg-[#1E293B] rounded-3xl duration-300 focus:z-10 hover:shadow-md hover:shadow-slate-600 focus:ring-4 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">TUTUP</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endpush
                        </td>
                        <td class="px-6 align-middle text-center py-4">
                            @php $modalDeliveryId = "modaldelivery-" . $see->id; @endphp

                            @if (!empty($see->proof_of_delivery))
                                <button data-modal-target="{{ $modalDeliveryId }}" data-modal-toggle="{{ $modalDeliveryId }}" class="rounded-md px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-[#1E293B] text-[#1E293B] hover:text-white">
                                    <span class="absolute w-64 h-0 transition-all duration-500 origin-center rotate-45 -translate-x-20 bg-[#1E293B] top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                                    <span class="relative text-[#1E293B] transition duration-500 group-hover:text-white ease">
                                        <i class="bi bi-images text-xl"></i>
                                    </span>
                                </button>
                            @else
                                <span class="inline-flex items-center text-sm font-semibold text-[#1E293B]">
                                    Belum Ada Bukti Pengiriman
                                </span>
                            @endif

                            @push('modal')
                                <div id="{{ $modalDeliveryId }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between bg-[#1E293B] p-4 md:p-5 border-b rounded-t-3xl dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-white dark:text-white">
                                                    Bukti Pengiriman {{ $see->code }}
                                                </h3>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="bg-gray-100 p-4 md:p-5 space-y-4">
                                                <img src="{{ asset('uploads/delivery/' . $see->proof_of_delivery) }}" width="100%">
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="flex items-center justify-center p-4 md:p-5 border-t rounded-b dark:border-gray-600">
                                                <button data-modal-hide="{{ $modalDeliveryId }}" type="button" class="py-2.5 px-5 w-full text-sm font-medium text-white focus:outline-none bg-[#1E293B] rounded-3xl duration-300 focus:z-10 hover:shadow-md hover:shadow-slate-600 focus:ring-4 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">TUTUP</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endpush
                        </td>
                        <td class="px-6 align-middle text-center py-4">Rp {{ number_format($see->total, 0, ',', '.') }}</td>
                        <td class="px-6 align-middle text-center py-4">{{ $see->code }}</td>
                        <td class="px-6 align-middle text-center py-4">
                            @php $modalDetailId = "modalproof-" . $see->id; @endphp

                            <button data-modal-target="{{ $modalDetailId }}" data-modal-toggle="{{ $modalDetailId }}" class="rounded-md px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-[#1E293B] text-[#1E293B] hover:text-white">
                                <span class="absolute w-64 h-0 transition-all duration-500 origin-center rotate-45 -translate-x-20 bg-[#1E293B] top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                                <span class="relative text-[#1E293B] transition duration-500 group-hover:text-white ease">
                                    <i class="bi bi-card-text text-xl"></i>
                                </span>
                            </button>

                            @push('modal')
                                <div id="{{ $modalDetailId }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between bg-[#1E293B] p-4 md:p-5 border-b rounded-t-3xl dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-white dark:text-white">
                                                    Detail Pesanan {{ $see->code }}
                                                </h3>
                                            </div>
                                            <!-- Modal body -->
                                            <div class=" bg-gray-100 p-4 md:p-5 space-y-4">
                                                <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-5">
                                                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                            <tr>
                                                                <th scope="col" class="px-3 py-3 text-center">
                                                                    NO
                                                                </th>
                                                                <th scope="col" class="px-3 py-3 text-center">
                                                                    NAMA SEPATU
                                                                </th>
                                                                <th scope="col" class="px-3 py-3 text-center">
                                                                    JUMLAH
                                                                </th>
                                                                <th scope="col" class="px-3 py-3 text-center">
                                                                    HARGA
                                                                </th>
                                                                <th scope="col" class="px-3 py-3 text-center">
                                                                    SUBTOTAL
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <div class="flex flex-col space-y-5 mb-4">
                                                                <div class="flex justify-between">
                                                                    <div class="flex items-start">
                                                                        <i class="bi bi-person-badge-fill mr-4 text-4xl"></i>
                                                                        <div>
                                                                            <h1 class="text-lg font-bold">Nama Customer</h1>
                                                                            <p class="text-gray-600">{{ $see->user->name }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex items-start">
                                                                        <i class="bi bi-cash-stack mr-12 text-4xl"></i>
                                                                        <div class="mr-7">
                                                                            <h1 class="text-lg font-bold">Total Harga</h1>
                                                                            <p class="text-gray-600">Rp {{ number_format($see->total, 0, ',', '.') }}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex justify-between">
                                                                    <div class="flex items-start">
                                                                        <i class="bi bi-calendar3 mr-4 text-4xl"></i>
                                                                        <div>
                                                                            <h1 class="text-lg font-bold">Tanggal Pembelian</h1>
                                                                            <p class="text-gray-600">{{ $see->payment_date }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex items-start">
                                                                        <i class="bi bi-calendar2-check mr-8 text-4xl"></i>
                                                                        <div>
                                                                            <h1 class="text-lg font-bold">Tanggal Diterima</h1>
                                                                            @if (empty($see->received_date))
                                                                                <p class="text-gray-600">Belum Diterima</p>
                                                                            @endif
                                                                            @if (!empty($see->received_date))
                                                                                <p class="text-gray-600">{{ $see->received_date }}</p>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex justify-between">
                                                                    <div class="flex items-start">
                                                                        <i class="bi bi-receipt mr-4 text-4xl"></i>
                                                                        <div>
                                                                            <h1 class="text-lg font-bold">Status Transaksi</h1>
                                                                            @if ($see->transaction_status == 'pending')
                                                                                <p class="text-gray-600">Pesanan Belum Diproses</p>
                                                                            @endif
                                                                            @if ($see->transaction_status == 'cancelled')
                                                                                <p class="text-gray-600">Pesanan Dibatalkan</p>
                                                                            @endif
                                                                            @if ($see->transaction_status == 'accepted')
                                                                                <p class="text-gray-600">Pesanan Diproses</p>
                                                                            @endif
                                                                            @if ($see->transaction_status == 'completed')
                                                                                <p class="text-gray-600">Selesai</p>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex items-start">
                                                                        <i class="bi bi-truck mr-6 text-4xl"></i>
                                                                        <div>
                                                                            <h1 class="text-lg font-bold">Status Pengiriman</h1>
                                                                            @if ($see->delivery_status == 'shipped')
                                                                                <p class="text-gray-600">Pesanan Dikirim</p>
                                                                            @endif
                                                                            @if ($see->delivery_status == 'delivered')
                                                                                <p class="text-gray-600">Pesanan Terkirim</p>
                                                                            @endif
                                                                            @if ($see->transaction_status == 'cancelled')
                                                                                <p class="text-gray-600">Pesanan Dibatalkan</p>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex justify-start">
                                                                    <div class="flex items-start">
                                                                        <i class="fi-br-user-helmet-safety mr-4 text-4xl"></i>
                                                                        <div>
                                                                            <h1 class="text-lg font-bold">Dikirim Oleh</h1>
                                                                            @if ($see->transaction_status == 'cancelled')
                                                                                <p class="text-gray-600">Pesanan Dibatalkan</p>
                                                                            @endif
                                                                            @if (empty($see->driver_id) || is_null($see->driver_id))
                                                                                <p class="text-gray-600"></p>
                                                                            @endif
                                                                            @if (!empty($see->driver_id))
                                                                                <p class="text-gray-600">{{ $see->driver->name }}</p>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex justify-between">
                                                                    <div class="flex items-start">
                                                                        <i class="fi-br-land-layer-location mr-4 mt-2 text-4xl"></i>
                                                                        <div>
                                                                            <h1 class="text-lg font-bold">Alamat</h1>
                                                                            <p class="text-gray-600 max-w-[30rem]">{{ $see->user->address }}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            @foreach ($see->transactiondetails as $detail)
                                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                        {{ $loop->iteration }}
                                                                    </th>
                                                                    <td class="px-6 py-4 text-center">
                                                                        {{ $detail->shoes->name }}
                                                                    </td>
                                                                    <td class="px-6 py-4 text-center">
                                                                        {{ $detail->quantity }}
                                                                    </td>
                                                                    <td class="px-6 py-4 text-center">
                                                                        Rp {{ number_format($detail->shoes->price, 0, ',', '.') }}
                                                                    </td>
                                                                    <td class="px-6 py-4 text-center">
                                                                        Rp {{ number_format($detail->subtotal, 0, ',', '.') }}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="flex items-center justify-center p-4 md:p-5 border-t rounded-b dark:border-gray-600">
                                                <button data-modal-hide="{{ $modalDetailId }}" type="button" class="w-full py-2.5 px-5 text-sm font-medium text-white focus:outline-none bg-[#1E293B] rounded-3xl hover:shadow-md hover:shadow-slate-600 duration-300 focus:z-10 focus:ring-4 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">TUTUP</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endpush
                        </td>
                        <td class="px-6 py-4 align-middle text-center">
                            @if ($see->transaction_status == 'pending')
                                <div class="flex justify-center space-x-2">
                                    <form action="{{ route('transaction.status', $see->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="transaction_status" value="accepted">
                                        <button type="submit">
                                            <span class="inline-flex items-center rounded-full bg-green-300 hover:bg-green-400 transition-colors duration-300 px-6 py-2 text-sm font-semibold text-[#1E293B]">
                                                Terima
                                            </span>
                                        </button>
                                    </form>
                                    <form action="{{ route('transaction.status', $see->id) }}" method="POST">
                                        @csrf
                                        <button type="submit">
                                            <input type="hidden" name="transaction_status" value="cancelled">
                                            <span class="inline-flex items-center rounded-full bg-red-400 hover:bg-red-500 transition-colors duration-300 px-6 py-2 text-sm font-semibold text-[#1E293B]">
                                                Tolak
                                            </span>
                                        </button>
                                    </form>
                                </div>
                            @endif

                            @if ($see->transaction_status == 'accepted')
                                <span class="inline-flex items-center rounded-full bg-yellow-200 hover:bg-yellow-300 transition-colors duration-300 px-6 py-2 text-sm font-semibold text-[#1E293B]">
                                    Diproses
                                </span>
                            @endif

                            @if ($see->transaction_status == 'cancelled')
                                <span class="inline-flex items-center rounded-full bg-red-400 hover:bg-red-500 transition-colors duration-300 px-6 py-2 text-sm font-semibold text-[#1E293B]">
                                    Pesanan Ditolak
                                </span>
                            @endif

                            @if ($see->transaction_status == 'completed')
                                <span class="inline-flex items-center rounded-full bg-green-300 hover:bg-green-400 transition-colors duration-300 px-6 py-2 text-sm font-semibold text-[#1E293B]">
                                    Selesai
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 align-middle text-center">
                            @if ($see->transaction_status == 'cancelled' && is_null($see->delivery_status))
                            @endif

                            @if ($see->transaction_status == 'pending' && is_null($see->delivery_status))
                            @endif

                            @if ($see->transaction_status == 'accepted' && $see->delivery_status == 'pending')
                                <span class="inline-flex items-center rounded-full bg-gray-300 hover:bg-gray-400 transition-colors duration-300 px-6 py-2 text-sm font-semibold text-[#1E293B]">
                                    Belum Dikirim
                                </span>
                            @endif

                            @if ($see->delivery_status == 'shipped')
                                <span class="inline-flex items-center rounded-full bg-yellow-200 hover:bg-yellow-300 transition-colors duration-300 px-6 py-2 text-sm font-semibold text-[#1E293B]">
                                    Dikirim
                                </span>
                            @endif

                            @if ($see->transaction_status == 'completed')
                                <span class="inline-flex items-center rounded-full bg-green-300 hover:bg-green-400 transition-colors duration-300 px-6 py-2 text-sm font-semibold text-[#1E293B]">
                                    Terkirim
                                </span>
                            @endif
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
                $("#transactionTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection
