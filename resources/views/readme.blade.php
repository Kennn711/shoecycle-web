<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="images/logos.png">
    <title>ShoeCycle</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body class="">
    <div class="flex bg-gray-950 w-auto h-14">
        <img src="images/logos.png" alt="Logo" class="h-12 w-auto px-1.5">
        <p class="text-lg font-semibold text-white mt-3">ShoeCycle</p>
    </div>
    <div class="flex mt-2 ml-2">
        <a href="" class="text-gray-600 text-xs mr-1">Beranda</a>
        <p class="text-black text-xs font-medium mr-1">/ OxFord Jazz 2,0 Hitam</p>
    </div>

    <!-- bagian kiri -->
    <div class="ml-4 mt-5">
        <div onclick="changeImage('images/s1.png')" class="border w-20 h-20 cursor-pointer hover:border-black transition-all duration-300">
            <img src="images/s1.png" alt="">
        </div>
        <div onclick="changeImage('images/s1.png')" class="border w-20 h-20 cursor-pointer hover:border-black transition-all duration-300">
            <img src="images/s1.png" alt="">
        </div>
        <div onclick="changeImage('images/s1.png')" class="border w-20 h-20 cursor-pointer hover:border-black transition-all duration-300">
            <img src="images/s1.png" alt="">
        </div>
        <div onclick="changeImage('images/s1.png')" class="border w-20 h-20 cursor-pointer hover:border-black transition-all duration-300">
            <img src="images/s1.png" alt="">
        </div>
        <div onclick="changeImage('images/s1.png')" class="border w-20 h-20 cursor-pointer hover:border-black transition-all duration-300">
            <img src="images/s1.png" alt="">
        </div>
        <div onclick="changeImage('images/s1.png')" class="border w-20 h-20 cursor-pointer hover:border-black transition-all duration-300">
            <img src="images/s1.png" alt="">
        </div>
        <div onclick="changeImage('images/s1.png')" class="border w-20 h-20 cursor-pointer hover:border-black transition-all duration-300">
            <img src="images/s1.png" alt="">
        </div>
        <div onclick="changeImage('images/s1.png')" class="border w-20 h-20 cursor-pointer hover:border-black transition-all duration-300">
            <img src="images/s1.png" alt="">
        </div>
        <div class="w-[600px] h-[432px] -mt-[432px] ml-24 overflow-hidden relative">
            <img id="carouselImage" src="images/s1.png" alt="" class="ml-11 transition-opacity duration-500 ease-in-out opacity-100">
            <button onclick="prevImage()" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-800 text-white px-3 py-1 rounded-r-md hover:bg-gray-600 transition">
                &#8592;
            </button>
            <button onclick="nextImage()" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-800 text-white px-3 py-1 rounded-l-md hover:bg-gray-600 transition">
                &#8594;
            </button>
        </div>
    </div>

    <script>
        // Array of image paths
        const images = [
            "images/s1.png",
            "images/s1.png",
            "images/s1.png",
            "images/s1.png",
            "images/s1.png"
        ];

        let currentIndex = 0;
        const carouselImage = document.getElementById("carouselImage");

        // Function to change image by index
        function changeImage(index) {
            currentIndex = index;
            updateImage();
        }

        // Function to update the image with fade effect
        function updateImage() {
            carouselImage.classList.remove("opacity-100");
            carouselImage.classList.add("opacity-0");

            setTimeout(() => {
                carouselImage.src = images[currentIndex];
                carouselImage.classList.remove("opacity-0");
                carouselImage.classList.add("opacity-100");
            }, 200); // duration for fade-out effect
        }

        // Show next image
        function nextImage() {
            currentIndex = (currentIndex + 1) % images.length;
            updateImage();
        }

        // Show previous image
        function prevImage() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            updateImage();
        }
    </script>

    <!-- deskripsi -->
    <div>
        <h1 class="text-base font-bold ml-3 mt-3">Deskripsi barang</h1>
        <p class="text-sm ml-3 mt-2 w-[700px] break-words">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, quos doloremque maiores porro expedita quo ad? Eaque consequuntur at molestias cupiditate ut qui commodi, dignissimos autem repellendus facilis. Earum cumque ex fuga deleniti? Mollitia sit reprehenderit molestias esse minima.</p>
    </div>

    <!-- bagian kanan -->
    <div class="ml-[760px] -mt-[530px]">
        <div>
            <!-- merek -->
            <h1 class="font-bold text-orange-600 mt-2 text-2xl">Detail Sepatu</h1>
            <!-- detail merek -->
            <h1 class="font-semibold text-black mt-2 text-3xl">Oxford Jazz 2.0 Hitam - Sepatu Pria Oxford Casual Kulit - Hitam Coklat</h1>
            <h1 class="mt-4 font-bold text-2xl">300.000 IDR</h1>
        </div>
        <div>
            <h1 class="font-semibold mt-5">Ukuran</h1>
            <div class="flex items-center mt-2 space-x-4">
                <label class="flex items-center justify-center w-9 h-9 border rounded-lg text-center 
                bg-gray-300 text-gray-800">
                    <input type="radio" name="option" value="1" class="hidden peer">
                    <span class="border rounded-lg w-full h-full flex items-center justify-center">41</span>
                </label>
            </div>
        </div>
        <div class="mt-6">
            <h1>Jumlah</h1>
            <input type="number" min="0" placeholder="" class="mt-2 w-24 p-2 border-2 border-gray-300 bg-slate-100 rounded-md focus:outline-none focus:border-gray-500 text-center">
        </div>
        <div class="flex">
            <!-- keranjnag -->
            <a href="" class="rounded-lg relative mt-7 w-56 h-14 cursor-pointer flex items-center border border-orange-600 bg-orange-300 group">
                <span class="text-gray-200 font-semibold ml-8 p-9 transform group-hover:translate-x-12 transition-all duration-300"> Keranjang</span>
                <span class="absolute right-0 h-full w-10 pr-3 rounded-lg bg-orange-300 flex items-center justify-center transform hover:bg-orange-600 group-hover:translate-x-0 group-hover:w-full transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="25" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M22.713 4.077A2.993 2.993 0 0 0 20.41 3H4.242L4.2 2.649A3 3 0 0 0 1.222 0H1a1 1 0 0 0 0 2h.222a1 1 0 0 1 .993.883l1.376 11.7A5 5 0 0 0 8.557 19H19a1 1 0 0 0 0-2H8.557a3 3 0 0 1-2.82-2h11.92a5 5 0 0 0 4.921-4.113l.785-4.354a2.994 2.994 0 0 0-.65-2.456ZM21.4 6.178l-.786 4.354A3 3 0 0 1 17.657 13H5.419l-.941-8H20.41a1 1 0 0 1 .99 1.178Z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                            <circle cx="7" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                            <circle cx="17" cy="22" r="2" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                        </g>
                    </svg>
                </span>
            </a>
        </div>
    </div>
    </div>
</body>

</html>
