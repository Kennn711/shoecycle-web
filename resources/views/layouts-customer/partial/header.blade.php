<header class="header w-full">
    <!--! topHeader -->
    <div class="top-header w-screen flex flex-col items-center justify-between border-b">
        <div class="flex w-full bg-green-800 items-center justify-between p-10 md:px-20 border-b">
        </div>
        <div class="gap-4 bg-gray-100 shadow-md flex flex-col sm:flex-row w-full items-center justify-between p-6 md:px-24">
            <a href="{{ route('order.view') }}">
                <img src="{{ asset('uploads/logo/shoecycle-new-logo.png') }}" class="w-[12rem]" alt="">
            </a>
            <div class="icons hidden mr-2 text-3xl md:flex gap-8 text-gray-600">
                <div class="relative">
                    @if (empty(Auth::user()->avatar))
                        <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="{{ asset('uploads/avatar/empty-avatar.webp') }}" alt="User dropdown" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);">
                    @else
                        <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="{{ asset('uploads/avatar/' . Auth::user()->avatar) }}" alt="User dropdown" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);">
                    @endif

                    <!-- Dropdown menu -->
                    <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                            <div>Hai, {{ Auth::user()->name }} !</div>
                            <div class="font-medium truncate">{{ Auth::user()->email }}</div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                            <li>
                                <a href="{{ route('transaction-customer.index') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Riwayat Pesanan</a>
                                <a href="{{ route('complete.profile') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pengaturan Akun</a>
                            </li>
                        </ul>
                        <div class="py-1">
                            <a href="{{ route('auth.logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                <i class="bi bi-box-arrow-in-right text-green-900"></i> Keluar</a>
                        </div>
                    </div>

                </div>
                <div class="relative">
                    <a href="{{ route('view.cart') }}">
                        <span class="text-xs text-[0.50rem] text-center font-semibold text-white absolute top-[2px] lg:-top-2 -right-2 w-3 h-3 lg:w-4 lg:h-4 bg-green-900 rounded-full">{{ session('count_cart') }}</span>
                        <i class="bi bi-cart4 text-green-900"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
