<div class="flex">
    <!-- Sidebar -->
    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-80 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto shadow-lg bg-slate-900 dark:bg-gray-800">
            <div class="flex items-center pl-2.5 mb-5">
                <img src="{{ asset('uploads/logo/ShoeCycle (putih).png') }}" class="h-40 mr-3 sm:h-16" alt="ShoeCycle Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap text-white dark:text-white">ShoeCycle</span>
            </div>
            <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
            <ul class="space-y-2 font-medium">
                {{-- Tampilan Sidebar Admin --}}
                @if (auth()->user()->role == 'admin')
                    <li>
                        <a href="{{ route('page.dashboard') }}" class="flex items-center p-2 text-white rounded-lg  dark:text-white hover:bg-gray-700 dark:hover:bg-gray-700 group">
                            <i class="fi-br-dashboard-panel w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('shoes.index') }}" class="flex items-center p-2 text-white rounded-lg  dark:text-white hover:bg-gray-700 dark:hover:bg-gray-700 group">
                            <i class="fi-br-boot w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                            <span class="ml-3">Data Sepatu</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('transaction.index') }}" class="flex items-center p-2 text-white rounded-lg  dark:text-white hover:bg-gray-700 dark:hover:bg-gray-700 group">
                            <i class="bi bi-receipt text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                            <span class="ml-3">Data Transaksi</span>
                        </a>
                    </li>
                    <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                    <li>
                        <a href="{{ route('driver.index') }}" class="flex items-center p-2 text-white rounded-lg  dark:text-white hover:bg-gray-700 dark:hover:bg-gray-700 group">
                            <i class="fi-br-user-helmet-safety text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                            <span class="ml-3">Kelola Driver</span>
                        </a>
                    </li>
                @endif
                {{-- Tampilan Sidebar Admin END --}}

                {{-- Tampilan Sidebar Customer --}}
                @if (auth()->user()->role == 'customer')
                    <li>
                        <a href="{{ route('order.view') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Pesan Sepatu</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('transaction.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Riwayat Transaksi</span>
                        </a>
                    </li>
                @endif
                {{-- Tampilan Sidebar Customer END --}}

                {{-- Tampilan Sidebar Driver --}}
                @if (auth()->user()->role == 'driver')
                    <li>
                        <a href="{{ route('ordershoes.view') }}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:text-slate-800 hover:bg-gray-700 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap text-white">Daftar Pesanan</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('myorder.view') }}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:text-slate-800 hover:bg-gray-700 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap text-white">Pesanan Saya</span>
                        </a>
                    </li>
                @endif
                <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                {{-- Tampilan Sidebar Driver END --}}
                <li>
                    <a href="{{ route('complete.profile') }}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-700 dark:hover:bg-gray-700 group">
                        <i class="bi bi-person-gear text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap">Profil Akun</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('auth.logout') }}" class="flex items-center p-2 text-white rounded-lg hover:text-white dark:text-white hover:bg-gray-700 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400  group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Keluar</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <!-- Main Content -->
    <!-- Navbar -->
    <nav class="bg-blue-900 shadow-lg dark:bg-gray-900 w-full fixed ml-16">
        <div class="flex items-center justify-between w-full py-6 px-16">
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white dark:text-white">@yield('page_title')</span>
        </div>
    </nav>

</div>
