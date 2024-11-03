<header class="header w-full">
    <!--! topHeader -->
    <div class="top-header w-screen flex flex-col items-center justify-between border-b">
        <div class="flex w-full bg-green-800 items-center justify-between p-5 md:px-20 border-b">
            <div class="icons hidden lg:flex items-center gap-2">
                <a href="" class="text-gray-700 bg-gray-300/50 p-1 rounded-md hover:scale-110 hover:text-white hover:bg-green-400 flex items-center justify-center transition-all">
                    <i class="bi bi-instagram text-xl"></i>
                </a>
                <a href="https://github.com/Kennn711" class="text-gray-700 bg-gray-300/50 p-1 rounded-md hover:scale-110 hover:text-white hover:bg-green-400 flex items-center justify-center transition-all">
                    <i class="bi bi-github text-xl"></i>
                </a>
            </div>
        </div>
        <div class="gap-4 bg-gray-100 shadow-md flex flex-col sm:flex-row w-full items-center justify-between p-6 md:px-24">
            <h1 class="font-semibold text-4xl text-gray-600">ShoeCycle</h1>
            <form class="relative w-full sm:w-3/5">
                <div class="desktopNavbar">
                    <nav class="my-4 hidden lg:flex justify-center">
                        <ul class="desktopNavbarUl flex justify-center items-center gap-12 font-sm font-bold text-gray-600">
                            <li class="nav_items relative">
                                <a href="{{ route('order.view') }}">BELI SEPATU</a>
                                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-green-900  transition-all ease-in-out"></span>
                            </li>
                            <li class="nav_items relative">
                                <a href="{{ route('transaction-customer.index') }}">RIWAYAT TRANSAKSI</a>
                                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-green-900  transition-all ease-in-out"></span>
                            </li>
                        </ul>
                    </nav>
                </div>
                <label class="absolute right-2 top-2" for="search">
                    <i class="fa-solid fa-magnifying-glass cursor-pointer"></i>
                </label>
            </form>
            <div class="icons hidden mr-2 text-3xl md:flex gap-8 text-gray-600">
                <div class="relative">
                    <a href="{{ route('complete.profile') }}">
                        <i class="bi bi-person-gear text-green-900"></i>
                    </a>
                </div>
                <div class="relative">
                    <a href="{{ route('view.cart') }}">
                        <span class="text-xs text-center font-semibold text-white absolute -top-2 -right-2 w-4 h-4 bg-green-900 rounded-full">{{ session('count_cart') }}</span>
                        <i class="bi bi-cart4 text-green-900"></i>
                    </a>
                </div>
                <div class="relative">
                    <a href="{{ route('auth.logout') }}">
                        <i class="bi bi-box-arrow-in-right text-green-900"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- Tampilan Header --}}

    {{-- Tampilan Mobile --}}
    @include('layouts-customer/partial/mobile-navbar')
    <!--? Navbar -->
</header>
