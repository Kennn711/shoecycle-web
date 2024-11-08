<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/uicons-bold-rounded/css/uicons-bold-rounded.css') }}">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="font-[sans-serif]">
        <div class="min-h-screen flex flex-col items-center justify-center shadow-2xl bg-slate-100">
            <div class="grid md:grid-cols-2 items-center gap-4 max-md:gap-8 max-w-6xl max-md:max-w-lg w-full p-4 m-4 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-md">
                <div class="md:max-w-md w-full px-4 py-4">
                    <form action="{{ route('auth.login') }}" method="POST">
                        @csrf
                        <div class="mb-12">
                            <h3 class="text-gray-800 text-5xl font-extrabold">Login</h3>
                            <p class="text-sm mt-4 text-gray-800">Belum Memiliki Akun ? <a href="{{ route('register') }}" class="text-[#0F172A] font-semibold hover:underline ml-1 whitespace-nowrap">Buat Akun</a></p>
                        </div>

                        <div>
                            <label class="text-gray-800 text-xs block mb-2">Email</label>
                            <div class="relative flex items-center">
                                <input name="email" type="email" required class="w-full text-gray-800 bg-slate-50 text-sm border-2 border-[#0F172A] focus:border-[#0F172A] rounded-lg px-2 py-3 outline-none" placeholder="Masukkan email" />
                                <i class="bi bi-envelope-at-fill absolute right-2 text-xl "></i>
                            </div>
                        </div>

                        <div class="mt-8">
                            <label class="text-gray-800 text-xs block mb-2">Password</label>
                            <div class="relative flex items-center">
                                <input name="password" type="password" required class="w-full text-gray-800 text-sm bg-slate-50 border-2 border-[#0F172A] focus:border-[#0F172A] rounded-lg px-2 py-3 outline-none focus:outline-none" placeholder="Masukkan password" />
                                <i class="bi bi-shield-lock-fill absolute right-2 text-xl"></i>
                            </div>
                        </div>
                        <div class="mt-12">
                            <button class="w-full shadow-xl py-2.5 px-4 text-sm tracking-wide rounded-md text-white transition-colors duration-200 bg-slate-800 hover:bg-[#0F172A] focus:outline-none">
                                Masuk
                            </button>
                        </div>
                    </form>
                </div>

                <div class="md:h-full bg-[#0F172A] rounded-xl lg:p-12 p-8">
                    <img src="{{ asset('uploads/ilustration/login-amico.png') }}" class="w-full h-full object-contain" alt="login-image" />
                </div>
            </div>
        </div>
    </div>
</body>

</html>
