<div class="fixed w-full z-30 flex bg-white dark:bg-[#0F172A] p-2 items-center justify-between h-16 px-10">
    <div class="logo ml-12 dark:text-white font-bold flex-none h-full flex items-center justify-center">
        ShoeCycle
    </div>
    <div class="grow h-full flex items-center justify-center"></div>
    <div class="flex-none h-full text-center flex items-center justify-center space-x-4">
        <div class="relative">
            <button id="dropdownProfileButton" data-dropdown-toggle="dropdown" class="flex items-center justify-center bg-white transition-all duration-300 font-medium rounded-full text-sm p-0.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                @if (!empty(auth()->user()->avatar))
                    <img src="{{ asset('uploads/avatar/' . auth()->user()->avatar) }}" alt="Profile Picture" class="w-12 h-12 rounded-full">
                @else
                    <img src="{{ asset('uploads/avatar/empty-avatar.webp') }}" alt="Profile Picture" class="w-12 h-12 rounded-full">
                @endif
                <p class="ml-3 text-base first-letter:uppercase">{{ auth()->user()->name }}</p>
                <svg class="w-2.5 h-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-2xl shadow w-44 dark:bg-gray-700 absolute right-0 mt-2">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownProfileButton">
                    <li class="flex items-center justify-between px-4 pb-2 hover:bg-gray-200 transition-colors duration-300 dark:hover:bg-gray-600 dark:hover:text-white">
                        <i class="bi bi-envelope-at-fill text-xl"></i>
                        <p class="ml-2 truncate">{{ auth()->user()->email }}</p>
                    </li>
                    <hr>
                    <li class="flex items-center px-4 hover:bg-gray-200 transition-colors duration-300 dark:hover:bg-gray-600 dark:hover:text-white">
                        <i class="bi bi-gear-fill text-xl text-[#0F172A]"></i>
                        <a href="{{ route('complete.profile') }}" class="block px-2 py-2 hover:bg-gray-200 transition-colors duration-300 dark:hover:bg-gray-600 dark:hover:text-white">Pengaturan Akun</a>
                    </li>
                    <hr>
                    <li class="flex items-center px-4 hover:bg-gray-200 transition-colors duration-300 dark:hover:bg-gray-600 dark:hover:text-white">
                        <i class="bi bi-box-arrow-right text-xl text-red-500"></i>
                        <a href="{{ route('auth.logout') }}" class="block px-4 py-2 text-red-500 hover:bg-gray-200 transition-colors duration-300 dark:hover:bg-gray-600 dark:hover:text-white">Keluar</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
