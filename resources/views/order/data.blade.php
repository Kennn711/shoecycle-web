@extends('layouts-customer2/index')
@section('title-customer2', 'ShoeCycle | Beranda')

@section('customer-content-v2')
    {{-- Carousel --}}
    <div class="carousel relative h-[800px] overflow-hidden">
        <div class="bg-gradient-to-r from-slate-300 to-slate-800 bg-opacity-30 backdrop-blur-md rounded-lg h-[450px] mt-2 w-auto flex justify-center items-center">
            <div class="list absolute top-0 -mt-9 w-full max-w-[90%] left-1/2 -translate-x-1/2 h-4/5 flex justify-center items-center">
                @foreach ($shoes as $see)
                    <div class="item absolute left-0 top-0 w-[60%] h-full text-sm transform scale-[0.9] blur-[10px] opacity-0 z-10 transition-all duration-500 ease-in-out">
                        <img src="{{ $see->imagedetail[0]->image }}" alt="{{ $see->name }}" class="absolute right-0 -scale-x-100 -mr-96 mt-16 w-[450px] rotate-12 top-1/2 -translate-y-1/2">
                        <div id="intro" class="animate-show-content absolute top-1/2 left-5 -translate-y-1/2 w-[400px] pointer-events-auto">
                            <div id="title" class="text-2xl leading-3">Sepatu</div>
                            <div id="topic" class="text-4xl font-medium mt-3">{{ $see->name }}</div>
                            <div id="des" class="text-sm">{{ $see->description }}</div>
                            @if ($see->stock > 0)
                                <button class="seeMore bg-slate-950 text-slate-400 border border-slate-400 border-b-4 font-medium overflow-hidden relative px-4 py-2 rounded-md hover:brightness-150 hover:border-t-4 hover:border-b active:opacity-75 outline-none duration-300 group mt-3">
                                    <a href="{{ route('order-detail.view', $see->id) }}">
                                        <span class="bg-slate-400 shadow-slate-400 absolute -top-[150%] left-0 inline-flex w-80 h-[5px] rounded-md opacity-50 group-hover:top-[150%] duration-500 shadow-[0_0_10px_10px_rgba(0,0,0,0.3)]"></span>
                                        Lihat &#8599;
                                    </a>
                                </button>
                            @else
                                <button disabled class="seeMore bg-slate-950 text-slate-400 border border-slate-400 border-b-4 font-medium overflow-hidden relative px-4 py-2 rounded-md hover:brightness-150 hover:border-t-4 hover:border-b active:opacity-75 outline-none duration-300 group mt-3">
                                    <span class="bg-slate-400 shadow-slate-400 absolute -top-[150%] left-0 inline-flex w-80 h-[5px] rounded-md opacity-50 group-hover:top-[150%] duration-500 shadow-[0_0_10px_10px_rgba(0,0,0,0.3)]"></span>
                                    Stok Habis
                                </button>
                            @endif
                        </div>
                    </div>
                @endforeach
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
    {{-- Carousel End --}}

    {{-- Info Card --}}
    @include('layouts-customer2/partial/info-card')
    {{-- Info Card End --}}

    <h1 class="text-center font-semibold text-xl">Semua Sepatu di ShoeCycle</h1>

    {{-- Card --}}
    <div class="animate-target flex flex-wrap gap-12 justify-center mt-16 opacity-0 translate-y-10 transition-all duration-700">
        @foreach ($shoes as $card)
            @if ($card->stock > 0)
                <div class="w-60 h-auto bg-neutral-800 rounded-3xl text-neutral-300 p-4 flex flex-col items-start justify-center gap-3 hover:bg-gray-900 hover:shadow-2xl hover:shadow-sky-400 transition-shadow">
                @else
                    <div class="w-60 h-auto bg-neutral-800 rounded-3xl text-neutral-300 p-4 flex flex-col items-start justify-center gap-3 hover:bg-gray-900 hover:shadow-2xl hover:shadow-red-400 transition-shadow">
            @endif
            <div class=" bg-white rounded-2xl">
                <img src="{{ $card->imagedetail[0]->image }}" alt="{{ $card->name }}" class="w-full">
            </div>
            <div>
                <p class="font-extrabold">{{ $card->name }}</p>
                <p>{{ substr($card['description'], 0, 20) . '...' }}</p>
                <p class="mt-4">Rp {{ number_format($card->price, 0, ',', '.') }}</p>
            </div>
            <div class="flex gap-2">
                @if ($card->stock > 0)
                    <a href="{{ route('order-detail.view', $card->id) }}">
                        <button type="button" class="bg-sky-700 font-extrabold w-52 p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors">
                            Lihat
                        </button>
                    </a>
                @else
                    <button disabled class="bg-red-700 font-extrabold w-52 p-2 px-6 rounded-xl hover:bg-red-600 transition-colors">Stok Habis</button>
                @endif
            </div>
    </div>
    @endforeach
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
    {{-- Card End --}}

    @include('layouts-customer2/partial/footer')
@endsection
