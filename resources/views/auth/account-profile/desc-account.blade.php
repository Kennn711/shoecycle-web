@extends('layouts-customer.index')

@section('title-frontend', 'ShoeCycle | Keranjang')

@section('content-frontend')
    {{-- <div class=" py-1 bg-blueGray-50">
        <div class="w-full lg:w-5/12 px-4 mx-auto mt-6">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-3xl bg-white border-0">
                <div class="rounded-t-3xl bg-green-800 mb-0 px-6 py-6 border-b-2">
                    <div class="text-center flex justify-between">
                        <h6 class="text-white text-xl font-bold">
                            Pengaturan Akun
                        </h6>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form action="{{ route('store.profile', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-0 font-bold uppercase">
                            Informasi Akun
                        </h6>
                        <div class="mx-auto w-64 text-center">
                            <div class="relative w-64 h-64 cursor-pointer mb-5" onclick="document.getElementById('avatar').click();">
                                @if (!empty($user->avatar))
                                    <img id="preview-img" name="avatar" class="w-64 h-64 rounded-full object-cover shadow-xl" src="{{ asset('uploads/avatar/' . $user->avatar) }}" />
                                @else
                                    <img id="preview-img" name="avatar" class="w-64 h-64 rounded-full object-cover shadow-xl" src="{{ asset('uploads/avatar/empty-avatar.webp') }}" />
                                @endif
                                <div class="w-64 h-64 group hover:bg-gray-200 opacity-60 rounded-full absolute top-0 left-0 flex justify-center items-center transition-all duration-500">
                                    <i class="bi bi-upload hidden group-hover:block w-12 text-4xl"></i>
                                </div>
                            </div>
                            <input type="file" id="avatar" name="avatar" class="hidden" accept="image/*" onchange="previewFile()">
                            <!-- Tambahkan elemen ini untuk menampilkan nama file -->
                            <p id="file-name" class="mt-0 mb-5 text-sm text-gray-600"></p>

                            <script>
                                function previewFile() {
                                    const fileInput = document.getElementById('avatar');
                                    const previewImg = document.getElementById('preview-img');
                                    const fileNameDisplay = document.getElementById('file-name');

                                    const file = fileInput.files[0];
                                    if (file) {
                                        const reader = new FileReader();
                                        reader.onload = function(e) {
                                            previewImg.src = e.target.result;
                                        };
                                        reader.readAsDataURL(file);

                                        // Tampilkan nama file di bawah gambar
                                        fileNameDisplay.textContent = file.name;
                                    } else {
                                        previewImg.src = 'https://images.pexels.com/photos/2690323/pexels-photo-2690323.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500';
                                        fileNameDisplay.textContent = '';
                                    }
                                }
                            </script>

                        </div>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        Username
                                    </label>
                                    <input type="text" value="{{ $user->name }}" placeholder="Masukkan Username Anda" name="name" class="transition-all duration-300 block w-full border-gray-200 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        Email
                                    </label>
                                    <input type="email" value="{{ $user->email }}" placeholder="Masukkan Email Anda" name="email" class="transition-all duration-300 block w-full border-gray-200 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                </div>
                            </div>
                            <div class="w-full lg:w-12/12 px-4 mt-3">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        Password
                                    </label>
                                    <input type="password" name="password" class="transition-all duration-300 block w-full border-gray-200 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                </div>
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">

                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Informasi Diri
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        Alamat Lengkap
                                    </label>
                                    <input type="text" value="{{ $user->address }}" placeholder="Masukkan Alamat Anda" name="address" class="transition-all duration-300 block w-full border-gray-200 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        Nomor Telepon
                                    </label>
                                    <input type="number" value="{{ $user->no_hp }}" placeholder="Masukkan Nomor Telepon Anda" name="no_hp" class="transition-all duration-300 block w-full border-gray-200 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                </div>
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">
                        <div class="mt-8 grid">
                            <button class="w-full py-3 px-4 transition-all duration-300 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-3xl border border-transparent bg-green-800 text-white hover:shadow-md hover:shadow-slate-600 focus:outline-none focus:bg-[#1E293B] disabled:opacity-50 disabled:pointer-events-none">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <form action="{{ route('store.profile', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="items-center justify-center flex mt-[100px] pb-[500px]">
            <div class="group before:hover:scale-95 before:hover:h-[750px] before:hover:bg-white before:hover:border-solid before:hover:border-4 before:hover:border-green-800 before:hover:w-[500px] before:hover:rounded-b-2xl before:transition-all before:duration-500 before:content-[''] before:w-[500px] before:h-28 before:rounded-2xl before:bg-green-800 before:absolute before:top-0 w-[500px] h-72 relative bg-white flex flex-col items-center justify-center gap-2 text-center rounded-2xl">
                <div class="w-28 h-28 mb-8 rounded-full z-10 group-hover:scale-150 group-hover:-translate-y-20 transition-all duration-500 overflow-hidden" onclick="document.getElementById('avatar').click();">
                    @if (!empty($user->avatar))
                        <img id="preview-img" name="avatar" class="w-28 h-28 rounded-full object-cover shadow-xl" src="{{ asset('uploads/avatar/' . $user->avatar) }}" />
                    @else
                        <img id="preview-img" name="avatar" class="w-28 h-28 rounded-full object-cover shadow-xl" src="{{ asset('uploads/avatar/empty-avatar.webp') }}" />
                    @endif
                    <div class="w-28 h-28 hover:bg-gray-200 opacity-60 rounded-full absolute top-0 left-0 flex justify-center items-center transition-all duration-500">
                        <i class="bi bi-pencil opacity-0 w-32 h-32 rounded-full flex justify-center items-center hover:opacity-70 text-4xl transition-opacity duration-300"></i>
                    </div>
                </div>
                <input type="file" id="avatar" name="avatar" class="hidden" accept="image/*" onchange="previewFile()">

                <script src="{{ asset('assets/js/profile-customer.js') }}"></script>

                <div class="-mb-[450px]">
                    <div class="relative w-80 mb-3">
                        <label class="block uppercase text-left text-blueGray-600 text-xs font-bold mb-2">
                            Username
                        </label>
                        <input type="text" value="{{ $user->name }}" placeholder="Masukkan Username Anda" name="name" class="transition-all duration-300 block w-full border-gray-800 rounded-lg text-sm focus:border-green-800 focus:ring-green-800 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    </div>
                    <div class="relative w-80 mb-3 mt-5">
                        <label class="block uppercase text-left text-blueGray-600 text-xs font-bold mb-2">
                            Email
                        </label>
                        <input type="email" value="{{ $user->email }}" placeholder="Masukkan Email Anda" name="email" class="transition-all duration-300 block w-full border-gray-800 rounded-lg text-sm focus:border-green-800 focus:ring-green-800 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    </div>
                    <div class="relative w-80 mb-3 mt-5">
                        <label class="block uppercase text-left text-blueGray-600 text-xs font-bold mb-2">
                            Password
                        </label>
                        <input type="password" name="password" class="transition-all duration-300 block w-full border-gray-800 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    </div>
                    <div class="relative w-80 mb-3 mt-5">
                        <label class="block uppercase text-left text-blueGray-600 text-xs font-bold mb-2">
                            Nama lengkap
                        </label>
                        <input type="text" value="{{ $user->address }}" placeholder="Masukkan Alamat Anda" name="address" class="transition-all duration-300 block w-full border-gray-800 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    </div>
                    <div class="relative w-80 mb-3 mt-5">
                        <label class="block uppercase text-left text-blueGray-600 text-xs font-bold mb-2">
                            Nomor telepon
                        </label>
                        <input type="number" value="{{ $user->no_hp }}" placeholder="Masukkan Nomor Telepon Anda" name="no_hp" class="transition-all duration-300 block w-full border-gray-800 rounded-lg text-sm focus:border-[#1E293B] focus:ring-[#1E293B] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    </div>
                    <button class="relative w-28 h-12 mt-8 text-white font-semibold bg-gray-700 rounded-lg shadow-lg hover:scale-105 duration-200 hover:drop-shadow-2xl hover:shadow-[#72bd6b] hover:cursor-pointer">Ubah
                    </button>

                </div>
            </div>
        </div>
    </form>
@endsection
