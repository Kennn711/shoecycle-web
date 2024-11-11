<div class="animate-target flex flex-wrap gap-12 justify-center mt-16 opacity-0 translate-y-10 transition-all duration-700">
    <div class="w-60 h-auto bg-neutral-800 rounded-3xl text-neutral-300 p-4 flex flex-col items-start justify-center gap-3 hover:bg-gray-900 hover:shadow-2xl hover:shadow-sky-400 transition-shadow">
        <div class="w-52 h-40 bg-white rounded-2xl"><img src="images/s2.png" alt="" class="-mt-8"></div>
        <div>
            <p class="font-extrabold">Sepatu NIKE</p>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
            <p class="mt-4">300.000 IDR</p>
        </div>
        <div class="flex gap-2">
            <button class="bg-sky-700 font-extrabold w-52 p-2 px-6 rounded-xl hover:bg-sky-500 transition-colors">Lihat</button>
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
