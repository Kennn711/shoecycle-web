<nav class = "flex px-5 py-3 text-gray-700 mb-12 rounded-lg bg-gray-50 dark:bg-[#1E293B] " aria-label="Breadcrumb">
    <ol class = "inline-flex items-center space-x-1 md:space-x-3">
        <li class = "inline-flex items-center">
            <p class="inline-flex items-center capitalize text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                @stack('breadcumb-backend-role')
                @stack('breadcumb-role')
            </p>
        </li>
        <li>
            <div class = "flex items-center">
                <svg class = "w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fillRule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clipRule="evenodd"></path>
                </svg>
                <p class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">@yield('breadcumb-title')</p>
                @stack('breadcumb-sub-title')
            </div>
        </li>
    </ol>
</nav>
