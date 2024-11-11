<aside class = "w-60 -translate-x-48 fixed transition transform ease-in-out duration-1000 z-50 flex h-screen bg-[#1E293B] ">
    <!-- open sidebar button -->
    <div class="max-toolbar translate-x-24 scale-x-0 w-full -right-6 transition transform ease-in duration-300 flex items-center justify-center border-4 border-white dark:border-[#0F172A] bg-[#1E293B] absolute top-2 rounded-full h-12">
        <div class="flex items-center space-x-3 group bg-gradient-to-r dark:from-cyan-500 dark:to-blue-500 from-indigo-500 via-purple-500 to-purple-500 pl-20 pr-5 py-1 rounded-full text-white">
            <div class="transform ease-in-out duration-300 mr-12 font-bold">
                ShoeCycle
            </div>
        </div>
    </div>

    <div onclick="openNav()" class = "-right-6 transition transform ease-in-out duration-500 flex border-4 border-white dark:border-[#0F172A] bg-[#1E293B] dark:hover:bg-blue-500 hover:bg-purple-500 absolute top-2 p-3 rounded-full text-white hover:rotate-45">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={3} stroke="currentColor" class="w-4 h-4">
            <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
        </svg>
    </div>
    <!-- MAX SIDEBAR-->
    <div class= "max hidden text-white mt-20 flex-col space-y-2 w-full h-[calc(100vh)]">
        @if (auth()->user()->role == 'admin')
            <div class =  "hover:ml-4 w-full text-white hover:text-purple-500 dark:hover:text-blue-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <i class="fi-br-dashboard-panel w-4 h-5"></i>
                <div>
                    <a href="{{ route('page.dashboard') }}">
                        Dashboard
                    </a>
                </div>
            </div>
            <div class =  "hover:ml-4 w-full text-white hover:text-purple-500 dark:hover:text-blue-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <i class="fi-br-boot-heeled w-4 h-5"></i>
                <div>
                    <a href="{{ route('shoes.index') }}">
                        Data Sepatu
                    </a>
                </div>
            </div>
            <div class =  "hover:ml-4 w-full text-white hover:text-purple-500 dark:hover:text-blue-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <i class="bi bi-receipt w-4 h-5"></i>
                <div>
                    <a href="{{ route('transaction.index') }}">
                        Data Transaksi
                    </a>
                </div>
            </div>
            <div class =  "hover:ml-4 w-full text-white hover:text-purple-500 dark:hover:text-blue-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <i class="fi-br-employee-man w-4 h-5"></i>
                <div>
                    <a href="{{ route('driver.index') }}">
                        Kelola Driver
                    </a>
                </div>
            </div>
        @endif

        @if (auth()->user()->role == 'driver')
            <div class =  "hover:ml-4 w-full text-white hover:text-purple-500 dark:hover:text-blue-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <i class="bi bi-card-checklist w-4 h-6"></i>
                <div>
                    <a href="{{ route('ordershoes.view') }}">
                        Daftar Pesanan
                    </a>
                </div>
            </div>
            <div class =  "hover:ml-4 w-full text-white hover:text-purple-500 dark:hover:text-blue-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <i class="bi bi-journal-bookmark-fill w-4 h-6"></i>
                <div>
                    <a href="{{ route('myorder.view') }}">
                        Pesanan Saya
                    </a>
                </div>
            </div>
        @endif
    </div>
    <!-- MINI SIDEBAR-->
    <div class= "mini mt-20 flex flex-col space-y-2 w-full h-[calc(100vh)]">
        @if (auth()->user()->role == 'admin')
            <div class= "hover:ml-4 justify-end pr-3.5 text-white hover:text-purple-500 dark:hover:text-blue-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex">
                <a href="{{ route('page.dashboard') }}">
                    <i class="fi-br-dashboard-panel text-2xl w-4 h-7"></i>
                </a>
            </div>
            <div class= "hover:ml-4 justify-end pr-3.5 text-white hover:text-purple-500 dark:hover:text-blue-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex">
                <a href="{{ route('shoes.index') }}">
                    <i class="fi-br-boot-heeled text-2xl w-4 h-7"></i>
                </a>
            </div>
            <div class= "hover:ml-4 justify-end pr-3.5 text-white hover:text-purple-500 dark:hover:text-blue-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex">
                <a href="{{ route('transaction.index') }}">
                    <i class="bi bi-receipt text-2xl w-4 h-7"></i>
                </a>
            </div>
            <div class= "hover:ml-4 justify-end pr-3.5 text-white hover:text-purple-500 dark:hover:text-blue-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex">
                <a href="{{ route('driver.index') }}">
                    <i class="fi-br-employee-man text-2xl w-4 h-7"></i>
                </a>
            </div>
        @endif

        @if (auth()->user()->role == 'driver')
            <div class= "hover:ml-4 justify-end pr-3.5 text-white hover:text-purple-500 dark:hover:text-blue-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex">
                <a href="{{ route('ordershoes.view') }}">
                    <i class="bi bi-card-checklist text-2xl w-4 h-7"></i>
                </a>
            </div>
            <div class= "hover:ml-4 justify-end pr-3.5 text-white hover:text-purple-500 dark:hover:text-blue-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex">
                <a href="{{ route('myorder.view') }}">
                    <i class="bi bi-journal-bookmark-fill text-2xl w-4 h-7"></i>
                </a>
            </div>
        @endif
    </div>

</aside>
