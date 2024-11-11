<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="images/logos.png">
    <title>ShoeCycle</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

</head>

<body class="bg-white dark:bg-white">
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


    <div class="carousel relative h-[800px] overflow-hidden">
        <div class="bg-gradient-to-r from-slate-300 to-slate-800 bg-opacity-30 backdrop-blur-md rounded-lg h-[450px] mt-2 w-auto flex justify-center items-center">
            <div class="list absolute top-0 -mt-9 w-full max-w-[90%] left-1/2 -translate-x-1/2 h-4/5 flex justify-center items-center">
                <!-- Carousel item 1 (active) -->
                <div class="item active relative w-[60%] h-full text-sm transform scale-100 z-20 transition-all duration-500 ease-in-out">
                    <img src="images/s1.png" alt="" class="absolute right-0 -scale-x-100 w-[500px] -mr-52 mt-24 -rotate-12 top-1/2 -translate-y-1/2">
                    <div id="intro" class="animate-show-content absolute -ml-52 top-1/2 left-5 -translate-y-1/2 w-[400px] opacity-0 pointer-events-auto">
                        <div id="title" class="text-2xl leading-3">Oxford</div>
                        <div id="topic" class="text-4xl font-medium mt-3">JAZZ 2.0 HITAM</div>
                        <div id="des" class="text-sm">Sepatu pria Oxford casual kulit hitam coklat sepatu yang memadukan gaya klasik dengan sentuhan kasual.</div>
                        <button onclick="window.location.href='oxfordjazz'" class="seeMore bg-slate-950 text-slate-400 border border-slate-400 border-b-4 font-medium overflow-hidden relative px-4 py-2 rounded-md hover:brightness-150 hover:border-t-4 hover:border-b active:opacity-75 outline-none duration-300 group mt-3">
                            <span class="bg-slate-400 shadow-slate-400 absolute -top-[150%] left-0 inline-flex w-80 h-[5px] rounded-md opacity-50 group-hover:top-[150%] duration-500 shadow-[0_0_10px_10px_rgba(0,0,0,0.3)]"></span>Lihat &#8599;</button>
                    </div>
                </div>

                <!-- Carousel item 2 -->
                <div class="item absolute left-0 top-0 w-[60%] h-full text-sm transform scale-[0.9] blur-[10px] opacity-0 z-10 transition-all duration-500 ease-in-out">
                    <img src="images/s2.png" alt="" class="absolute right-0 -scale-x-100 -mr-96 mt-16 w-[450px] rotate-12 top-1/2 -translate-y-1/2">
                    <div id="intro" class="animate-show-content absolute top-1/2 left-5 -translate-y-1/2 w-[400px] opacity-0 pointer-events-auto">
                        <div id="title" class="text-2xl leading-3">NIKE</div>
                        <div id="topic" class="text-4xl font-medium mt-3">Air Max Oketo</div>
                        <div id="des" class="text-sm">sepatu yang dirancang untuk gaya kasual dengan inspirasi yang berasal dari desain klasik Air Max.</div>
                        <button class="seeMore bg-slate-950 text-slate-400 border border-slate-400 border-b-4 font-medium overflow-hidden relative px-4 py-2 rounded-md hover:brightness-150 hover:border-t-4 hover:border-b active:opacity-75 outline-none duration-300 group mt-3">
                            <span class="bg-slate-400 shadow-slate-400 absolute -top-[150%] left-0 inline-flex w-80 h-[5px] rounded-md opacity-50 group-hover:top-[150%] duration-500 shadow-[0_0_10px_10px_rgba(0,0,0,0.3)]"></span>Lihat &#8599;</button>
                    </div>
                </div>

                <!-- Carousel item 3 -->
                <div class="item absolute left-0 top-0 w-[60%] h-full text-sm transform scale-[0.8] blur-[20px] opacity-0 z-0 transition-all duration-500 ease-in-out">
                    <img src="images/s3.png" alt="" class="absolute w-[450px] -scale-x-100 -mr-96 mt-16 -rotate-12 right-0 top-1/2 -translate-y-1/2">
                    <div id="intro" class="animate-show-content absolute top-1/2 left-5 -translate-y-1/2 w-[400px] opacity-0 pointer-events-auto">
                        <div id="title" class="text-2xl leading-3">Lavio</div>
                        <div id="topic" class="text-4xl font-medium mt-3">Alden</div>
                        <div id="des" class="text-sm">menggunakan bahan kulit sintetis atau suede yang memberikan tampilan elegan namun tetap kasual.</div>
                        <button class="seeMore bg-slate-950 text-slate-400 border border-slate-400 border-b-4 font-medium overflow-hidden relative px-4 py-2 rounded-md hover:brightness-150 hover:border-t-4 hover:border-b active:opacity-75 outline-none duration-300 group mt-3">
                            <span class="bg-slate-400 shadow-slate-400 absolute -top-[150%] left-0 inline-flex w-80 h-[5px] rounded-md opacity-50 group-hover:top-[150%] duration-500 shadow-[0_0_10px_10px_rgba(0,0,0,0.3)]"></span>Lihat &#8599;</button>
                    </div>
                </div>

                <!-- Carousel item 4 -->
                <div class="item absolute left-0 top-0 w-[60%] h-full text-sm transform scale-[0.9] blur-[10px] opacity-0 z-10 transition-all duration-500 ease-in-out">
                    <img src="images/s4.png" alt="" class="absolute right-0 -scale-x-100 -mr-96 mt-14 w-[450px] -rotate-12 top-1/2 -translate-y-1/2">
                    <div id="intro" class="animate-show-content absolute top-1/2 left-5 -translate-y-1/2 w-[400px] opacity-0 pointer-events-auto">
                        <div id="title" class="text-2xl leading-3">JILITU</div>
                        <div id="topic" class="text-4xl font-medium mt-3">T-39</div>
                        <div id="des" class="text-sm">Sepatu bulu tangkis dengan performa solid tetapi dengan harga yang lebih terjangkau.</div>
                        <button class="seeMore bg-slate-950 text-slate-400 border border-slate-400 border-b-4 font-medium overflow-hidden relative px-4 py-2 rounded-md hover:brightness-150 hover:border-t-4 hover:border-b active:opacity-75 outline-none duration-300 group mt-3">
                            <span class="bg-slate-400 shadow-slate-400 absolute -top-[150%] left-0 inline-flex w-80 h-[5px] rounded-md opacity-50 group-hover:top-[150%] duration-500 shadow-[0_0_10px_10px_rgba(0,0,0,0.3)]"></span>Lihat &#8599;</button>
                    </div>
                </div>

                <!-- Carousel item 5 -->
                <div class="item absolute left-0 top-0 w-[60%] h-full text-sm transform scale-[0.9] blur-[10px] opacity-0 z-10 transition-all duration-500 ease-in-out">
                    <img src="images/s5.png" alt="" class="absolute right-0 -scale-x-100 -mr-[480px] mt-16 w-full rotate-12 top-1/2 -translate-y-1/2">
                    <div id="intro" class="animate-show-content absolute top-1/2 left-5 -translate-y-1/2 w-[400px] opacity-0 pointer-events-auto">
                        <div id="title" class="text-2xl leading-3">NIKE</div>
                        <div id="topic" class="text-4xl font-medium mt-3">Air Zoom Pegasus 35</div>
                        <div id="des" class="text-sm">sepatu lari yang terkenal dengan kenyamanannya dan desain yang responsif, cocok untuk pelari pemula hingga berpengalaman.</div>
                        <button class="seeMore bg-slate-950 text-slate-400 border border-slate-400 border-b-4 font-medium overflow-hidden relative px-4 py-2 rounded-md hover:brightness-150 hover:border-t-4 hover:border-b active:opacity-75 outline-none duration-300 group mt-3">
                            <span class="bg-slate-400 shadow-slate-400 absolute -top-[150%] left-0 inline-flex w-80 h-[5px] rounded-md opacity-50 group-hover:top-[150%] duration-500 shadow-[0_0_10px_10px_rgba(0,0,0,0.3)]"></span>Lihat &#8599;</button>
                    </div>
                </div>

                <!-- Carousel item 6 -->
                <div class="item absolute left-0 top-0 w-[60%] h-full text-sm transform scale-[0.9] blur-[10px] opacity-0 z-10 transition-all duration-500 ease-in-out">
                    <img src="images/s6.png" alt="" class="absolute right-0 -scale-x-100 -mr-96 mt-20 w-[450px] -rotate-12 top-1/2 -translate-y-1/2">
                    <div id="intro" class="animate-show-content absolute top-1/2 left-5 -translate-y-1/2 w-[400px] opacity-0 pointer-events-auto">
                        <div id="title" class="text-2xl leading-3">FREYR</div>
                        <div id="topic" class="text-4xl font-medium mt-3">Leather Oxford</div>
                        <div id="des" class="text-sm">sepatu klasik dengan desain elegan dan sentuhan formal yang khas yang di buat dari bahan kulit berkualitas tinggi.</div>
                        <button class="seeMore bg-slate-950 text-slate-400 border border-slate-400 border-b-4 font-medium overflow-hidden relative px-4 py-2 rounded-md hover:brightness-150 hover:border-t-4 hover:border-b active:opacity-75 outline-none duration-300 group mt-3">
                            <span class="bg-slate-400 shadow-slate-400 absolute -top-[150%] left-0 inline-flex w-80 h-[5px] rounded-md opacity-50 group-hover:top-[150%] duration-500 shadow-[0_0_10px_10px_rgba(0,0,0,0.3)]"></span>Lihat &#8599;</button>
                    </div>
                </div>

                <!-- Carousel item 7 -->
                <div class="item absolute left-0 top-0 w-[60%] h-full text-sm transform scale-[0.9] blur-[10px] opacity-0 z-10 transition-all duration-500 ease-in-out">
                    <img src="images/s7.png" alt="" class="absolute right-0 -scale-x-100 -mr-96 mt-24 w-[450px] -rotate-12 top-1/2 -translate-y-1/2">
                    <div id="intro" class="animate-show-content absolute top-1/2 left-5 -translate-y-1/2 w-[400px] opacity-0 pointer-events-auto">
                        <div id="title" class="text-2xl leading-3">Li-ning</div>
                        <div id="topic" class="text-4xl font-medium mt-3">Ultra IV AYTSO79-7</div>
                        <div id="des" class="text-sm">sepatu bulu tangkis berperforma tinggi yang dirancang untuk mendukung kelincahan dan stabilitas pemain di lapangan.</div>
                        <button class="seeMore bg-slate-950 text-slate-400 border border-slate-400 border-b-4 font-medium overflow-hidden relative px-4 py-2 rounded-md hover:brightness-150 hover:border-t-4 hover:border-b active:opacity-75 outline-none duration-300 group mt-3">
                            <span class="bg-slate-400 shadow-slate-400 absolute -top-[150%] left-0 inline-flex w-80 h-[5px] rounded-md opacity-50 group-hover:top-[150%] duration-500 shadow-[0_0_10px_10px_rgba(0,0,0,0.3)]"></span>Lihat &#8599;</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation arrows -->
        <div class="arrows absolute bottom-5 w-full max-w-[90%] left-1/2 transform -translate-x-1/2 flex justify-between items-center">
            <button id="prev" class="w-10 h-10 rounded-full font-mono text-lg font-bold border bg-white border-gray-500 mb-[350px]">&lt;</button>
            <button id="next" class="w-10 h-10 rounded-full font-mono text-lg font-bold border bg-white border-gray-500 mb-[350px]">&gt;</button>
        </div>
    </div>

    <style>
        .carousel .item {
            opacity: 0;
            transform: scale(0.8);
            filter: blur(20px);
            z-index: 0;
        }

        .carousel .item.active {
            opacity: 1;
            transform: scale(1);
            filter: blur(0);
            z-index: 20;
        }

        .carousel .item.next {
            opacity: 0;
            transform: scale(0.9);
            filter: blur(10px);
            z-index: 10;
        }

        .carousel .item.prev {
            opacity: 0;
            transform: scale(0.9);
            filter: blur(10px);
            z-index: 10;
        }
    </style>

    <script>
        const items = document.querySelectorAll('.carousel .item');
        let currentIndex = 0;

        function updateCarousel() {
            items.forEach((item, index) => {
                item.classList.remove('active', 'next', 'prev');
                if (index === currentIndex) {
                    item.classList.add('active');
                    resetAnimation(item); // Menambahkan fungsi untuk reset animasi
                } else if (index === (currentIndex + 1) % items.length) {
                    item.classList.add('next');
                } else if (index === (currentIndex - 1 + items.length) % items.length) {
                    item.classList.add('prev');
                }
            });
        }

        // Fungsi untuk reset animasi
        function resetAnimation(item) {
            const introContent = item.querySelector('#intro');
            if (introContent) {
                introContent.classList.remove('animate-show-content');
                void introContent.offsetWidth; // Trik untuk memaksa browser reflow
                introContent.classList.add('animate-show-content');
            }
        }

        document.getElementById('next').addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % items.length;
            updateCarousel();
        });

        document.getElementById('prev').addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + items.length) % items.length;
            updateCarousel();
        });

        // Initial update
        updateCarousel();
    </script>

    <div class="flex flex-wrap justify-center mt-5">
        <!-- Card 1 -->
        <div class="card m-auto ml-12 -mt-80 text-gray-300 w-[clamp(260px,85%,240px)] hover:brightness-90 transition-all cursor-pointer group bg-gradient-to-tl from-gray-900 to-gray-950 hover:from-gray-800 hover:to-gray-950 border-r-2 border-t-2 border-gray-900 rounded-lg overflow-hidden relative">
            <div class="px-8 py-10">
                <div class="mb-2"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <linearGradient id="a" x1="143.123" x2="391.223" y1="442.522" y2="12.799" gradientUnits="userSpaceOnUse">
                                <stop offset=".016" stop-color="#e65233"></stop>
                                <stop offset="1" stop-color="#f9a82d"></stop>
                            </linearGradient>
                            <path fill="url(#a)" fill-rule="evenodd"
                                d="M430.812 237.93V52.972a4.485 4.485 0 0 0-4.457-4.456H120.342v55.155a6.4 6.4 0 0 1-11.528 3.794l-18.351-21.68-18.627 22a6.382 6.382 0 0 1-11.236-4.114l-.014-55.155H33.228a4.488 4.488 0 0 0-4.457 4.456v306.213a4.488 4.488 0 0 0 4.457 4.457h278.377c-3.713-3.516-7.447-7.06-8.742-12.582-1.279-5.45.432-10.3 2.162-15.192.951-2.691 1.91-5.407 1.91-7.481s-.959-4.789-1.91-7.481c-1.73-4.9-3.441-9.74-2.163-15.191 1.3-5.53 5.043-9.078 8.761-12.6 1.983-1.878 3.955-3.746 4.714-5.293.782-1.594 1.032-4.291 1.281-6.984.466-5.027.931-10.044 4.388-14.35s8.252-5.833 13.054-7.367c2.536-.811 5.071-1.621 6.442-2.722s2.717-3.4 4.07-5.712c2.549-4.353 5.107-8.721 10.127-11.184s10.013-1.838 15.035-1.212c2.754.343 5.521.687 7.334.262 1.789-.419 4.1-1.906 6.424-3.407 4.415-2.845 8.886-5.728 14.719-5.728s10.3 2.881 14.719 5.728c2.328 1.5 4.636 2.988 6.425 3.407 1.811.425 4.58.081 7.334-.262 1.041-.131 2.084-.26 3.123-.362zM267.615 208a6.389 6.389 0 0 1 0-12.777H388.9a6.389 6.389 0 0 1 0 12.777zm0-40.184a6.388 6.388 0 0 1 0-12.776H388.9a6.388 6.388 0 1 1 0 12.776zm-85.249-18.606c2.145 1.238 4.329 2.482 6.457 3.713l-63.135 36.451-6.445-3.721zm-70.113 47.124 6.4 3.7v21.023l-6.4-3.95v-20.778zm89.315-36.053 15.58 9-63.135 36.45-15.581-9 63.136-36.452zM131.43 207.4l16.195 9.35v72.887q-31.554-18.217-63.092-36.411v-72.9l14.944 8.629v31.681a6.388 6.388 0 0 0 3.528 5.713l18.695 11.532a6.363 6.363 0 0 0 9.708-5.415l.024-25.064zm-24.907-29.1-15.644-9.032q31.564-18.226 63.134-36.438l15.633 9.026zm116.97 2.02v72.9q-31.542 18.221-63.093 36.42v-72.888l63.092-36.427zm-65.9 125.655a6.391 6.391 0 0 1-7.153 0q-37.492-21.639-74.948-43.275a6.392 6.392 0 0 1-3.735-5.813l.028-87.605a6.356 6.356 0 0 1 3.191-5.514Q112.867 141.889 150.75 120a6.37 6.37 0 0 1 6.458-.04q37.679 21.755 75.326 43.5a6.389 6.389 0 0 1 3.735 5.812l-.027 87.605a6.36 6.36 0 0 1-3.192 5.515q-37.735 21.785-75.461 43.581zm212.055 28.494a6.379 6.379 0 0 1 7.884-10.031l16.144 12.693 26.343-30.431a6.369 6.369 0 0 1 9.633 8.334L399.559 349.8a6.383 6.383 0 0 1-9 1.127l-20.916-16.448zm56.332 83.8 20.608 36.146 5.222-15.459a6.369 6.369 0 0 1 7.359-4.209l15.973 3.373-20.2-35.433c-.7 1.021-1.39 2.2-2.085 3.393-2.549 4.353-5.106 8.721-10.128 11.183s-10.011 1.839-15.033 1.213c-.574-.071-1.148-.142-1.713-.207zm33.543-32.75c-3.781 1.21-7.428 2.386-10.583 4.917s-5.11 5.866-7.065 9.206c-1.586 2.709-3.179 5.429-4.738 6.193-1.543.757-4.712.362-7.9-.035-3.854-.48-7.726-.963-11.775-.013-3.928.921-7.157 3-10.417 5.105-2.838 1.828-5.712 3.681-7.832 3.681s-4.994-1.853-7.833-3.683c-3.258-2.1-6.487-4.182-10.416-5.1-4.048-.949-7.921-.467-11.775.013-3.186.4-6.354.792-7.9.035s-3.151-3.484-4.738-6.193c-1.954-3.34-3.9-6.671-7.064-9.206s-6.805-3.708-10.585-4.917c-2.942-.94-5.887-1.882-6.966-3.225s-1.355-4.42-1.642-7.514c-.358-3.861-.716-7.729-2.529-11.425-1.8-3.671-4.572-6.3-7.359-8.936-2.336-2.212-4.691-4.442-5.117-6.262-.432-1.839.66-4.929 1.763-8.054 1.323-3.746 2.659-7.527 2.659-11.723s-1.336-7.976-2.659-11.723c-1.1-3.124-2.195-6.215-1.763-8.054.426-1.819 2.781-4.048 5.117-6.262 2.787-2.638 5.559-5.264 7.359-8.935 1.813-3.7 2.171-7.564 2.529-11.425.287-3.094.573-6.182 1.642-7.514s4.024-2.286 6.966-3.225c3.705-1.185 7.408-2.368 10.585-4.917 3.159-2.535 5.11-5.867 7.064-9.2 1.587-2.711 3.179-5.43 4.738-6.194s4.712-.363 7.9.035c3.854.48 7.727.962 11.775.012 3.929-.921 7.158-3 10.418-5.1 2.836-1.829 5.711-3.682 7.831-3.682s4.994 1.853 7.832 3.682c3.26 2.1 6.489 4.182 10.417 5.1 4.049.95 7.921.468 11.775-.012 3.186-.4 6.355-.792 7.9-.035 1.559.765 3.152 3.483 4.739 6.194 1.954 3.338 3.9 6.67 7.064 9.2 3.176 2.549 6.88 3.732 10.583 4.917 2.944.939 5.888 1.882 6.966 3.225s1.356 4.42 1.643 7.514c.358 3.861.717 7.729 2.529 11.425 1.8 3.671 4.573 6.3 7.359 8.935 2.337 2.214 4.69 4.443 5.118 6.262.432 1.839-.66 4.93-1.765 8.054-1.323 3.747-2.658 7.528-2.658 11.723s1.335 7.977 2.658 11.723c1.1 3.125 2.2 6.215 1.765 8.054-.427 1.82-2.781 4.049-5.117 6.262-2.787 2.64-5.56 5.264-7.36 8.936-1.813 3.7-2.171 7.564-2.529 11.425-.287 3.094-.574 6.182-1.643 7.514s-4.022 2.285-6.966 3.225zm6.676 11.2 26.9 47.172a6.384 6.384 0 0 1-6.71 9.649l-24.326-5.14-7.912 23.419a6.376 6.376 0 0 1-11.613 1.229l-29.126-51.081c-4.248 2.732-8.6 5.394-14.2 5.394s-9.952-2.662-14.2-5.394l-29.124 51.081a6.377 6.377 0 0 1-11.614-1.228l-7.914-23.42-24.318 5.149a6.385 6.385 0 0 1-6.711-9.649l26.895-47.172c-3.811-1.317-7.452-2.988-10.22-6.438-3.346-4.167-3.889-9-4.343-13.867H33.228A17.266 17.266 0 0 1 16 359.185V52.972A17.266 17.266 0 0 1 33.228 35.74h393.127a17.266 17.266 0 0 1 17.233 17.232v186.99c4.458 2.522 6.864 6.631 9.262 10.726 1.352 2.311 2.7 4.615 4.071 5.712s3.905 1.911 6.442 2.722c4.8 1.534 9.605 3.07 13.054 7.367s3.921 9.323 4.387 14.35c.25 2.693.5 5.39 1.281 6.984.758 1.547 2.732 3.415 4.714 5.293 3.718 3.521 7.463 7.069 8.76 12.6 1.278 5.451-.431 10.294-2.162 15.191-.95 2.692-1.91 5.408-1.91 7.481s.96 4.79 1.91 7.481c1.731 4.9 3.44 9.741 2.162 15.192-1.3 5.531-5.041 9.077-8.759 12.6-1.983 1.878-3.957 3.747-4.715 5.292-.781 1.594-1.031 4.291-1.281 6.984-.466 5.027-.931 10.044-4.387 14.35-2.769 3.45-6.41 5.12-10.222 6.438zm-122.708 5.971-20.2 35.433 15.972-3.373a6.367 6.367 0 0 1 7.359 4.209l5.224 15.459 20.608-36.146c-.566.065-1.139.136-1.713.207-5.022.626-10.016 1.248-15.035-1.213s-7.578-6.83-10.127-11.183c-.695-1.188-1.389-2.372-2.085-3.393zm55.724-136.5a62.2 62.2 0 1 1-43.978 18.217 62.005 62.005 0 0 1 43.978-18.217zm34.945 27.25a49.423 49.423 0 1 1-34.945-14.474 49.265 49.265 0 0 1 34.945 14.474zM73.471 340.818a6.388 6.388 0 1 1 0-12.776h194.144a6.388 6.388 0 0 1 0 12.776zm240.318-213.19a6.388 6.388 0 1 1 0-12.776H388.9a6.388 6.388 0 1 1 0 12.776zM107.566 48.516V86.26L95.328 71.8a6.386 6.386 0 0 0-9.8.076L73.359 86.26V48.516z"
                                opacity="1" data-original="url(#a)" class="group-hover:-translate-y-3  group-hover:shadow-xl group-hover:shadow-red-900 transition-all"></path>
                        </g>
                    </svg></div>
                <div class="uppercase font-bold text-xl">
                    KUALITAS BARANG
                </div>
                <div class="text-gray-300 uppercase tracking-widest">
                    Terjamin bagus dan berkualitas
                </div>
            </div>
            <div class="h-2 w-full bg-gradient-to-l via-yellow-500 group-hover:blur-xl blur-2xl m-auto rounded transition-all absolute bottom-0"></div>
            <div class="h-0.5 group-hover:w-full bg-gradient-to-l via-yellow-950 group-hover:via-yellow-500 w-[70%] m-auto rounded transition-all"></div>
        </div>

        <!-- card 2 -->
        <div class="card m-auto -mt-80 text-gray-300 w-[clamp(260px,85%,240px)] hover:brightness-90 transition-all cursor-pointer group bg-gradient-to-tl from-gray-900 to-gray-950 hover:from-gray-800 hover:to-gray-950 border-r-2 border-t-2 border-gray-900 rounded-lg overflow-hidden relative">
            <div class="px-8 py-10">
                <div class="mb-2"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <linearGradient id="a" x1="28.049" x2="525.956" y1="510.142" y2="12.235" data-name="New Gradient Swatch 1" gradientUnits="userSpaceOnUse">
                                <stop stop-opacity="1" stop-color="#ffa600" offset="0"></stop>
                                <stop stop-opacity="1" stop-color="#df3800" offset="1"></stop>
                                <stop stop-opacity="1" stop-color="#006df0" offset="1"></stop>
                            </linearGradient>
                            <linearGradient xlink:href="#a" id="b" x1="158.953" x2="656.86" y1="641.047" y2="143.14"></linearGradient>
                            <path fill="url(#a)" d="M448 330.07V112a8.011 8.011 0 0 0-4.42-7.16l-192-96a8.018 8.018 0 0 0-6.93-.1l-208 96A7.978 7.978 0 0 0 32 112v256a7.978 7.978 0 0 0 4.65 7.26l208 96a8 8 0 0 0 6.93-.1l51.92-25.97A95.99 95.99 0 1 0 448 330.07zM331.38 66.63l-171.04 92.1-43.82-20.22L292.31 47.1zM152 172.5v127.37l-40-17.15V154.04zm95.86-147.62 26.77 13.38-174.32 90.64a8.133 8.133 0 0 0-1.81 1.29L59.09 112zM240 451.5 48 362.88V124.5l48 22.16V288a8 8 0 0 0 4.85 7.35l56 24a7.866 7.866 0 0 0 3.15.65 8 8 0 0 0 8-8V179.89l72 33.23zm7.86-252.38-69.35-32 170.37-91.74L422.11 112zm50.64 230.69L256 451.06V212.94l176-88v195.8a96.021 96.021 0 0 0-133.5 109.07zM392 488a80 80 0 1 1 80-80 80.093 80.093 0 0 1-80 80z" opacity="1" data-original="url(#a)" class="group-hover:-translate-y-3  group-hover:shadow-xl group-hover:shadow-red-900 transition-all"></path>
                            <path fill="url(#b)" d="M426.343 386.343 384 428.687l-18.343-18.344a8 8 0 0 0-11.314 11.314l24 24a8 8 0 0 0 11.314 0l48-48a8 8 0 0 0-11.314-11.314z" opacity="1" data-original="url(#b)" class="group-hover:-translate-y-3  group-hover:shadow-xl group-hover:shadow-red-900 transition-all"></path>
                        </g>
                    </svg></div>
                <div class="uppercase font-bold text-xl">
                    KEMASAN
                </div>
                <div class="text-gray-300 uppercase tracking-widest">
                    Di kemas dengan baik
                </div>
            </div>
            <div class="h-2 w-full bg-gradient-to-l via-yellow-500 group-hover:blur-xl blur-2xl m-auto rounded transition-all absolute bottom-0"></div>
            <div class="h-0.5 group-hover:w-full bg-gradient-to-l via-yellow-950 group-hover:via-yellow-500 w-[70%] m-auto rounded transition-all"></div>
        </div>

        <!-- Card 3 -->
        <div class="card m-auto -mt-80 text-gray-300 w-[clamp(260px,85%,240px)] hover:brightness-90 transition-all cursor-pointer group bg-gradient-to-tl from-gray-900 to-gray-950 hover:from-gray-800 hover:to-gray-950 border-r-2 border-t-2 border-gray-900 rounded-lg overflow-hidden relative">
            <div class="px-8 py-10">
                <div class="mb-2"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <linearGradient id="a" x1="154.546" x2="422.002" y1="515.136" y2="51.888" gradientUnits="userSpaceOnUse">
                                <stop stop-opacity="1" stop-color="#e75300" offset="0.044"></stop>
                                <stop stop-opacity="1" stop-color="#e99800" offset="0.7455012364914122"></stop>
                            </linearGradient>
                            <path fill="url(#a)"
                                d="M50.744 334.722a8.042 8.042 0 0 0 6.637 3.499h81.804a8.038 8.038 0 0 0 8.039-8.036v-55.016c0-4.438-3.601-8.035-8.039-8.035h-60.37a8.036 8.036 0 0 0-7.49 5.12l-21.433 55.015a8.04 8.04 0 0 0 .852 7.453zm33.565-51.517h46.838v38.945H69.138zm421.693-103.416c0-75.868-61.725-137.588-137.593-137.588-74.957 0-136.075 60.151-137.641 134.674h-59.074a8.038 8.038 0 0 0-8.039 8.036v49.595H54.76a8.042 8.042 0 0 0-7.531 5.229l-35.124 94.068a8.01 8.01 0 0 0-.51 2.813v42.481l-4.718 9.234a8.035 8.035 0 0 0-.879 3.655v32.746c0 4.438 3.6 8.034 8.037 8.034h35.026c3.55 20.983 21.761 37.032 43.685 37.032 21.983 0 40.243-16.049 43.801-37.032h199.372c3.558 20.983 21.82 37.032 43.803 37.032s40.244-16.049 43.802-37.032h40.384c4.438 0 8.039-3.597 8.039-8.034V270.336c21.179-24.228 34.055-55.9 34.055-90.547zM92.746 453.727c-15.596 0-28.28-12.742-28.28-28.4s12.685-28.399 28.28-28.399c15.659 0 28.399 12.741 28.399 28.399s-12.74 28.4-28.399 28.4zm70.909-37.032h-27.289c-4.031-20.404-22.049-35.84-43.62-35.84-21.513 0-39.484 15.436-43.505 35.84H22.074v-22.777l2.487-4.873c.066.004.127.021.191.021h22.386a8.04 8.04 0 0 0 8.039-8.039c0-4.436-3.6-8.035-8.039-8.035H27.672v-34.925l32.667-87.487h103.316zM360.371 58.566v4.648c0 4.438 3.6 8.039 8.038 8.039s8.04-3.602 8.04-8.039v-4.648c60.607 3.984 109.199 52.58 113.181 113.187h-4.526a8.037 8.037 0 1 0 0 16.073h4.526c-3.975 60.671-52.571 109.318-113.181 113.305v-4.646c0-4.438-3.602-8.036-8.04-8.036s-8.038 3.599-8.038 8.036v4.646c-60.675-3.98-109.324-52.632-113.303-113.305h4.645a8.037 8.037 0 1 0 0-16.073h-4.645c3.985-60.61 52.631-109.208 113.303-113.187zm19.351 395.161c-15.661 0-28.4-12.742-28.4-28.4s12.739-28.399 28.4-28.399c15.659 0 28.397 12.741 28.397 28.399s-12.738 28.4-28.397 28.4zm43.619-37.032c-4.033-20.404-22.05-35.84-43.619-35.84-21.57 0-39.589 15.436-43.622 35.84H179.731V192.946h51.606c6.646 69.784 65.574 124.556 137.071 124.556 33.188 0 63.668-11.82 87.458-31.479v130.673h-32.525zM308.633 187.826h32.673c3.475 11.688 14.303 20.242 27.104 20.242 15.531 0 28.162-12.685 28.162-28.279 0-12.735-8.502-23.508-20.122-26.975V94.293c0-4.437-3.602-8.034-8.04-8.034s-8.038 3.598-8.038 8.034v58.509c-9.127 2.704-16.333 9.865-19.059 18.951h-32.68a8.036 8.036 0 1 0 0 16.073zm59.776-20.125c6.664 0 12.085 5.425 12.085 12.088 0 6.729-5.421 12.207-12.085 12.207-6.73 0-12.206-5.479-12.206-12.207 0-6.663 5.476-12.088 12.206-12.088z"
                                opacity="1" data-original="url(#a)" class="group-hover:-translate-y-3  group-hover:shadow-xl group-hover:shadow-red-900 transition-all"></path>
                        </g>
                    </svg></div>
                <div class="uppercase font-bold text-xl">
                    PENGIRIMAN
                </div>
                <div class="text-gray-300 uppercase tracking-widest">
                    Terjamin tepat waktu
                </div>
            </div>
            <div class="h-2 w-full bg-gradient-to-l via-yellow-500 group-hover:blur-xl blur-2xl m-auto rounded transition-all absolute bottom-0"></div>
            <div class="h-0.5 group-hover:w-full bg-gradient-to-l via-yellow-950 group-hover:via-yellow-500 w-[70%] m-auto rounded transition-all"></div>
        </div>

        <!-- card 4 -->
        <div class="card m-auto mr-12 -mt-80 text-gray-300 w-[clamp(260px,85%,240px)] hover:brightness-90 transition-all cursor-pointer group bg-gradient-to-tl from-gray-900 to-gray-950 hover:from-gray-800 hover:to-gray-950 border-r-2 border-t-2 border-gray-900 rounded-lg overflow-hidden relative">
            <div class="px-8 py-10">
                <div class="mb-2"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <linearGradient id="a" x1="256" x2="256" y1="507" y2="5" gradientUnits="userSpaceOnUse">
                                <stop stop-opacity="1" stop-color="#fe6400" offset="0"></stop>
                                <stop stop-opacity="1" stop-color="#ffb617" offset="1"></stop>
                            </linearGradient>
                            <path fill="url(#a)"
                                d="M453.244 71.098 257.916 5.314a5.992 5.992 0 0 0-3.83 0L58.756 71.098C47.268 74.968 39.844 85.3 39.844 97.422v179.982c0 45.211 17.534 84.569 53.604 120.324 31.361 31.087 72.41 55.593 112.108 79.291 16.565 9.889 32.213 19.229 47.161 29.003a6.003 6.003 0 0 0 6.566 0c14.948-9.772 30.595-19.113 47.16-29.003 39.698-23.698 80.747-48.203 112.108-79.291 36.069-35.754 53.604-75.113 53.604-120.324V97.422c0-12.122-7.424-22.455-18.912-26.324zm6.912 206.306c0 93.878-81.27 142.394-159.862 189.312-14.796 8.833-30.06 17.944-44.293 27.13-14.234-9.186-29.497-18.297-44.294-27.13-78.593-46.918-159.862-95.434-159.862-189.312V97.422c0-6.885 4.217-12.754 10.742-14.952L256 17.331 449.413 82.47c6.525 2.198 10.742 8.067 10.742 14.952v179.982zm-23.78-178.543-178.46-60.104a5.992 5.992 0 0 0-3.83 0L75.625 98.861a6 6 0 0 0-4.085 5.686v172.857c0 23.455 5.714 44.479 17.468 64.27 27.145 45.706 86.215 80.763 138.332 111.693 8.917 5.292 17.34 10.291 25.453 15.252a6.002 6.002 0 0 0 6.291-.019c10.354-6.416 21.015-12.776 31.324-18.928 8.597-5.128 17.485-10.431 26.177-15.755 29.03-17.782 59.347-37.209 82.939-61.903 27.546-28.831 40.937-59.778 40.937-94.609V104.547a6 6 0 0 0-4.085-5.686zm-7.915 178.543c0 68.259-55.885 108.144-118.144 146.28-8.632 5.287-17.49 10.571-26.057 15.683-9.318 5.559-18.921 11.287-28.359 17.095-7.199-4.371-14.629-8.78-22.438-13.414-50.883-30.198-108.556-64.426-134.138-107.501-10.623-17.886-15.786-36.904-15.786-58.143V108.858L256 50.775l172.46 58.083v168.546zM225.802 94.862c-5.44 7.661-14.221 11.298-23.485 9.728-13.364-2.265-24.143.927-32.96 9.746-8.823 8.823-12.011 19.604-9.746 32.961 1.57 9.264-2.066 18.043-9.729 23.484-11.046 7.846-16.416 17.724-16.416 30.198s5.37 22.352 16.416 30.199c7.661 5.441 11.298 14.22 9.728 23.485-2.261 13.36.927 24.141 9.747 32.959 3.285 3.285 6.843 5.787 10.704 7.519l-32.893 69.686a6 6 0 0 0 7.215 8.288l35.057-10.958 17.082 32.515a6.001 6.001 0 0 0 10.963-.773l25.911-72.543c3.878 1.436 8.068 2.156 12.606 2.156 4.646 0 8.931-.747 12.886-2.253l26.016 72.534a5.998 5.998 0 0 0 10.962.758l17.039-32.536 35.07 10.912a6 6 0 0 0 7.205-8.298l-32.974-69.617c3.758-1.727 7.23-4.18 10.438-7.389 8.823-8.822 12.011-19.604 9.746-32.96-1.57-9.265 2.066-18.043 9.728-23.484 11.046-7.846 16.416-17.724 16.416-30.199s-5.37-22.353-16.417-30.198c-7.66-5.441-11.297-14.22-9.727-23.485 2.261-13.36-.927-24.141-9.746-32.96-8.823-8.822-19.605-12.011-32.96-9.745-9.265 1.568-18.044-2.067-23.485-9.728-7.846-11.046-17.724-16.416-30.198-16.416s-22.354 5.37-30.198 16.416zm-15.019 282.121-13.048-24.836a6 6 0 0 0-7.102-2.936l-26.777 8.37 28.129-59.593c3.264.194 6.699-.004 10.331-.62 9.264-1.571 18.044 2.066 23.485 9.729 2.202 3.1 4.57 5.736 7.104 7.949l-22.123 61.937zm137.696-19.578-26.787-8.335a6 6 0 0 0-7.098 2.946l-13.015 24.853-22.249-62.03c2.445-2.17 4.734-4.739 6.867-7.742 5.44-7.661 14.216-11.3 23.486-9.728 3.748.634 7.285.824 10.641.596l28.154 59.439zm-72.064-255.594c8.172 11.506 21.36 16.968 35.273 14.61 9.632-1.632 16.352.281 22.47 6.399s8.03 12.837 6.399 22.471c-2.357 13.915 3.104 27.101 14.61 35.272 7.967 5.658 11.365 11.763 11.365 20.415s-3.398 14.757-11.365 20.416c-11.506 8.171-16.968 21.357-14.609 35.273 1.633 9.632-.281 16.352-6.4 22.471-6.115 6.116-12.832 8.034-22.471 6.399-13.916-2.354-27.101 3.105-35.272 14.61-5.659 7.966-11.765 11.365-20.415 11.365s-14.757-3.398-20.415-11.365c-6.919-9.741-17.43-15.15-28.936-15.15-2.085 0-4.204.178-6.338.54-9.627 1.633-16.351-.281-22.471-6.4-6.116-6.115-8.03-12.836-6.399-22.47 2.357-13.915-3.104-27.101-14.61-35.272-7.966-5.659-11.365-11.765-11.365-20.416s3.398-14.757 11.364-20.415c11.507-8.172 16.97-21.358 14.611-35.273-1.633-9.631.281-16.352 6.4-22.47 6.116-6.117 12.836-8.029 22.471-6.4 13.915 2.36 27.102-3.105 35.272-14.61 5.657-7.966 11.763-11.365 20.415-11.365s14.757 3.399 20.415 11.365zm-82.523 99.168c0 34.246 27.861 62.107 62.107 62.107s62.108-27.861 62.108-62.107-27.861-62.108-62.108-62.108-62.107 27.861-62.107 62.108zm112.216 0c0 27.629-22.479 50.107-50.108 50.107s-50.107-22.478-50.107-50.107 22.479-50.108 50.107-50.108 50.108 22.479 50.108 50.108zm-60.183 8.202 30.42-30.419a6 6 0 0 1 8.484 8.485l-35.948 35.948a6 6 0 0 1-9.438-1.243l-13.227-22.909a6 6 0 0 1 10.392-6l9.316 16.138z"
                                opacity="1" data-original="url(#a)" class="group-hover:-translate-y-3  group-hover:shadow-xl group-hover:shadow-red-900 transition-all"></path>
                        </g>
                    </svg></div>
                <div class="uppercase font-bold text-xl">
                    ORIGINAL
                </div>
                <div class="text-gray-300 uppercase tracking-widest">
                    Barang terjamin original
                </div>
            </div>
            <div class="h-2 w-full bg-gradient-to-l via-yellow-500 group-hover:blur-xl blur-2xl m-auto rounded transition-all absolute bottom-0"></div>
            <div class="h-0.5 group-hover:w-full bg-gradient-to-l via-yellow-950 group-hover:via-yellow-500 w-[70%] m-auto rounded transition-all"></div>
        </div>
    </div>

    <h1 class="text-center font-semibold">PRODUK LAINNYA</h1>
    <!--baris1 -->
    <div class="animate-target flex gap-12 justify-center mt-16 opacity-0 translate-y-10 transition-all duration-700">
        <div class="w-60 h-auto bg-neutral-800 rounded-3xl text-neutral-300 p-4 flex flex-col items-start justify-center gap-3 hover:bg-gray-900 hover:shadow-2xl hover:shadow-sky-400 transition-shadow">

            <div class="w-52 h-40 bg-white rounded-2xl"><img src="images/s2.png" alt="" class="-mt-8"></div>
            <div>
                <p class="font-extrabold">Sepatu NIKE</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <p class="mt-4">300.000 IDR</p>
            </div>
            <div class="flex gap-2">
                <button class="bg-sky-700 font-extrabold w-32 p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors">Lihat</button>
                <button class="bg-orange-500 font-extrabold p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="23" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M22.713 4.077A2.993 2.993 0 0 0 20.41 3H4.242L4.2 2.649A3 3 0 0 0 1.222 0H1a1 1 0 0 0 0 2h.222a1 1 0 0 1 .993.883l1.376 11.7A5 5 0 0 0 8.557 19H19a1 1 0 0 0 0-2H8.557a3 3 0 0 1-2.82-2h11.92a5 5 0 0 0 4.921-4.113l.785-4.354a2.994 2.994 0 0 0-.65-2.456ZM21.4 6.178l-.786 4.354A3 3 0 0 1 17.657 13H5.419l-.941-8H20.41a1 1 0 0 1 .99 1.178Z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                            <circle cx="7" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                            <circle cx="17" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                        </g>
                    </svg></button>
            </div>
        </div>

        <div class="w-60 h-auto bg-neutral-800 rounded-3xl text-neutral-300 p-4 flex flex-col items-start justify-center gap-3 hover:bg-gray-900 hover:shadow-2xl hover:shadow-sky-400 transition-shadow">
            <div class="w-52 h-40 bg-white rounded-2xl"><img src="images/s2.png" alt="" class="-mt-8"></div>
            <div>
                <p class="font-extrabold">Sepatu NIKE</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <p class="mt-4">300.000 IDR</p>
            </div>
            <div class="flex gap-2">
                <button class="bg-sky-700 font-extrabold w-32 p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors">Lihat</button>
                <button class="bg-orange-500 font-extrabold p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="23" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M22.713 4.077A2.993 2.993 0 0 0 20.41 3H4.242L4.2 2.649A3 3 0 0 0 1.222 0H1a1 1 0 0 0 0 2h.222a1 1 0 0 1 .993.883l1.376 11.7A5 5 0 0 0 8.557 19H19a1 1 0 0 0 0-2H8.557a3 3 0 0 1-2.82-2h11.92a5 5 0 0 0 4.921-4.113l.785-4.354a2.994 2.994 0 0 0-.65-2.456ZM21.4 6.178l-.786 4.354A3 3 0 0 1 17.657 13H5.419l-.941-8H20.41a1 1 0 0 1 .99 1.178Z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                            <circle cx="7" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                            <circle cx="17" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                        </g>
                    </svg></button>
            </div>
        </div>

        <div class="w-60 h-auto bg-neutral-800 rounded-3xl text-neutral-300 p-4 flex flex-col items-start justify-center gap-3 hover:bg-gray-900 hover:shadow-2xl hover:shadow-sky-400 transition-shadow">
            <div class="w-52 h-40 bg-white rounded-2xl"><img src="images/s2.png" alt="" class="-mt-8"></div>
            <div>
                <p class="font-extrabold">Sepatu NIKE</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <p class="mt-4">300.000 IDR</p>
            </div>
            <div class="flex gap-2">
                <button class="bg-sky-700 font-extrabold w-32 p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors">Lihat</button>
                <button class="bg-orange-500 font-extrabold p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="23" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M22.713 4.077A2.993 2.993 0 0 0 20.41 3H4.242L4.2 2.649A3 3 0 0 0 1.222 0H1a1 1 0 0 0 0 2h.222a1 1 0 0 1 .993.883l1.376 11.7A5 5 0 0 0 8.557 19H19a1 1 0 0 0 0-2H8.557a3 3 0 0 1-2.82-2h11.92a5 5 0 0 0 4.921-4.113l.785-4.354a2.994 2.994 0 0 0-.65-2.456ZM21.4 6.178l-.786 4.354A3 3 0 0 1 17.657 13H5.419l-.941-8H20.41a1 1 0 0 1 .99 1.178Z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                            <circle cx="7" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                            <circle cx="17" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                        </g>
                    </svg></button>
            </div>
        </div>

        <div class="w-60 h-auto bg-neutral-800 rounded-3xl text-neutral-300 p-4 flex flex-col items-start justify-center gap-3 hover:bg-gray-900 hover:shadow-2xl hover:shadow-sky-400 transition-shadow">
            <div class="w-52 h-40 bg-white rounded-2xl"><img src="images/s2.png" alt="" class="-mt-8"></div>
            <div>
                <p class="font-extrabold">Sepatu NIKE</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <p class="mt-4">300.000 IDR</p>
            </div>
            <div class="flex gap-2">
                <button class="bg-sky-700 font-extrabold w-32 p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors">Lihat</button>
                <button class="bg-orange-500 font-extrabold p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="23" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M22.713 4.077A2.993 2.993 0 0 0 20.41 3H4.242L4.2 2.649A3 3 0 0 0 1.222 0H1a1 1 0 0 0 0 2h.222a1 1 0 0 1 .993.883l1.376 11.7A5 5 0 0 0 8.557 19H19a1 1 0 0 0 0-2H8.557a3 3 0 0 1-2.82-2h11.92a5 5 0 0 0 4.921-4.113l.785-4.354a2.994 2.994 0 0 0-.65-2.456ZM21.4 6.178l-.786 4.354A3 3 0 0 1 17.657 13H5.419l-.941-8H20.41a1 1 0 0 1 .99 1.178Z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                            <circle cx="7" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                            <circle cx="17" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                        </g>
                    </svg></button>
            </div>
        </div>
    </div>

    <!-- baris2 -->
    <div class="animate-target flex gap-12 justify-center mt-7 opacity-0 translate-y-10 transition-all duration-700">
        <div class="w-60 h-auto bg-neutral-800 rounded-3xl text-neutral-300 p-4 flex flex-col items-start justify-center gap-3 hover:bg-gray-900 hover:shadow-2xl hover:shadow-sky-400 transition-shadow">
            <div class="w-52 h-40 bg-white rounded-2xl"><img src="images/s2.png" alt="" class="-mt-8"></div>
            <div>
                <p class="font-extrabold">Sepatu NIKE</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <p class="mt-4">300.000 IDR</p>
            </div>
            <div class="flex gap-2">
                <button class="bg-sky-700 font-extrabold w-32 p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors">Lihat</button>
                <button class="bg-orange-500 font-extrabold p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="23" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M22.713 4.077A2.993 2.993 0 0 0 20.41 3H4.242L4.2 2.649A3 3 0 0 0 1.222 0H1a1 1 0 0 0 0 2h.222a1 1 0 0 1 .993.883l1.376 11.7A5 5 0 0 0 8.557 19H19a1 1 0 0 0 0-2H8.557a3 3 0 0 1-2.82-2h11.92a5 5 0 0 0 4.921-4.113l.785-4.354a2.994 2.994 0 0 0-.65-2.456ZM21.4 6.178l-.786 4.354A3 3 0 0 1 17.657 13H5.419l-.941-8H20.41a1 1 0 0 1 .99 1.178Z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                            <circle cx="7" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                            <circle cx="17" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                        </g>
                    </svg></button>
            </div>
        </div>

        <div class="w-60 h-auto bg-neutral-800 rounded-3xl text-neutral-300 p-4 flex flex-col items-start justify-center gap-3 hover:bg-gray-900 hover:shadow-2xl hover:shadow-sky-400 transition-shadow">
            <div class="w-52 h-40 bg-white rounded-2xl"><img src="images/s2.png" alt="" class="-mt-8"></div>
            <div>
                <p class="font-extrabold">Sepatu NIKE</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <p class="mt-4">300.000 IDR</p>
            </div>
            <div class="flex gap-2">
                <button class="bg-sky-700 font-extrabold w-32 p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors">Lihat</button>
                <button class="bg-orange-500 font-extrabold p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="23" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M22.713 4.077A2.993 2.993 0 0 0 20.41 3H4.242L4.2 2.649A3 3 0 0 0 1.222 0H1a1 1 0 0 0 0 2h.222a1 1 0 0 1 .993.883l1.376 11.7A5 5 0 0 0 8.557 19H19a1 1 0 0 0 0-2H8.557a3 3 0 0 1-2.82-2h11.92a5 5 0 0 0 4.921-4.113l.785-4.354a2.994 2.994 0 0 0-.65-2.456ZM21.4 6.178l-.786 4.354A3 3 0 0 1 17.657 13H5.419l-.941-8H20.41a1 1 0 0 1 .99 1.178Z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                            <circle cx="7" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                            <circle cx="17" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                        </g>
                    </svg></button>
            </div>
        </div>

        <div class="w-60 h-auto bg-neutral-800 rounded-3xl text-neutral-300 p-4 flex flex-col items-start justify-center gap-3 hover:bg-gray-900 hover:shadow-2xl hover:shadow-sky-400 transition-shadow">
            <div class="w-52 h-40 bg-white rounded-2xl"><img src="images/s2.png" alt="" class="-mt-8"></div>
            <div>
                <p class="font-extrabold">Sepatu NIKE</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <p class="mt-4">300.000 IDR</p>
            </div>
            <div class="flex gap-2">
                <button class="bg-sky-700 font-extrabold w-32 p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors">Lihat</button>
                <button class="bg-orange-500 font-extrabold p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="23" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M22.713 4.077A2.993 2.993 0 0 0 20.41 3H4.242L4.2 2.649A3 3 0 0 0 1.222 0H1a1 1 0 0 0 0 2h.222a1 1 0 0 1 .993.883l1.376 11.7A5 5 0 0 0 8.557 19H19a1 1 0 0 0 0-2H8.557a3 3 0 0 1-2.82-2h11.92a5 5 0 0 0 4.921-4.113l.785-4.354a2.994 2.994 0 0 0-.65-2.456ZM21.4 6.178l-.786 4.354A3 3 0 0 1 17.657 13H5.419l-.941-8H20.41a1 1 0 0 1 .99 1.178Z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                            <circle cx="7" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                            <circle cx="17" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                        </g>
                    </svg></button>
            </div>
        </div>

        <div class="w-60 h-auto bg-neutral-800 rounded-3xl text-neutral-300 p-4 flex flex-col items-start justify-center gap-3 hover:bg-gray-900 hover:shadow-2xl hover:shadow-sky-400 transition-shadow">
            <div class="w-52 h-40 bg-white rounded-2xl"><img src="images/s2.png" alt="" class="-mt-8"></div>
            <div>
                <p class="font-extrabold">Sepatu NIKE</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <p class="mt-4">300.000 IDR</p>
            </div>
            <div class="flex gap-2">
                <button class="bg-sky-700 font-extrabold w-32 p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors">Lihat</button>
                <button class="bg-orange-500 font-extrabold p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="23" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M22.713 4.077A2.993 2.993 0 0 0 20.41 3H4.242L4.2 2.649A3 3 0 0 0 1.222 0H1a1 1 0 0 0 0 2h.222a1 1 0 0 1 .993.883l1.376 11.7A5 5 0 0 0 8.557 19H19a1 1 0 0 0 0-2H8.557a3 3 0 0 1-2.82-2h11.92a5 5 0 0 0 4.921-4.113l.785-4.354a2.994 2.994 0 0 0-.65-2.456ZM21.4 6.178l-.786 4.354A3 3 0 0 1 17.657 13H5.419l-.941-8H20.41a1 1 0 0 1 .99 1.178Z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                            <circle cx="7" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                            <circle cx="17" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                        </g>
                    </svg></button>
            </div>
        </div>
    </div>

    <!-- baris3 -->
    <div class="animate-target flex gap-12 justify-center mt-7 opacity-0 translate-y-10 transition-all duration-700">
        <div class="w-60 h-auto bg-neutral-800 rounded-3xl text-neutral-300 p-4 flex flex-col items-start justify-center gap-3 hover:bg-gray-900 hover:shadow-2xl hover:shadow-sky-400 transition-shadow">
            <div class="w-52 h-40 bg-white rounded-2xl"><img src="images/s2.png" alt="" class="-mt-8"></div>
            <div>
                <p class="font-extrabold">Sepatu NIKE</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <p class="mt-4">300.000 IDR</p>
            </div>
            <div class="flex gap-2">
                <button class="bg-sky-700 font-extrabold w-32 p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors">Lihat</button>
                <button class="bg-orange-500 font-extrabold p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="23" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M22.713 4.077A2.993 2.993 0 0 0 20.41 3H4.242L4.2 2.649A3 3 0 0 0 1.222 0H1a1 1 0 0 0 0 2h.222a1 1 0 0 1 .993.883l1.376 11.7A5 5 0 0 0 8.557 19H19a1 1 0 0 0 0-2H8.557a3 3 0 0 1-2.82-2h11.92a5 5 0 0 0 4.921-4.113l.785-4.354a2.994 2.994 0 0 0-.65-2.456ZM21.4 6.178l-.786 4.354A3 3 0 0 1 17.657 13H5.419l-.941-8H20.41a1 1 0 0 1 .99 1.178Z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                            <circle cx="7" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                            <circle cx="17" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                        </g>
                    </svg></button>
            </div>
        </div>

        <div class="w-60 h-auto bg-neutral-800 rounded-3xl text-neutral-300 p-4 flex flex-col items-start justify-center gap-3 hover:bg-gray-900 hover:shadow-2xl hover:shadow-sky-400 transition-shadow">
            <div class="w-52 h-40 bg-white rounded-2xl"><img src="images/s2.png" alt="" class="-mt-8"></div>
            <div>
                <p class="font-extrabold">Sepatu NIKE</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <p class="mt-4">300.000 IDR</p>
            </div>
            <div class="flex gap-2">
                <button class="bg-sky-700 font-extrabold w-32 p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors">Lihat</button>
                <button class="bg-orange-500 font-extrabold p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="23" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M22.713 4.077A2.993 2.993 0 0 0 20.41 3H4.242L4.2 2.649A3 3 0 0 0 1.222 0H1a1 1 0 0 0 0 2h.222a1 1 0 0 1 .993.883l1.376 11.7A5 5 0 0 0 8.557 19H19a1 1 0 0 0 0-2H8.557a3 3 0 0 1-2.82-2h11.92a5 5 0 0 0 4.921-4.113l.785-4.354a2.994 2.994 0 0 0-.65-2.456ZM21.4 6.178l-.786 4.354A3 3 0 0 1 17.657 13H5.419l-.941-8H20.41a1 1 0 0 1 .99 1.178Z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                            <circle cx="7" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                            <circle cx="17" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                        </g>
                    </svg></button>
            </div>
        </div>

        <div class="w-60 h-auto bg-neutral-800 rounded-3xl text-neutral-300 p-4 flex flex-col items-start justify-center gap-3 hover:bg-gray-900 hover:shadow-2xl hover:shadow-sky-400 transition-shadow">
            <div class="w-52 h-40 bg-white rounded-2xl"><img src="images/s2.png" alt="" class="-mt-8"></div>
            <div>
                <p class="font-extrabold">Sepatu NIKE</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <p class="mt-4">300.000 IDR</p>
            </div>
            <div class="flex gap-2">
                <button class="bg-sky-700 font-extrabold w-32 p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors">Lihat</button>
                <button class="bg-orange-500 font-extrabold p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="23" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M22.713 4.077A2.993 2.993 0 0 0 20.41 3H4.242L4.2 2.649A3 3 0 0 0 1.222 0H1a1 1 0 0 0 0 2h.222a1 1 0 0 1 .993.883l1.376 11.7A5 5 0 0 0 8.557 19H19a1 1 0 0 0 0-2H8.557a3 3 0 0 1-2.82-2h11.92a5 5 0 0 0 4.921-4.113l.785-4.354a2.994 2.994 0 0 0-.65-2.456ZM21.4 6.178l-.786 4.354A3 3 0 0 1 17.657 13H5.419l-.941-8H20.41a1 1 0 0 1 .99 1.178Z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                            <circle cx="7" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                            <circle cx="17" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                        </g>
                    </svg></button>
            </div>
        </div>

        <div class="w-60 h-auto bg-neutral-800 rounded-3xl text-neutral-300 p-4 flex flex-col items-start justify-center gap-3 hover:bg-gray-900 hover:shadow-2xl hover:shadow-sky-400 transition-shadow">
            <div class="w-52 h-40 bg-white rounded-2xl"><img src="images/s2.png" alt="" class="-mt-8"></div>
            <div>
                <p class="font-extrabold">Sepatu NIKE</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <p class="mt-4">300.000 IDR</p>
            </div>
            <div class="flex gap-2">
                <button class="bg-sky-700 font-extrabold w-32 p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors">Lihat</button>
                <button class="bg-orange-500 font-extrabold p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="23" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M22.713 4.077A2.993 2.993 0 0 0 20.41 3H4.242L4.2 2.649A3 3 0 0 0 1.222 0H1a1 1 0 0 0 0 2h.222a1 1 0 0 1 .993.883l1.376 11.7A5 5 0 0 0 8.557 19H19a1 1 0 0 0 0-2H8.557a3 3 0 0 1-2.82-2h11.92a5 5 0 0 0 4.921-4.113l.785-4.354a2.994 2.994 0 0 0-.65-2.456ZM21.4 6.178l-.786 4.354A3 3 0 0 1 17.657 13H5.419l-.941-8H20.41a1 1 0 0 1 .99 1.178Z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                            <circle cx="7" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                            <circle cx="17" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                        </g>
                    </svg></button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const items = document.querySelectorAll('.animate-target'); // Pilih elemen target

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-positionitem2'); // Tambahkan kelas animasi
                        entry.target.classList.remove('opacity-0', 'translate-y-10'); // Tampilkan elemen
                        observer.unobserve(entry.target); // Berhenti mengamati setelah animasi
                    }
                });
            }, {
                threshold: 0.1 // Mulai animasi saat 10% elemen terlihat
            });

            items.forEach(item => {
                observer.observe(item);
            });
        });
    </script>

    <div class="bg-gray-950 w-auto h-72 mt-20">
        <div class="flex ml-8 items-center pt-3">
            <img src="images/logos.png" alt="Logo" class="h-12 w-auto px-1.5">
            <p class="text-lg font-semibold text-white">ShoeCycle</p>
        </div>
        <div class="ml-12">
            <h1 class="mt-4 text-white font-bold">Layanan pengaduan konsumen ShoeCycle</h1>
            <h6 class="mt-2 text-white text-sm"><a href="">E-mail : shoecycle@gmail.com</a></h6>
            <p class="text-white text-sm"><a href="">WhatsApp : +62 857 0463 7649</a></p>
            <p class="mt-9 text-white font-bold">Temukan kami</p>
            <div class="flex mt-2 gap-3">
                <!-- ig   -->
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" x="0" y="0" viewBox="0 0 409.61 409.61" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M307.205 0h-204.8C46.09 0 .005 46.085.005 102.4v204.81c0 56.3 46.085 102.4 102.4 102.4h204.8c56.315 0 102.4-46.1 102.4-102.4V102.4c0-56.315-46.085-102.4-102.4-102.4zm68.265 307.21c0 37.632-30.612 68.265-68.265 68.265h-204.8c-37.637 0-68.265-30.633-68.265-68.265V102.4c0-37.642 30.628-68.265 68.265-68.265h204.8c37.653 0 68.265 30.623 68.265 68.265v204.81z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                            <circle cx="315.755" cy="93.865" r="25.6" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                            <path d="M204.805 102.4c-56.566 0-102.4 45.839-102.4 102.4 0 56.54 45.834 102.41 102.4 102.41 56.55 0 102.4-45.87 102.4-102.41 0-56.561-45.85-102.4-102.4-102.4zm0 170.675c-37.699 0-68.265-30.566-68.265-68.275s30.566-68.265 68.265-68.265 68.265 30.556 68.265 68.265-30.566 68.275-68.265 68.275z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                </a>
                <!-- fb  -->
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M437 0H75C33.648 0 0 33.648 0 75v362c0 41.352 33.648 75 75 75h151V331h-60v-90h60v-61c0-49.629 40.371-90 90-90h91v90h-91v61h91l-15 90h-76v181h121c41.352 0 75-33.648 75-75V75c0-41.352-33.648-75-75-75zm0 0" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                </a>
                <!-- twitter -->
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
        <div class="">
            <h1 class="ml-[500px] -mt-[165px] text-white font-bold">Lokasi toko kami</h1>
            <h1 class="ml-[500px] mt-2 text-white font-sm">Jl.Jendral Ahmad Yani No.17 Kedunglengkong,<br> Jabaran, Pohkecik, Kec. Dlanggu, Kab. Mojokerto,<br> Jawa Timur</h1>

            <!-- peta -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.2148314625483!2d112.47754897431861!3d-7.551537774559029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78731ce537479f%3A0x350a36480b9ea39f!2sSMKN%201%20Dlanggu%20Mojokerto!5e0!3m2!1sen!2sid!4v1730822317351!5m2!1sen!2sid" width="230" height="170" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="ml-[980px] -mt-[100px]"></iframe>
        </div>
    </div>

</body>

</html>
