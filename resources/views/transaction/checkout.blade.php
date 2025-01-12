@extends('layouts-customer.index')

@section('title-frontend', 'ShoeCycle | Checkout')
@section('content-frontend')
    <div class="font-[sans-serif] bg-white">
        <div class="flex max-sm:flex-col gap-12 max-lg:gap-4 h-full">
            <div class="ml-4 sm:h-screen sm:sticky sm:top-0 lg:w-[360px] sm:w-[300px]">
                <div class="relative h-full">
                    <div class="px-4 py-8 w-full sm:overflow-auto border-2 border-gray-300 rounded-t-lg mt-8">
                        <div class="space-y-4">

                            <div class="items-center flex justify-center w-full h-16 bg-white border-2 border-green-600 rounded-lg">
                                <h1 class="text-xl font-semibold text-gray-600">Pesanan saya</h1>
                            </div>

                            @foreach ($cart as $id => $see)
                                <div class="flex items-start gap-4">
                                    <div class="w-32 h-28 max-lg:w-24 max-lg:h-24 flex p-3 shrink-0 bg-gray-200 rounded-md">
                                        <img src='{{ $see['image'] }}' class="w-full object-contain" />
                                    </div>
                                    <div class="w-full">
                                        <h3 class="text-sm lg:text-base text-gray-800">{{ $see['name'] }}</h3>
                                        <ul class="text-xs text-gray-800 space-y-1 mt-3">
                                            <li>Ukuran <span class="float-right">{{ $see['size'] }}</span></li>
                                            <li>Jumlah <span class="float-right">{{ $see['quantity'] }}</span></li>
                                            <li>Total harga <span class="float-right">Rp {{ number_format($see['price'] * $see['quantity'], 0, ',', '.') }}</span></li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class=" mt-0 rounded-b-lg bg-gray-200 w-full p-4  border-2 border-gray-300">
                        <h4 class="flex flex-wrap gap-4 text-sm font-bold lg:text-base text-gray-800">Total <span class="ml-auto">
                                Rp {{ number_format(array_sum(array_map(function ($item) {return $item['price'] * $item['quantity'];}, $cart)),0,',','.') }}
                            </span></h4>
                    </div>
                </div>
            </div>

            <div class="max-w-4xl w-full h-max rounded-md px-4 py-8 sticky top-0">
                <h2 class="text-2xl font-bold text-gray-800">Selesaikan Pesanan Anda</h2>
                <div class="mt-8">
                    @if (!empty(auth()->user()->address || !empty(auth()->user()->no_hp)))
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label class="text-gray-700 mb-2 block">Alamat</label>
                                <input type="text" disabled value="{{ auth()->user()->address }}" placeholder="Alamat" class="px-4 py-3 bg-gray-100 focus:bg-transparent text-gray-800 w-full text-sm rounded-md border-2 focus:border-green-700" />
                            </div>
                            <div>
                                <label class="text-gray-700 mb-2 block">Nomor Telepon</label>
                                <input type="text" disabled value="{{ auth()->user()->no_hp }}" placeholder="No telepon" class="px-4 py-3 bg-gray-100 focus:bg-transparent text-gray-800 w-full text-sm rounded-md border-2 focus:border-green-700" />
                            </div>
                        </div>
                    @else
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('uploads/ilustration/empty-address-tlp.png') }}" alt="" class="w-[30rem] h-[30rem]">
                            <p class="text-red-500 text-center font-bold">Data Diri anda tidak Lengkap !</p>
                            <!-- Tombol untuk membuka modal -->
                            <button data-modal-target="demo-popup" data-modal-toggle="demo-popup" type="button" class="bg-green-700 text-white px-4 py-2 rounded mt-4 open-modal">Lengkapi</button>
                        </div>
                    @endif

                    <div class="mt-8">
                        @if (!empty(auth()->user()->address && !empty(auth()->user()->no_hp)))
                            <label class="text-gray-700 mb-2 block">Kirim Bukti Pembayaran</label>
                            <form action="{{ route('checkout.detail') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @foreach ($cart as $id => $item)
                                    <input type="hidden" name="shoes_id[]" value="{{ $id }}">
                                @endforeach
                                <div class="">
                                    <div class="flex items-center justify-center w-full mb-4">
                                        <label for="file-upload" class="flex flex-col items-center justify-center w-full h-44 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg aria-hidden="true" class="w-8 h-8 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V12m0 0V8m0 4H3.5a2.5 2.5 0 00-2.5 2.5V17.5A2.5 2.5 0 003.5 20H5m14-4v4a2.5 2.5 0 002.5 2.5H20m-4-4v-4a2.5 2.5 0 00-2.5-2.5H12"></path>
                                                </svg>
                                                <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                                <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                                <p id="file-name" class="text-sm text-gray-500 mt-2"></p>
                                            </div>
                                            <input id="file-upload" name="proof_of_payment" type="file" class="hidden" onchange="showFileName()">
                                        </label>
                                    </div>
                                </div>
                                <div class="flex gap-4 max-md:flex-col mt-8">
                                    <button type="submit" class="rounded-md px-4 py-2.5 w-full text-sm tracking-wide border-2 border-green-700 text-black hover:text-white hover:bg-green-700 transition delay-100 duration-100 ease-in-out">Kirim</button>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
            <div class="pt-4 mt-4">
                <h1 class="text-2xl font-bold text-gray-800 pl-4">Rekening yang tersedia :</h1>
                <div class="ml-5 mt-8">
                    <img src="{{ asset('uploads/e-wallet/bca.png') }}" alt="" class="w-16 h-11 rounded-lg">
                    <h1 class="pl-20 -mt-8">17625936</h1>
                    <img src="{{ asset('uploads/e-wallet/bni.png') }}" alt="" class="w-16 h-11 mt-5 rounded-lg">
                    <h1 class="pl-20 -mt-8">87645762</h1>
                    <img src="{{ asset('uploads/e-wallet/bri.jpg') }}" alt="" class="w-16 h-11 mt-5 rounded-lg">
                    <h1 class="pl-20 -mt-8">17627543</h1>
                    <img src="{{ asset('uploads/e-wallet/dana.jpg') }}" alt="" class="w-16 h-11 mt-5 rounded-lg">
                    <h1 class="pl-20 -mt-8">17689065</h1>
                </div>
                <div class="w-px h-[215px] ml-[190px] -mt-[205px] bg-gray-400"></div>
                <div class="ml-52 -mt-[213px]">
                    <img src="{{ asset('uploads/e-wallet/gopay.jpg') }}" alt="" class="w-16 h-11 rounded-lg">
                    <h1 class="pl-20 -mt-8">18751936</h1>
                    <img src="{{ asset('uploads/e-wallet/mandiri.png') }}" alt="" class="w-16 h-11 mt-5 rounded-lg">
                    <h1 class="pl-20 -mt-8">80535762</h1>
                    <img src="{{ asset('uploads/e-wallet/ovo.jpg') }}" alt="" class="w-16 h-11 mt-5 rounded-lg">
                    <h1 class="pl-20 -mt-8">10917243</h1>
                    <img src="{{ asset('uploads/logo/SHOPPEPAY.jpg') }}" alt="" class="w-16 h-11 mt-5 rounded-lg">
                    <h1 class="pl-20 -mt-8">17019065</h1>
                </div>
            </div>
        </div>
    </div>
    <div id="demo-popup" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <div class="relative rounded-lg dark:bg-gray-700">
                <div class="flex items-center justify-between p-4 md:p-5 border-blue-950 rounded-t-3xl bg-green-700 dark:border-gray-600">
                    <h3 class="font-bold text-white">Mohon Lengkapi Data Diri Anda !</h3>
                </div>
                <div class="p-4 md:p-5 space-y-4 bg-gray-100 rounded-b-3xl drop-shadow-md">
                    <form action="{{ route('update.profile') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="flex space-x-4 mb-4">
                            <!-- Alamat -->
                            <div class="w-1/2">
                                <label class="text-gray-700 mb-2 block">Masukkan Alamat</label>
                                <input type="text" name="address" placeholder="Masukkan Alamat Anda" class="px-4 py-3 bg-gray-100 transition-all duration-300  focus:ring-green-700 focus:bg-transparent text-gray-800 w-full text-sm rounded-xl border-2 focus:border-green-700" />
                            </div>

                            <!-- No Telepon -->
                            <div class="w-1/2">
                                <label class="text-gray-700 mb-2 block">Masukkan Nomor Telepon</label>
                                <input type="text" name="no_hp" placeholder="Masukkan Nomor Telepon Anda" class="px-4 py-3 bg-gray-100 transition-all duration-300  focus:ring-green-700 focus:bg-transparent text-gray-800 w-full text-sm rounded-xl border-2 focus:border-green-700" />
                            </div>
                        </div>

                        <!-- Tombol kiri dan kanan -->
                        <div class="flex justify-between mt-4">
                            <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded-xl">Ubah</button>
                            <button data-modal-hide="demo-popup" type="button" class="bg-red-500 text-white px-4 py-2 rounded-xl close-modal">Tutup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showFileName() {
            const input = document.getElementById('file-upload');
            const fileNameDisplay = document.getElementById('file-name');
            fileNameDisplay.textContent = input.files.length > 0 ? input.files[0].name : 'No file chosen';
        }
    </script>
@endsection
