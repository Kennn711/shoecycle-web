@extends('layouts.main')
@section('title', 'Halaman Driver')
@section('page_title', 'Pesanan Saya')

@section('content')
    <div class="w-full pl-24 pr-8 py-6 mx-auto my-32">
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white dark:bg-gray-800 border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex bg-blue-900 items-center justify-center p-6 pb-6 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="dark:text-white text-gray-100 text-xl uppercase font-mono font-bold">Daftar Pesanan Saya</h6>
                    </div>
                    <div class="flex-auto px-2 pt-0 pb-3">
                        <div class="p-0 overflow-x-auto">
                            <table class="items-center w-full mb-0 align-center border-collapse dark:border-white/40 text-slate-500">
                                <thead class="align-bottom">
                                    <tr>
                                        <th class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">NO</th>
                                        <th class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">NAMA CUSTOMER</th>
                                        <th class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">KODE RESI</th>
                                        <th class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">DETAIL PESANAN</th>
                                        <th class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">STATUS TRANSAKSI</th>
                                        <th class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">STATUS PENGIRIMAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($myOrders as $see)
                                        <tr>
                                            <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="py-1">
                                                    <h6 class="mb-0 text-sm text-center leading-normal dark:text-white">{{ $loop->iteration }}</h6>
                                                </div>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">{{ $see->user->name }}</p>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $see->code }}</span>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                @php $modalDetailId = "modaldetail-" . $see->id; @endphp
                                                <button data-modal-target="{{ $modalDetailId }}" data-modal-toggle="{{ $modalDetailId }}" class=" text-white transition-colors duration-200 bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-duration-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                                    LIHAT DETAIL
                                                </button>

                                                <div id="{{ $modalDetailId }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t bg-blue-900 shadow-xl dark:border-gray-600">
                                                                <h3 class="text-xl font-semibold text-white uppercase dark:text-white">Detail Pesanan {{ $see->code }}</h3>
                                                            </div>
                                                            <div class="p-4 md:p-5 space-y-4">
                                                                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
                                                                            <div class="flex justify-between">
                                                                                <div class="flex items-start">
                                                                                    <i class="bi bi-person-badge-fill mr-4 text-4xl"></i>
                                                                                    <div>
                                                                                        <h1 class="text-lg font-bold">Nama Customer</h1>
                                                                                        <p class="text-gray-600">{{ $see->user->name }}</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex items-start">
                                                                                    <i class="bi bi-cash-stack mr-4 text-4xl"></i>
                                                                                    <div>
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
                                                                                    <i class="bi bi-calendar2-check mr-4 text-4xl"></i>
                                                                                    <div>
                                                                                        <h1 class="text-lg font-bold">Tanggal Diterima</h1>
                                                                                        @if (empty($see->received_date))
                                                                                            <p class="text-gray-600">Belum Diterima</p>
                                                                                        @endif
                                                                                        <p class="text-gray-600">{{ $see->received_date }}</p>
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
                                                                                    <i class="bi bi-truck mr-4 text-4xl"></i>
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
                                                                            <div class="flex justify-between">
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
                                                                                        <p class="text-gray-600">{{ $see->driver->name ?? '' }}</p>
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
                                                            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                <button data-modal-hide="{{ $modalDetailId }}" type="button" class="h-12 text-white w-full transition-colors duration-200 bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-duration-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600">TUTUP</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                @if ($see->transaction_status == 'accepted')
                                                    <button disabled class="text-xs w-40 font-semibold bg-yellow-300 uppercase text-white px-5 py-2.5 rounded-lg">DIPROSES</button>
                                                @endif

                                                @if ($see->transaction_status == 'cancelled')
                                                    <button disabled class="text-xs font-semibold uppercase bg-red-700 w-40 text-white px-5 py-2.5 rounded-lg">DIBATALKAN</button>
                                                @endif

                                                @if ($see->transaction_status == 'completed')
                                                    <button disabled class="text-xs w-40 font-semibold bg-green-700 uppercase text-white px-5 py-2.5 rounded-lg">SELESAI</button>
                                                @endif
                                            </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                @if ($see->delivery_status == 'shipped')
                                                    <form action="{{ route('delivery.status', $see->id) }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="delivery_status" value="delivered">
                                                        <button disabled class="text-sm font-semibold uppercase bg-yellow-300 text-white px-5 py-2.5 rounded-lg">MENGIRIM</button>
                                                        <button type="submit" class="text-sm font-semibold transition-colors duration-200 uppercase bg-green-700 hover:bg-green-800 text-white px-5 py-2.5 rounded-lg"><i class="bi bi-check-square-fill"></i></button>
                                                    </form>
                                                @endif

                                                @if ($see->delivery_status == 'pending' || is_null($see->delivery_status))
                                                    <form action="{{ route('delivery.status', $see->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        <input type="hidden" name="delivery_status" value="shipped">
                                                        <button type="submit" class="text-sm font-semibold transition-colors duration-200 uppercase bg-green-700 hover:bg-green-800 text-white px-5 py-2.5 rounded-lg">KIRIM</button>
                                                    </form>
                                                @endif

                                                @if ($see->delivery_status == 'delivered')
                                                    <button disabled class="text-xs w-40 font-semibold bg-green-700 uppercase text-white px-5 py-2.5 rounded-lg">TERKIRIM</button>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
