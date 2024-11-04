@extends('layouts-customer.index')
@section('title-frontend', 'ShoeCycle | Riwayat Transaksi')
@section('content-frontend')
    <div class="shadow-lg rounded-lg overflow-x-auto mx-4 md:mx-10 mt-28">
        <h1 class="text-center mb-5 font-bold uppercase text-2xl">Riwayat Transaksi yang Anda Lakukan</h1>
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr class="bg-gray-200">
                    <th class="w-1/12 py-4 px-3 text-left text-gray-600 font-bold uppercase">No</th>
                    <th class="w-2/12 md:w-1/6 py-4 px-3 text-left text-gray-600 font-bold uppercase">Nama</th>
                    <th class="w-2/12 md:w-1/6 py-4 px-3 text-left text-gray-600 font-bold uppercase">Bukti Pembayaran</th>
                    <th class="w-2/12 md:w-1/6 py-4 px-3 text-left text-gray-600 font-bold uppercase">Tanggal Pembelian</th>
                    <th class="hidden md:table-cell w-2/12 md:w-1/6 py-4 px-3 text-left text-gray-600 font-bold uppercase">Tanggal Diterima</th>
                    <th class="w-2/12 md:w-1/6 py-4 px-3 text-left text-gray-600 font-bold uppercase">Total</th>
                    <th class="w-2/12 md:w-1/6 py-4 px-3 text-left text-gray-600 font-bold uppercase">Detail</th>
                    <th class="w-2/12 md:w-1/6 py-4 px-3 text-left text-gray-600 font-bold uppercase">Status Transaksi</th>
                    <th class="hidden md:table-cell w-2/12 md:w-1/6 py-4 px-3 text-left text-gray-600 font-bold uppercase">Status Pengiriman</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($transaction as $see)
                    <tr>
                        <td class="py-4 px-6 border-b border-gray-200">{{ $loop->iteration }}</td>
                        <td class="py-4 px-6 border-b border-gray-200">{{ $see->user->name }}</td>
                        <td class="py-4 px-6 border-b border-gray-200">
                            @php $modalId = "modal-" . $see->id; @endphp
                            <button data-modal-target="{{ $modalId }}" data-modal-toggle="{{ $modalId }}" class="text-sm w-40 font-semibold bg-gray-300 hover:bg-gray-400 transition-colors duration-200 uppercase text-white px-5 py-2.5 rounded-lg">LIHAT GAMBAR</button>

                            <div id="{{ $modalId }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-2xl max-h-full">
                                    <div class="relative rounded-lg dark:bg-gray-700">
                                        <div class="flex items-center justify-between p-4 md:p-5 border-blue-950 rounded-t-3xl bg-green-700 dark:border-gray-600">
                                            <h3 class="text-xl font-semibold uppercase text-white dark:text-white">Bukti Pembayaran</h3>
                                        </div>
                                        <div class="p-4 md:p-5 space-y-4 bg-gray-100 drop-shadow-md">
                                            <img src="{{ asset('uploads/payment/' . $see->proof_of_payment) }}" width="100%">
                                        </div>
                                        <div class="flex items-center shadow-2xl p-4 md:p-5 border-t bg-white border-gray-200 rounded-b-3xl dark:border-gray-600">
                                            <button data-modal-hide="{{ $modalId }}" type="button" class="h-12 text-white w-full transition-colors duration-200 bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-blue-duration-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600">TUTUP</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6 border-b border-gray-200">{{ $see->payment_date }}</td>
                        <td class="hidden md:table-cell py-4 px-6 border-b border-gray-200">{{ $see->received_date }}</td>
                        <td class="py-4 px-6 border-b border-gray-200">Rp {{ number_format($see->total, 0, ',', '.') }}</td>
                        <td class="py-4 px-6 border-b border-gray-200">
                            @php $modalDetailId = "modaldetail-" . $see->id; @endphp
                            <button data-modal-target="{{ $modalDetailId }}" data-modal-toggle="{{ $modalDetailId }}" class="text-sm w-40 font-semibold bg-gray-300 hover:bg-gray-400 transition-colors duration-200 uppercase text-white px-5 py-2.5 rounded-lg">LIHAT DETAIL</button>

                            <div id="{{ $modalDetailId }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-2xl max-h-full">
                                    <div class="relative bg-white rounded-t-3xl rounded-b-3xl shadow dark:bg-gray-700">
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t-3xl bg-green-700 shadow-xl dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-white uppercase dark:text-white">Detail Pesanan {{ $see->code }}</h3>
                                        </div>
                                        <div class="p-4 md:p-5 space-y-8">
                                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                                <table class="w-full mt-4 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
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
                                                        <div class="flex flex-col space-y-6 mr-3 ml-3 mt-3">
                                                            <div class="flex justify-between">
                                                                <div class="flex items-start">
                                                                    <i class="bi bi-person-badge-fill mr-4 text-4xl text-green-700 "></i>
                                                                    <div>
                                                                        <h1 class="text-lg font-bold">Nama Customer</h1>
                                                                        <p class="text-gray-600">{{ $see->user->name }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="flex items-start">
                                                                    <i class="bi bi-cash-stack mr-4 text-4xl text-green-700"></i>
                                                                    <div>
                                                                        <h1 class="text-lg font-bold">Total Harga</h1>
                                                                        <p class="text-gray-600">Rp {{ number_format($see->total, 0, ',', '.') }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between">
                                                                <div class="flex items-start">
                                                                    <i class="bi bi-calendar3 mr-4 text-4xl text-green-700"></i>
                                                                    <div>
                                                                        <h1 class="text-lg font-bold">Tanggal Pembelian</h1>
                                                                        <p class="text-gray-600">{{ $see->payment_date }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="flex items-start">
                                                                    <i class="bi bi-calendar2-check mr-4 text-4xl text-green-700"></i>
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
                                                                    <i class="bi bi-receipt mr-4 text-4xl text-green-700"></i>
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
                                                                    <i class="bi bi-truck mr-4 text-4xl text-green-700"></i>
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
                                                                    <i class="fi-br-user-helmet-safety mr-4 text-4xl text-green-700"></i>
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
                                        <div class="flex items-center p-4 md:p-5 border-t shadow-2xl border-gray-200 dark:border-gray-600">
                                            <button data-modal-hide="{{ $modalDetailId }}" type="button" class="h-12 text-white w-full transition-colors duration-200 bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-blue-duration-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600">TUTUP</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6 border-b border-gray-200">
                            @if ($see->transaction_status == 'pending')
                                <button disabled class="text-sm w-40 font-semibold bg-gray-300 uppercase text-white px-5 py-2.5 rounded-lg">PENDING</button>
                            @endif
                            @if ($see->transaction_status == 'accepted')
                                <button disabled class="text-sm w-40 font-semibold bg-yellow-300 uppercase text-white px-5 py-2.5 rounded-lg">DIPROSES</button>
                            @endif
                            @if ($see->transaction_status == 'cancelled')
                                <button disabled class="text-sm font-semibold uppercase bg-red-700 w-40 text-white px-5 py-2.5 rounded-lg">DIBATALKAN</button>
                            @endif
                            @if ($see->transaction_status == 'completed')
                                <button disabled class="text-sm w-40 font-semibold bg-green-700 uppercase text-white px-5 py-2.5 rounded-lg">SELESAI</button>
                            @endif
                        </td>
                        <td class="hidden md:table-cell py-4 px-6 border-b border-gray-200">
                            @if ($see->transaction_status == 'pending' && is_null($see->delivery_status))
                                <button disabled class="text-sm w-40 font-semibold bg-gray-300 uppercase text-white px-5 py-2.5 rounded-lg">PENDING</button>
                            @endif
                            @if ($see->transaction_status == 'cancelled' && is_null($see->delivery_status))
                                <button disabled class="text-sm w-40 font-semibold uppercase bg-red-700 text-white px-5 py-2.5 rounded-lg">DIBATALKAN</button>
                            @endif
                            @if ($see->delivery_status == 'shipped')
                                <button disabled class="text-sm w-40 font-semibold uppercase bg-yellow-300 text-white px-5 py-2.5 rounded-lg">DIKIRIM <i class="bi bi-truck text-sm"></i></button>
                            @endif
                            @if ($see->delivery_status == 'delivered')
                                <button disabled class="text-sm w-40 font-semibold uppercase bg-green-700 text-white px-5 py-2.5 rounded-lg">TERKIRIM</button>
                            @endif
                            @if ($see->transaction_status == 'cancelled')
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
