<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShoeCycle</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12 h-14 bg-gradient-to-r from-cyan-500 to-blue-950">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-sky-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">

                <div class="max-w-md mx-auto">
                    <div>
                        <img src="{{ asset('uploads/logo/ShoeCycle (navy).png') }}" alt="">
                    </div>
                    <div class="divide-y divide-gray-200 items-center justify-center flex">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7 flex flex-col items-center">
                            <div class="relative">
                                <a href="{{ route('login') }}" class="text-center bg-blue-800 hover:bg-blue-900 transition-colors duration-200z text-white rounded-md px-2 py-1 inline-block">Login</a>
                            </div>
                            <div class="relative">
                                <p class="text-center">Atau</p>
                            </div>
                            <div class="relative">
                                <a href="{{ route('register') }}" class="text-center bg-blue-800 hover:bg-blue-900 transition-colors duration-200z text-white rounded-md px-2 py-1 inline-block">Buat Akun</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full flex justify-center">
                    <a href="#" class="flex items-center bg-white border border-gray-300 rounded-lg shadow-md px-6 py-2 text-sm font-medium text-gray-800 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        <span>Created With Love by Kennn</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
