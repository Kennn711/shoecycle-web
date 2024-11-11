<nav class="flex bg-gray-950 w-full h-14 items-center justify-between px-4">
    <!-- Logo dan nama -->
    <div class="flex items-center space-x-2">
        <img src="images/logos.png" alt="Logo" class="h-12 w-auto">
        <p class="text-lg font-semibold text-white">ShoeCycle</p>
    </div>

    <!-- Menu navigasi di tengah -->
    <div class="flex mr-[450px] space-x-5">
        <a href="" class="p-4 text-white hover:text-orange-500 transition-all duration-300 ease-in-out">BERANDA</a>
        <a href="keranjang" class="p-4 text-white hover:text-orange-500 transition-all duration-300 ease-in-out">KERANJANG</a>
        <a href="" class="p-4 text-white hover:text-orange-500 transition-all duration-300 ease-in-out">PROFIL</a>
        <a href="" class="p-4 text-white hover:text-orange-500 transition-all duration-300 ease-in-out">RIWAYAT TRANSAKSI</a>
    </div>
    <button class="group flex items-center justify-start w-9 h-9 bg-gray-950 rounded-full cursor-pointer overflow-hidden transition-all duration-200 shadow-lg hover:w-32 hover:bg-gray-950 hover:rounded-lg active:translate-x-1 active:translate-y-1 absolute right-4">
        <div class="flex items-center justify-center w-full transition-all duration-300 group-hover:justify-start group-hover:px-3">
            <svg class="w-4 h-4 group-hover:fill-orange-600" viewBox="0 0 512 512" fill="white">
                <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c-17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z">
                </path>
            </svg>
        </div>
        <div class="absolute right-5 transform translate-x-full opacity-0 text-orange-600 text-lg font-semibold transition-all duration-300 group-hover:translate-x-0 group-hover:opacity-100">
            <a href="#">
                Keluar
            </a>
        </div>
    </button>
</nav>
