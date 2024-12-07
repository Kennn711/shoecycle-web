@extends('layouts-customer.index')

@section('title-frontend', 'ShoeCycle | Beli Sepatu')
@section('page_title', 'Pesan Sepatu')

@section('content-frontend')
    <div class="relative overflow-hidden mt-5 w-[1890px] h-full max-w-[1890px] mx-5">
        <div id="slider" class="flex transition-transform duration-500">
            <img src="uploads/ilustration/hero1.png" alt="Slide 1" class="w-full h-auto flex-shrink-0">
            <img src="uploads/ilustration/hero2.png" alt="Slide 2" class="w-full h-auto flex-shrink-0">
            <img src="uploads/ilustration/hero3.png" alt="Slide 3" class="w-full h-auto flex-shrink-0">
        </div>
    </div>
    <div class="flex justify-center mt-4 space-x-2">
        <span class="dot w-3 h-3 bg-gray-300 rounded-full cursor-pointer"></span>
        <span class="dot w-3 h-3 bg-gray-300 rounded-full cursor-pointer"></span>
        <span class="dot w-3 h-3 bg-gray-300 rounded-full cursor-pointer"></span>
    </div>

    <div class="flex flex-wrap justify-center mt-16 mx-5">
        <!-- Card 1 -->
        <div class="card m-auto text-gray-300 w-[380px] h-[280px] hover:brightness-90 transition-all cursor-pointer group bg-gradient-to-tl from-gray-900 to-gray-950 hover:from-gray-800 hover:to-gray-950 border-r-2 border-t-2 border-gray-900 rounded-lg overflow-hidden relative">
            <div class="px-8 py-10">
                <div class="mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <linearGradient id="a" x1=".017" x2="511.983" y1="256" y2="256" gradientUnits="userSpaceOnUse">
                                <stop stop-opacity="1" stop-color="#00acd9" offset="0"></stop>
                                <stop stop-opacity="1" stop-color="#00a2da" offset="0"></stop>
                                <stop stop-opacity="1" stop-color="#0092de" offset="0"></stop>
                                <stop stop-opacity="1" stop-color="#005de8" offset="0"></stop>
                                <stop stop-opacity="1" stop-color="#4a7142" offset="0"></stop>
                                <stop stop-opacity="1" stop-color="#00ff1e" offset="1"></stop>
                            </linearGradient>
                            <path fill="url(#a)"
                                d="M472.579 228.108a34.763 34.763 0 0 0 25.171-44.58 7.337 7.337 0 0 1 2.152-8 34.764 34.764 0 0 0 .013-51.626 7.42 7.42 0 0 1-2.159-8.053 34.78 34.78 0 0 0-25.806-44.708 7.429 7.429 0 0 1-5.9-5.884 34.778 34.778 0 0 0-44.736-25.822 7.332 7.332 0 0 1-7.99-2.147v-.006a34.764 34.764 0 0 0-51.624-.012 7.417 7.417 0 0 1-8.055 2.158 34.808 34.808 0 0 0-44.714 25.816 7.415 7.415 0 0 1-5.885 5.893 34.828 34.828 0 0 0-18.731 10.914L200.73 33.82a6.986 6.986 0 0 0-6.986 0l-95.1 54.908L3.51 143.664a6.986 6.986 0 0 0-3.493 6.051v219.656a6.986 6.986 0 0 0 3.493 6.051l95.131 54.935 95.1 54.908a6.991 6.991 0 0 0 6.987 0l95.132-54.909 95.131-54.935a6.986 6.986 0 0 0 3.493-6.051v-96.488a34.923 34.923 0 0 0 14.346-6.621l37.9 65.643a6.987 6.987 0 0 0 6.05 3.494c.193 0 .388-.007.584-.024a6.988 6.988 0 0 0 5.965-4.522l11.647-31.245 32.86 5.534a6.987 6.987 0 0 0 7.212-10.384zm-197.506-52.571a7.341 7.341 0 0 1 2.139 8.011 34.979 34.979 0 0 0 .115 21.7l-80.088 46.216-54.605-31.527L263.593 150.1a34.878 34.878 0 0 0 11.48 25.437zm2.142-59.674a7.4 7.4 0 0 1-2.134 8.021 34.614 34.614 0 0 0-5.837 6.823l-140.585 81.158-39.107-22.578 176.3-101.754 11.482 6.626a35.023 35.023 0 0 0-.119 21.704zM82.562 201.388l39.118 22.585v81.594L82.562 282.99zm23.067-100.558 91.61-52.891 54.631 31.527L75.576 181.218 21 149.705zM13.992 365.337V161.8l54.6 31.522v93.706a6.988 6.988 0 0 0 3.494 6.052l53.093 30.643a6.988 6.988 0 0 0 10.481-6.052v-85.629l54.6 31.521v203.548l-84.621-48.855zm274.883 52.918-84.65 48.858V263.564l80.086-46.216a34.823 34.823 0 0 0 18.083 10.77l-38.471 66.639a6.989 6.989 0 0 0 7.212 10.384L304 299.607l11.647 31.245a6.987 6.987 0 0 0 5.965 4.522c.195.017.39.024.584.024a6.988 6.988 0 0 0 6.05-3.494l37.9-65.65a34.8 34.8 0 0 0 14.372 6.631v92.452zm22.255-177.317a34.8 34.8 0 0 0 42.5 19.038l-30.076 52.094-8.481-22.752a6.993 6.993 0 0 0-7.707-4.45l-23.923 4.032zm76.369 18.69a20.815 20.815 0 0 1-15.466-6.9 22.372 22.372 0 0 0-3.264-2.945 6.986 6.986 0 0 0-.661-.466 21.241 21.241 0 0 0-12-3.724 21.881 21.881 0 0 0-6.742 1.073 20.836 20.836 0 0 1-26.866-23.784 6.987 6.987 0 0 0-8.2-8.195 20.821 20.821 0 0 1-23.794-26.842 21.33 21.33 0 0 0-6.068-22.677 20.786 20.786 0 0 1 .013-30.919 21.424 21.424 0 0 0 6.062-22.673 21.022 21.022 0 0 1 1.787-16.852 20.8 20.8 0 0 1 13.673-9.924 21.432 21.432 0 0 0 16.614-16.623 20.834 20.834 0 0 1 26.763-15.448 21.441 21.441 0 0 0 22.707-6.086 20.79 20.79 0 0 1 30.9.014 21.319 21.319 0 0 0 22.656 6.075 20.8 20.8 0 0 1 26.775 15.459 21.456 21.456 0 0 0 16.62 16.609 20.8 20.8 0 0 1 15.448 26.763 21.438 21.438 0 0 0 6.086 22.707 20.788 20.788 0 0 1-.008 30.891 21.318 21.318 0 0 0-6.08 22.662 20.807 20.807 0 0 1-15.465 26.777 21.61 21.61 0 0 0-10.855 5.919 7.042 7.042 0 0 0-.457.492 21.726 21.726 0 0 0-5.3 10.211 20.8 20.8 0 0 1-26.752 15.451 21.274 21.274 0 0 0-18.534 2.5c-.015.009-.03.014-.045.023a7.046 7.046 0 0 0-1.183.861 22.162 22.162 0 0 0-2.914 2.686 20.888 20.888 0 0 1-15.449 6.885zm80.1 25.24a6.99 6.99 0 0 0-7.707 4.45l-8.482 22.752-30.073-52.093a34.774 34.774 0 0 0 42.505-19.043L491.53 288.9zm2.539-135.153a82.658 82.658 0 1 0-82.638 82.643 82.752 82.752 0 0 0 82.643-82.643zM387.5 218.384a68.684 68.684 0 1 1 68.669-68.669 68.762 68.762 0 0 1-68.669 68.669zm53.077-81.26a6.988 6.988 0 0 0-6.646-4.828h-.011l-30.422.049-9.348-28.968a6.987 6.987 0 0 0-6.647-4.842 6.989 6.989 0 0 0-6.648 4.836l-9.374 28.974-30.431-.045h-.011a6.987 6.987 0 0 0-4.1 12.646l24.646 17.848-9.445 28.919a6.987 6.987 0 0 0 10.76 7.814l24.6-17.942 24.568 17.94a6.987 6.987 0 0 0 10.763-7.812l-9.446-28.919 24.647-17.848a6.987 6.987 0 0 0 2.544-7.822zm-39.517 17.335a6.988 6.988 0 0 0-2.543 7.829l4.305 13.18-11.2-8.18a6.987 6.987 0 0 0-8.24 0l-11.238 8.2 4.31-13.2a6.988 6.988 0 0 0-2.543-7.829l-11.26-8.154 13.9.022h.011a6.991 6.991 0 0 0 6.649-4.836l4.285-13.244 4.272 13.238a6.986 6.986 0 0 0 6.65 4.842h.01l13.9-.022z"
                                opacity="1" data-original="url(#a)" class="group-hover:-translate-y-3  group-hover:shadow-xl group-hover:shadow-green-900 transition-all"></path>
                        </g>
                    </svg>
                </div>
                <div class="uppercase font-bold text-xl">
                    KUALITAS BARANG
                </div>
                <div class="text-gray-300 uppercase tracking-widest">
                    Terjamin bagus dan berkualitas
                </div>
            </div>
            <div class="h-2 w-full bg-gradient-to-l via-green-500 group-hover:blur-xl blur-2xl m-auto rounded transition-all absolute bottom-0"></div>
            <div class="h-0.5 group-hover:w-full bg-gradient-to-l via-green-950 group-hover:via-green-500 w-[70%] m-auto rounded transition-all"></div>
        </div>

        <!-- card 2 -->
        <div class="card m-auto text-gray-300 w-[380px] h-[280px] hover:brightness-90 transition-all cursor-pointer group bg-gradient-to-tl from-gray-900 to-gray-950 hover:from-gray-800 hover:to-gray-950 border-r-2 border-t-2 border-gray-900 rounded-lg overflow-hidden relative">
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
                            <path fill="url(#b)" d="M426.343 386.343 384 428.687l-18.343-18.344a8 8 0 0 0-11.314 11.314l24 24a8 8 0 0 0 11.314 0l48-48a8 8 0 0 0-11.314-11.314z" opacity="1" data-original="url(#b)" class="group-hover:-translate-y-3  group-hover:shadow-xl group-hover:shadow-green-900 transition-all"></path>
                        </g>
                    </svg></div>
                <div class="uppercase font-bold text-xl">
                    KEMASAN
                </div>
                <div class="text-gray-300 uppercase tracking-widest">
                    Di kemas dengan baik
                </div>
            </div>
            <div class="h-2 w-full bg-gradient-to-l via-green-500 group-hover:blur-xl blur-2xl m-auto rounded transition-all absolute bottom-0"></div>
            <div class="h-0.5 group-hover:w-full bg-gradient-to-l via-green-950 group-hover:via-green-500 w-[70%] m-auto rounded transition-all"></div>
        </div>

        <!-- Card 3 -->
        <div class="card m-auto text-gray-300 w-[380px] h-[280px] hover:brightness-90 transition-all cursor-pointer group bg-gradient-to-tl from-gray-900 to-gray-950 hover:from-gray-800 hover:to-gray-950 border-r-2 border-t-2 border-gray-900 rounded-lg overflow-hidden relative">
            <div class="px-8 py-10">
                <div class="mb-2"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <linearGradient id="a" x1="154.546" x2="422.002" y1="515.136" y2="51.888" gradientUnits="userSpaceOnUse">
                                <stop stop-opacity="1" stop-color="#e75300" offset="0.044"></stop>
                                <stop stop-opacity="1" stop-color="#e99800" offset="0.7455012364914122"></stop>
                            </linearGradient>
                            <path fill="url(#a)"
                                d="M50.744 334.722a8.042 8.042 0 0 0 6.637 3.499h81.804a8.038 8.038 0 0 0 8.039-8.036v-55.016c0-4.438-3.601-8.035-8.039-8.035h-60.37a8.036 8.036 0 0 0-7.49 5.12l-21.433 55.015a8.04 8.04 0 0 0 .852 7.453zm33.565-51.517h46.838v38.945H69.138zm421.693-103.416c0-75.868-61.725-137.588-137.593-137.588-74.957 0-136.075 60.151-137.641 134.674h-59.074a8.038 8.038 0 0 0-8.039 8.036v49.595H54.76a8.042 8.042 0 0 0-7.531 5.229l-35.124 94.068a8.01 8.01 0 0 0-.51 2.813v42.481l-4.718 9.234a8.035 8.035 0 0 0-.879 3.655v32.746c0 4.438 3.6 8.034 8.037 8.034h35.026c3.55 20.983 21.761 37.032 43.685 37.032 21.983 0 40.243-16.049 43.801-37.032h199.372c3.558 20.983 21.82 37.032 43.803 37.032s40.244-16.049 43.802-37.032h40.384c4.438 0 8.039-3.597 8.039-8.034V270.336c21.179-24.228 34.055-55.9 34.055-90.547zM92.746 453.727c-15.596 0-28.28-12.742-28.28-28.4s12.685-28.399 28.28-28.399c15.659 0 28.399 12.741 28.399 28.399s-12.74 28.4-28.399 28.4zm70.909-37.032h-27.289c-4.031-20.404-22.049-35.84-43.62-35.84-21.513 0-39.484 15.436-43.505 35.84H22.074v-22.777l2.487-4.873c.066.004.127.021.191.021h22.386a8.04 8.04 0 0 0 8.039-8.039c0-4.436-3.6-8.035-8.039-8.035H27.672v-34.925l32.667-87.487h103.316zM360.371 58.566v4.648c0 4.438 3.6 8.039 8.038 8.039s8.04-3.602 8.04-8.039v-4.648c60.607 3.984 109.199 52.58 113.181 113.187h-4.526a8.037 8.037 0 1 0 0 16.073h4.526c-3.975 60.671-52.571 109.318-113.181 113.305v-4.646c0-4.438-3.602-8.036-8.04-8.036s-8.038 3.599-8.038 8.036v4.646c-60.675-3.98-109.324-52.632-113.303-113.305h4.645a8.037 8.037 0 1 0 0-16.073h-4.645c3.985-60.61 52.631-109.208 113.303-113.187zm19.351 395.161c-15.661 0-28.4-12.742-28.4-28.4s12.739-28.399 28.4-28.399c15.659 0 28.397 12.741 28.397 28.399s-12.738 28.4-28.397 28.4zm43.619-37.032c-4.033-20.404-22.05-35.84-43.619-35.84-21.57 0-39.589 15.436-43.622 35.84H179.731V192.946h51.606c6.646 69.784 65.574 124.556 137.071 124.556 33.188 0 63.668-11.82 87.458-31.479v130.673h-32.525zM308.633 187.826h32.673c3.475 11.688 14.303 20.242 27.104 20.242 15.531 0 28.162-12.685 28.162-28.279 0-12.735-8.502-23.508-20.122-26.975V94.293c0-4.437-3.602-8.034-8.04-8.034s-8.038 3.598-8.038 8.034v58.509c-9.127 2.704-16.333 9.865-19.059 18.951h-32.68a8.036 8.036 0 1 0 0 16.073zm59.776-20.125c6.664 0 12.085 5.425 12.085 12.088 0 6.729-5.421 12.207-12.085 12.207-6.73 0-12.206-5.479-12.206-12.207 0-6.663 5.476-12.088 12.206-12.088z"
                                opacity="1" data-original="url(#a)" class="group-hover:-translate-y-3  group-hover:shadow-xl group-hover:shadow-green-900 transition-all"></path>
                        </g>
                    </svg></div>
                <div class="uppercase font-bold text-xl">
                    PENGIRIMAN
                </div>
                <div class="text-gray-300 uppercase tracking-widest">
                    Terjamin tepat waktu
                </div>
            </div>
            <div class="h-2 w-full bg-gradient-to-l via-green-500 group-hover:blur-xl blur-2xl m-auto rounded transition-all absolute bottom-0"></div>
            <div class="h-0.5 group-hover:w-full bg-gradient-to-l via-green-950 group-hover:via-green-500 w-[70%] m-auto rounded transition-all"></div>
        </div>

        <!-- card 4 -->
        <div class="card m-auto text-gray-300 w-[380px] h-[280px] hover:brightness-90 transition-all cursor-pointer group bg-gradient-to-tl from-gray-900 to-gray-950 hover:from-gray-800 hover:to-gray-950 border-r-2 border-t-2 border-gray-900 rounded-lg overflow-hidden relative">
            <div class="px-8 py-10">
                <div class="mb-2"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <linearGradient id="a" x1="256" x2="256" y1="507" y2="5" gradientUnits="userSpaceOnUse">
                                <stop stop-opacity="1" stop-color="#fe6400" offset="0"></stop>
                                <stop stop-opacity="1" stop-color="#ffb617" offset="1"></stop>
                            </linearGradient>
                            <path fill="url(#a)"
                                d="M453.244 71.098 257.916 5.314a5.992 5.992 0 0 0-3.83 0L58.756 71.098C47.268 74.968 39.844 85.3 39.844 97.422v179.982c0 45.211 17.534 84.569 53.604 120.324 31.361 31.087 72.41 55.593 112.108 79.291 16.565 9.889 32.213 19.229 47.161 29.003a6.003 6.003 0 0 0 6.566 0c14.948-9.772 30.595-19.113 47.16-29.003 39.698-23.698 80.747-48.203 112.108-79.291 36.069-35.754 53.604-75.113 53.604-120.324V97.422c0-12.122-7.424-22.455-18.912-26.324zm6.912 206.306c0 93.878-81.27 142.394-159.862 189.312-14.796 8.833-30.06 17.944-44.293 27.13-14.234-9.186-29.497-18.297-44.294-27.13-78.593-46.918-159.862-95.434-159.862-189.312V97.422c0-6.885 4.217-12.754 10.742-14.952L256 17.331 449.413 82.47c6.525 2.198 10.742 8.067 10.742 14.952v179.982zm-23.78-178.543-178.46-60.104a5.992 5.992 0 0 0-3.83 0L75.625 98.861a6 6 0 0 0-4.085 5.686v172.857c0 23.455 5.714 44.479 17.468 64.27 27.145 45.706 86.215 80.763 138.332 111.693 8.917 5.292 17.34 10.291 25.453 15.252a6.002 6.002 0 0 0 6.291-.019c10.354-6.416 21.015-12.776 31.324-18.928 8.597-5.128 17.485-10.431 26.177-15.755 29.03-17.782 59.347-37.209 82.939-61.903 27.546-28.831 40.937-59.778 40.937-94.609V104.547a6 6 0 0 0-4.085-5.686zm-7.915 178.543c0 68.259-55.885 108.144-118.144 146.28-8.632 5.287-17.49 10.571-26.057 15.683-9.318 5.559-18.921 11.287-28.359 17.095-7.199-4.371-14.629-8.78-22.438-13.414-50.883-30.198-108.556-64.426-134.138-107.501-10.623-17.886-15.786-36.904-15.786-58.143V108.858L256 50.775l172.46 58.083v168.546zM225.802 94.862c-5.44 7.661-14.221 11.298-23.485 9.728-13.364-2.265-24.143.927-32.96 9.746-8.823 8.823-12.011 19.604-9.746 32.961 1.57 9.264-2.066 18.043-9.729 23.484-11.046 7.846-16.416 17.724-16.416 30.198s5.37 22.352 16.416 30.199c7.661 5.441 11.298 14.22 9.728 23.485-2.261 13.36.927 24.141 9.747 32.959 3.285 3.285 6.843 5.787 10.704 7.519l-32.893 69.686a6 6 0 0 0 7.215 8.288l35.057-10.958 17.082 32.515a6.001 6.001 0 0 0 10.963-.773l25.911-72.543c3.878 1.436 8.068 2.156 12.606 2.156 4.646 0 8.931-.747 12.886-2.253l26.016 72.534a5.998 5.998 0 0 0 10.962.758l17.039-32.536 35.07 10.912a6 6 0 0 0 7.205-8.298l-32.974-69.617c3.758-1.727 7.23-4.18 10.438-7.389 8.823-8.822 12.011-19.604 9.746-32.96-1.57-9.265 2.066-18.043 9.728-23.484 11.046-7.846 16.416-17.724 16.416-30.199s-5.37-22.353-16.417-30.198c-7.66-5.441-11.297-14.22-9.727-23.485 2.261-13.36-.927-24.141-9.746-32.96-8.823-8.822-19.605-12.011-32.96-9.745-9.265 1.568-18.044-2.067-23.485-9.728-7.846-11.046-17.724-16.416-30.198-16.416s-22.354 5.37-30.198 16.416zm-15.019 282.121-13.048-24.836a6 6 0 0 0-7.102-2.936l-26.777 8.37 28.129-59.593c3.264.194 6.699-.004 10.331-.62 9.264-1.571 18.044 2.066 23.485 9.729 2.202 3.1 4.57 5.736 7.104 7.949l-22.123 61.937zm137.696-19.578-26.787-8.335a6 6 0 0 0-7.098 2.946l-13.015 24.853-22.249-62.03c2.445-2.17 4.734-4.739 6.867-7.742 5.44-7.661 14.216-11.3 23.486-9.728 3.748.634 7.285.824 10.641.596l28.154 59.439zm-72.064-255.594c8.172 11.506 21.36 16.968 35.273 14.61 9.632-1.632 16.352.281 22.47 6.399s8.03 12.837 6.399 22.471c-2.357 13.915 3.104 27.101 14.61 35.272 7.967 5.658 11.365 11.763 11.365 20.415s-3.398 14.757-11.365 20.416c-11.506 8.171-16.968 21.357-14.609 35.273 1.633 9.632-.281 16.352-6.4 22.471-6.115 6.116-12.832 8.034-22.471 6.399-13.916-2.354-27.101 3.105-35.272 14.61-5.659 7.966-11.765 11.365-20.415 11.365s-14.757-3.398-20.415-11.365c-6.919-9.741-17.43-15.15-28.936-15.15-2.085 0-4.204.178-6.338.54-9.627 1.633-16.351-.281-22.471-6.4-6.116-6.115-8.03-12.836-6.399-22.47 2.357-13.915-3.104-27.101-14.61-35.272-7.966-5.659-11.365-11.765-11.365-20.416s3.398-14.757 11.364-20.415c11.507-8.172 16.97-21.358 14.611-35.273-1.633-9.631.281-16.352 6.4-22.47 6.116-6.117 12.836-8.029 22.471-6.4 13.915 2.36 27.102-3.105 35.272-14.61 5.657-7.966 11.763-11.365 20.415-11.365s14.757 3.399 20.415 11.365zm-82.523 99.168c0 34.246 27.861 62.107 62.107 62.107s62.108-27.861 62.108-62.107-27.861-62.108-62.108-62.108-62.107 27.861-62.107 62.108zm112.216 0c0 27.629-22.479 50.107-50.108 50.107s-50.107-22.478-50.107-50.107 22.479-50.108 50.107-50.108 50.108 22.479 50.108 50.108zm-60.183 8.202 30.42-30.419a6 6 0 0 1 8.484 8.485l-35.948 35.948a6 6 0 0 1-9.438-1.243l-13.227-22.909a6 6 0 0 1 10.392-6l9.316 16.138z"
                                opacity="1" data-original="url(#a)" class="group-hover:-translate-y-3  group-hover:shadow-xl group-hover:shadow-green-900 transition-all"></path>
                        </g>
                    </svg></div>
                <div class="uppercase font-bold text-xl">
                    ORIGINAL
                </div>
                <div class="text-gray-300 uppercase tracking-widest">
                    Barang terjamin original
                </div>
            </div>
            <div class="h-2 w-full bg-gradient-to-l via-green-500 group-hover:blur-xl blur-2xl m-auto rounded transition-all absolute bottom-0"></div>
            <div class="h-0.5 group-hover:w-full bg-gradient-to-l via-green-950 group-hover:via-green-500 w-[70%] m-auto rounded transition-all"></div>
        </div>
    </div>
    <div class="text-center my-14">
        <hr class="border-black-300 border-t-2 w-[600px] ml-[200px] -mb-4" />
        <h1>PRODUK LAINNYA</h1>
        <hr class="border-black-300 border-t-2 w-[600px] ml-auto mr-[200px] -mt-3" />
    </div>

    @if ($shoes->isEmpty())
        <section class="bg-white py-16 antialiased dark:bg-gray-900 md:py-32 flex justify-center items-center">
            <div class="text-center space-y-6">
                <img src="{{ asset('uploads/ilustration/empty-shoes.png') }}" alt="" class="h-64 w-auto mx-auto">
                <p class="text-2xl font-semibold text-gray-900 dark:text-white">Waduh, belum ada sepatu yang tersedia nih...</p>
                <p class="text-lg text-gray-500 dark:text-gray-400">Mohon bersabar yaaa !</p>
            </div>
        </section>
    @else
        <div class="flex w-full rounded-full border-2 border-green-800 overflow-hidden max-w-md mx-auto font-[sans-serif]">
            <input type="text" id="searchShoes" placeholder="Cari Sepatu..." class="w-full rounded-l-full outline-none border-green-800 focus:border-green-800 border-2 bg-white text-sm px-5 py-3" />
            <button type='button' class="flex items-center justify-center bg-green-800 hover:bg-green-900 px-6">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="18px" class="fill-white">
                    <path d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                    </path>
                </svg>
            </button>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 xl:gap-8 px-4 max-w-full mx-3 lg:mx-10 xl:mx-28 mt-10 mb-10 sm:mt-14 sm:mb-14 md:mt-20 md:mb-20">
            @foreach ($shoes as $see)
                <div class="shoes-card relative flex w-full max-w-[26rem] flex-col rounded-xl bg-gray-100 bg-clip-border text-gray-700 shadow-lg">
                    <div class="relative mx-4 mt-4 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
                        <img src="{{ $see->imagedetail[0]->image }}" alt="{{ $see->name }}" alt="ui/ux review check">
                        <div class="to-bg-black-10 absolute inset-0 h-full w-full bg-gradient-to-tr from-transparent via-transparent to-black/60"></div>
                    </div>
                    <div class="p-5 flex-grow">
                        <div class="mb-3 flex items-center justify-between">
                            <h5 class="block font-sans text-[10px] sm:text-lg xl:text-base 2xl:text-lg font-medium leading-snug max-w-12 sm:max-w-20 md:max-w-48 tracking-normal text-blue-gray-900 antialiased">{{ $see->name }}</h5>
                            <p class="flex items-center gap-1.5 font-sans text-base font-normal leading-relaxed text-blue-gray-900 antialiased">
                                <span class="text-gray-900 font-bold  text-[0.50rem] sm:text-lg xl:text-sm 2xl:text-lg">Rp {{ number_format($see->price, 0, ',', '.') }}</span>
                            </p>
                        </div>
                        <div>
                            <p class="block font-sans text-[7px] sm:text-base font-light leading-relaxed text-gray-700 antialiased truncate">{{ $see->description }}</p>
                        </div>
                    </div>
                    <div class="p-3 pt-2 sm:p-6 sm:pb-3 mb-2">
                        @if ($see->stock > 0)
                            <a href="{{ route('order-detail.view', $see->id) }}">
                                <button class="block w-full select-none rounded-3xl bg-green-800 py-1.5 px-3 sm:py-3.5 sm:px-7 text-center align-middle font-sans text-[0.50rem] sm:text-sm font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button" data-ripple-light="true">Lihat Detail
                                </button>
                            </a>
                        @else
                            <button class="block w-full select-none rounded-3xl bg-red-600 py-1.5 px-3 sm:py-3.5 sm:px-7 text-center align-middle font-sans text-[0.50rem] sm:text-sm font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button" data-ripple-light="true">Stok Habis
                            </button>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    @endif
    @if ($shoes->isEmpty())
        <footer class="footer bg-[#212121] w-full mt-[150px] p-5">
        @else
            <footer class="footer bg-[#212121] w-full mt-auto p-5">
    @endif
    <div class="flex items-center pt-1 md:pt-3 xl:ml-12">
        <img src="uploads/logo/ShoeCycle (putih).png" alt="Logo" class="h-7 sm:h-12 w-auto sm:px-1.5 px-0.5 ml-0 md:ml-7 lg:ml-5">
        <p class="text-xs sm:text-2xl font-semibold text-white">ShoeCycle</p>
    </div>

    <div class="flex justify-between mt-5 xl:mr-12 xl:ml-12">
        <div class="ml-1 sm:ml-4 md:ml-12 lg:ml-20 mb-2 sm:mb-3">
            <h1 class="text-white text-[0.50rem] sm:text-base font-bold">Layanan Pengaduan Konsumen ShoeCycle</h1>
            <p class="mt-2 text-white text-[0.50rem] sm:text-sm"><a href="#">Email: shoecycle@gmail.com</a></p>
            <p class="text-white text-[0.50rem] sm:text-sm"><a href="https://wa.me/6285704637649" target="_blank">WhatsApp: +62 857 0463 7649</a></p>

            <!-- Sosial Media -->
            <p class="mt-2 sm:mt-6 md:mt-9 text-white text-[0.50rem] md:text-base font-bold">Temukan Kami</p>
            <div class="flex mt-2 gap-3">
                <!-- ig   -->
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="md:w-[25px] sm:w-[19px] w-[15px] md:h-[25px] sm:h-[19px] h-[15px]" x="0" y="0" viewBox="0 0 409.61 409.61" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M307.205 0h-204.8C46.09 0 .005 46.085.005 102.4v204.81c0 56.3 46.085 102.4 102.4 102.4h204.8c56.315 0 102.4-46.1 102.4-102.4V102.4c0-56.315-46.085-102.4-102.4-102.4zm68.265 307.21c0 37.632-30.612 68.265-68.265 68.265h-204.8c-37.637 0-68.265-30.633-68.265-68.265V102.4c0-37.642 30.628-68.265 68.265-68.265h204.8c37.653 0 68.265 30.623 68.265 68.265v204.81z" fill="#ffffff" opacity="1" data-original="#000000"></path>
                            <circle cx="315.755" cy="93.865" r="25.6" fill="#ffffff" opacity="1" data-original="#000000" class=""></circle>
                            <path d="M204.805 102.4c-56.566 0-102.4 45.839-102.4 102.4 0 56.54 45.834 102.41 102.4 102.41 56.55 0 102.4-45.87 102.4-102.41 0-56.561-45.85-102.4-102.4-102.4zm0 170.675c-37.699 0-68.265-30.566-68.265-68.275s30.566-68.265 68.265-68.265 68.265 30.556 68.265 68.265-30.566 68.275-68.265 68.275z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                </a>
                <!-- fb  -->
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="md:w-[25px] sm:w-[19px] w-[15px] md:h-[25px] sm:h-[19px] h-[15px]" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g>
                            <path d="M437 0H75C33.648 0 0 33.648 0 75v362c0 41.352 33.648 75 75 75h151V331h-60v-90h60v-61c0-49.629 40.371-90 90-90h91v90h-91v61h91l-15 90h-76v181h121c41.352 0 75-33.648 75-75V75c0-41.352-33.648-75-75-75zm0 0" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                </a>
                <!-- twitter -->
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="md:w-[25px] sm:w-[19px] w-[15px] md:h-[25px] sm:h-[19px] h-[15px]" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z" fill="#ffffff" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                </a>
            </div>


        </div>

        <div class=" mr-0 md:mr-7 lg:mr-5 mb-7 md:mb-3">
            <h1 class="text-white text-[0.50rem] sm:text-base font-bold ">Lokasi Toko Kami</h1>
            <p class="mt-2 text-white text-[0.50rem] sm:text-sm mb-5 sm:mb-0 max-w-[220px] sm:max-w-[290px] md:max-w-[300px] lg:max-w-[450px] xl:max-w-[500px]">Jl. Jendral Ahmad Yani No.17 Kedunglengkong, Jabaran, Pohkecik, Kec. Dlanggu, Kab. Mojokerto, Jawa Timur</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.2148314625483!2d112.47754897431861!3d-7.551537774559029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78731ce537479f%3A0x350a36480b9ea39f!2sSMKN%201%20Dlanggu%20Mojokerto!5e0!3m2!1sen!2sid!4v1730822317351!5m2!1sen!2sid" class="mt-5 w-[120px] sm:w-[160px] md:w-[280px] lg:w-[360px] h-[70px] sm:h-[130px] md:h-[200px] lg:h-[200px]" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    </footer>

    {{-- JS Slider Hero --}}
    <script src="{{ asset('assets/js/hero.js') }}"></script>

    <script src="{{ asset('assets/jquery/jquery.js') }}"></script>

    {{-- JS Searching Sepatu --}}
    <script src="{{ asset('assets/js/searching-hero.js') }}"></script>
@endsection
