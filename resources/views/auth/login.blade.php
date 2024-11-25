<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShoeCycle | Login</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/uicons-bold-rounded/css/uicons-bold-rounded.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sweetalert/sweetalert.min.css') }}">
    @vite('resources/css/app.css')
</head>

<body class="flex items-center justify-center min-h-screen bg-gradient-to-r from-slate-300 to-slate-500">

    <div class="relative w-full h-[480px] max-w-4xl bg-gray-200 shadow-lg rounded-[30px] overflow-hidden flex">
        <!-- login form -->
        <div class="w-1/2 hidden md:block bg-cover bg-center relative">
            <div class="w-1/2 p-6 ml-[50px]">
                <h2 class="text-4xl font-bold text-gray-800 mb-10 text-center ml-[100px] mt-10">Login</h2>
                <form id="login-form" action="{{ route('auth.login') }}" method="POST">
                    @csrf
                    <div class="w-full max-w-sm min-w-[300px] mb-3 relative">
                        <label for="email" class="block mb-1 text-sm text-slate-700">Email</label>
                        <input type="email" name="email" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-500 rounded-md px-10 py-2 transition duration-300 ease focus:outline-none focus:border-[#0F172A] hover:border-[#0F171A] shadow-sm focus:shadow" placeholder="Masukkan Email Anda" required />
                        <i class="bi bi-envelope-fill absolute text-[#0F171A] left-3 top-7 text-xl"></i>
                    </div>
                    <div class="w-full max-w-sm min-w-[300px] mb-3 relative">
                        <label for="password" class="block mb-1 text-sm text-slate-700">Password</label>
                        <input type="password" name="password" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-500 rounded-md px-10 py-2 transition duration-300 ease focus:outline-none focus:border-[#0F171A] hover:border-[#0F172A] shadow-sm focus:shadow" placeholder="Masukkan Password Anda" required />
                        <i class="bi bi-lock-fill absolute text-[#0F171A] left-3 top-7 text-xl"></i>
                    </div>

                    <button type="submit" class="w-full min-w-[300px] mt-2 shadow-xl py-2.5 px-4 text-sm tracking-wide rounded-md text-white transition-colors duration-200 bg-slate-800 hover:bg-[#0F172A] focus:outline-none">
                        Masuk
                    </button>
                </form>

                <p class="mt-4 text-sm">
                    Belum punya akun?
                    <button id="show-register" class=" text-blue-700 hover:underline">Daftar</button>
                </p>
            </div>
        </div>

        <div class="w-full md:w-1/2 relative">
            <div id="slider" class="flex w-[200%] transition-transform">
                <div class="w-1/2 h-[480px] md:block bg-cover bg-center bg-gradient-to-r from-slate-900 to-slate-700 flex flex-col items-center justify-center text-center">
                    <img id="slider-image" src="uploads/ilustration/login-amico.png" alt="" class="transition-opacity duration-500 opacity-100">
                    <img id="slider-image" src="uploads/ilustration/register-amico.png" alt="" class="transition-opacity duration-500 opacity-100">
                </div>

                <!-- Register Form -->
                <div class="w-1/2 p-6">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4 text-center mt-10">Register</h2>
                    <form id="register-form" action="{{ route('auth.register') }}" method="POST">
                        @csrf
                        <div class="w-full max-w-sm min-w-[300px] mb-3 relative">
                            <label for="name" class="block mb-1 text-sm text-slate-700">Username</label>
                            <input type="text" name="name" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-500 rounded-md px-10 py-2 transition duration-300 ease focus:outline-none focus:border-[#0F172A] hover:border-[#0F171A] shadow-sm focus:shadow" placeholder="Masukkan Username Anda" />
                            <i class="bi bi-person-fill absolute text-[#0F171A] left-3 top-7 text-xl"></i>
                        </div>
                        <div class="w-full max-w-sm min-w-[300px] mb-3 relative">
                            <label for="email" class="block mb-1 text-sm text-slate-700">Email</label>
                            <input type="email" name="email" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-500 rounded-md px-10 py-2 transition duration-300 ease focus:outline-none focus:border-[#0F172A] hover:border-[#0F171A] shadow-sm focus:shadow" placeholder="Masukkan Email Anda" />
                            <i class="bi bi-envelope-fill absolute text-[#0F171A] left-3 top-7 text-xl"></i>
                        </div>
                        <div class="w-full max-w-sm min-w-[300px] mb-3 relative">
                            <label for="password" class="block mb-1 text-sm text-slate-700">Password</label>
                            <input type="password" name="password" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-500 rounded-md px-10 py-2 transition duration-300 ease focus:outline-none focus:border-[#0F172A] hover:border-[#0F171A] shadow-sm focus:shadow" placeholder="Masukkan Password Anda" />
                            <i class="bi bi-lock-fill absolute text-[#0F171A] left-3 top-7 text-xl"></i>
                        </div>
                        <button class="w-full min-w-[300px] mt-2 shadow-xl py-2.5 px-4 text-sm tracking-wide rounded-md text-white transition-colors duration-200 bg-slate-800 hover:bg-[#0F172A] focus:outline-none">
                            Daftar
                        </button>
                    </form>
                    <p class="mt-4 text-sm">
                        Sudah punya akun?
                        <button id="show-login" class="text-blue-700 hover:underline">Login</button>
                    </p>
                </div>

            </div>
        </div>
    </div>
    <script>
        const slider = document.getElementById("slider");
        const showRegister = document.getElementById("show-register");
        const showLogin = document.getElementById("show-login");
        const sliderImage = document.getElementById("slider-image");

        function changeImage(newSrc) {
            sliderImage.style.transition = "opacity 0.5s ease-in-out";
            sliderImage.style.opacity = 0;
            setTimeout(() => {
                sliderImage.src = newSrc;
                sliderImage.style.opacity = 1;
            }, 500);
        }

        // transisi slider 
        slider.style.transition = "transform 0.8s ease-in-out, border-radius 0.8s ease-in-out";

        showRegister.addEventListener("click", () => {
            slider.style.transform = "translateX(-50%)";
            changeImage("uploads/ilustration/register-amico.png");
        });

        showLogin.addEventListener("click", () => {
            slider.style.transform = "translateX(0)";
            changeImage("uploads/ilustration/login-amico.png");
        });
    </script>


</body>
<script src="{{ asset('assets/sweetalert/sweetalert.min.js') }}"></script>
@if (session('message'))
    <script>
        Swal.fire({
            position: "top",
            icon: "{{ session('type-message') }}",
            title: "{!! session('message') !!}",
            showConfirmButton: false,
            toast: true,
            timer: 2500,
            timerProgressBar: true,
        });
    </script>
@endif

</html>
