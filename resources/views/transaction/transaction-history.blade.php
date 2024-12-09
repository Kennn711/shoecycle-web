@extends('layouts-customer.index')
@section('title-frontend', 'ShoeCycle | Riwayat Transaksi')
@section('content-frontend')

    <div class="overflow-x-auto mb-2 mx-4 md:mx-10 mt-10 sm:mt-16 md:mt-20 lg:mt-24 xl:mt-28">
        <h1 class="text-center mb-2 font-bold uppercase text-sm md:text-xl lg:text-2xl">Riwayat Transaksi yang Anda Lakukan</h1>
    </div>
    @foreach ($transaction as $see)
        <div class="flex items-center justify-center mt-8">
            <div class="card bg-gray-200/60 w-[1130px] h-[230px] border border-gray-600 shadow-lg shadow-black/20 backdrop-blur-md rounded-2xl text-center cursor-pointer transition-all duration-500 select-none font-bold text-black hover:border-black hover:scale-[1.01] active:scale-95 active:rotate-1">
                @if ($see->transaction_status == 'pending')
                    <div class="w-[1128px] h-[40px] bg-gray-400 top-0 rounded-t-xl">
                        <h4 class="items-center justify-center text-base font-medium pt-2">PENDING</h4>
                    </div>
                @endif

                @if ($see->transaction_status == 'accepted' && $see->delivery_status == 'pending')
                    <div class="w-[1128px] h-[40px] bg-yellow-300 top-0 rounded-t-xl">
                        <h4 class="items-center justify-center text-base font-medium pt-2">DIPROSES</h4>
                    </div>
                @endif

                @if ($see->transaction_status == 'cancelled')
                    <div class="w-[1128px] h-[40px] bg-red-500 top-0 rounded-t-xl">
                        <h4 class="items-center justify-center text-base font-medium pt-2">DITOLAK</h4>
                    </div>
                @endif

                @if ($see->transaction_status == 'completed' && $see->delivery_status == 'delivered')
                    <div class="w-[1128px] h-[40px] bg-green-500 top-0 rounded-t-xl">
                        <h4 class="items-center justify-center text-base font-medium pt-2">SELESAI</h4>
                    </div>
                @endif

                @if ($see->transaction_status == 'accepted' && $see->delivery_status == 'shipped')
                    <div class="w-[1128px] h-[40px] bg-yellow-300 top-0 rounded-t-xl">
                        <h4 class="items-center justify-center text-base font-medium pt-2">DIPROSES</h4>
                    </div>
                @endif
                <div>
                    <p class="text-left font-normal ml-3 mt-3">Tanggal Pembelian : {{ $see->payment_date }}</p>
                    <p class="text-left font-normal ml-3 mt-3">Tanggal Diterima : {{ $see->received_date ?? 'Belum Diterima' }}</p>
                    <p class="text-left font-normal ml-3 mt-3">Kode Resi : {{ $see->code }}</p>
                </div>
                <div class="text-left ml-3 mt-3">
                    @php $modalId = "modal-" . $see->id; @endphp
                    <button data-modal-target="{{ $modalId }}" data-modal-toggle="{{ $modalId }}" class="relative overflow-hidden rounded-lg h-12 group hover:shadow-lg hover:scale-105 transition duration-500 before:absolute before:inset-0 before:rounded-lg bg-gray-400">
                        <span class="relative text-white font-bold px-8 py-8"> Bukti pembayaran </span>
                    </button>

                    @php $modalDetailId = "modaldetail-" . $see->id; @endphp
                    <button data-modal-target="{{ $modalDetailId }}" data-modal-toggle="{{ $modalDetailId }}" class="relative overflow-hidden ml-3 rounded-lg h-12 group hover:shadow-lg hover:scale-105 transition duration-500 before:absolute before:inset-0 before:rounded-lg bg-gray-400">
                        <span class="relative text-white font-bold px-8 py-8"> Lihat detail </span>
                    </button>
                </div>
                <div class="text-right mr-3 -mt-[120px]">
                    <p>Total pembayaran : Rp {{ number_format($see->total, 0, ',', '.') }}</p>
                </div>
                <div class="text-right mr-3 mt-12">
                    @if ($see->transaction_status == 'pending')
                        <button disabled class="relative overflow-hidden rounded-lg w-[190px] h-12 bg-gray-400">
                            <span class="relative text-white font-bold px-8 py-8"> Belum Diproses </span>
                        </button>
                    @endif

                    @if ($see->transaction_status == 'accepted' && $see->delivery_status == 'pending')
                        <button disabled class="relative overflow-hidden rounded-lg w-[190px] h-12 bg-yellow-300">
                            <span class="relative text-white font-bold px-8 py-8"> Diproses </span>
                        </button>
                    @endif

                    @if ($see->transaction_status == 'cancelled')
                        <button disabled class="relative overflow-hidden rounded-lg w-[190px] h-12 bg-red-500">
                            <span class="relative text-white font-bold px-8 py-8"> Ditolak </span>
                        </button>
                    @endif

                    @if ($see->transaction_status == 'completed' && $see->delivery_status == 'delivered')
                        <button disabled class="relative overflow-hidden rounded-lg w-[190px] h-12 bg-green-500">
                            <span class="relative text-white font-bold px-8 py-8"> Selesai </span>
                        </button>
                    @endif

                    @if ($see->transaction_status == 'accepted' && $see->delivery_status == 'shipped')
                        <button disabled class="relative overflow-hidden rounded-lg w-[190px] h-12 bg-yellow-300">
                            <span class="relative text-white font-bold px-8 py-8"> Dikirim </span>
                        </button>
                    @endif
                </div>
            </div>
        </div>

        <div id="{{ $modalId }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <div class="relative rounded-lg dark:bg-gray-700">
                    <div class="flex items-center justify-between p-4 md:p-5 border-blue-950 rounded-t-3xl bg-green-700 dark:border-gray-600">
                        <h3 class="text-xl font-semibold uppercase text-white dark:text-white">Bukti Pembayaran {{ $see->code }}</h3>
                    </div>
                    <div class="p-4 md:p-5 space-y-4 bg-gray-100 drop-shadow-md">
                        <img src="{{ asset('uploads/payment/' . $see->proof_of_payment) }}" width="100%">
                    </div>
                    <div class="flex items-center shadow-2xl p-4 md:p-5 border-t bg-white border-gray-200 rounded-b-3xl dark:border-gray-600">
                        <button data-modal-hide="{{ $modalId }}" type="button" class="w-full py-2.5 px-5 text-sm font-medium text-white focus:outline-none bg-green-800 rounded-3xl hover:shadow-md hover:shadow-slate-600 border-2 border-green-800 duration-300 focus:z-10 focus:ring-4 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">TUTUP</button>
                    </div>
                </div>
            </div>
        </div>

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
                        <button data-modal-hide="{{ $modalDetailId }}" type="button" class="w-full py-2.5 px-5 text-sm font-medium text-white focus:outline-none bg-green-800 rounded-3xl hover:shadow-md hover:shadow-slate-600 border-2 border-green-800 duration-300 focus:z-10 focus:ring-4 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">TUTUP</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
