<!--? mobile Navbar -->
<div class="mobileNavbar">
    <!--? navbar button -->
    <div style="box-shadow: 0 0 0.3rem lightgray" class="z-10 bg-white w-96 lg:hidden flex justify-around items-center p-4 border rounded-t-xl fixed bottom-0 left-1/2 -translate-x-1/2 text-lg">
        <button id="openNavbarButton" type="button">
            <ion-icon name="menu-outline"></ion-icon>
        </button>

        <button class="relative" type="button">
            <span class="text-xs text-center font-semibold text-white absolute -top-2 -right-2 w-4 h-4 bg-red-400 rounded-full">
                0
            </span>
            <ion-icon name="bag-handle-outline"></ion-icon>
        </button>

        <button type="button">
            <ion-icon name="home-outline"></ion-icon>
        </button>

        <button class="relative" type="button">
            <span class="text-xs text-center font-semibold text-white absolute -top-2 -right-2 w-4 h-4 bg-red-400 rounded-full">
                0
            </span>
            <ion-icon name="heart-outline"></ion-icon>
        </button>

        <button id="categoriesBtn" type="button">
            <ion-icon name="grid-outline"></ion-icon>
        </button>
    </div>
    <!--* overlay -->
    <div id="overlayNavbar" class="hidden fixed top-0 left-0 w-screen h-screen bg-gray-500/30 z-10"></div>

    <!--! sidebarNavbar -->
    <div class="fixed top-0 w-72 h-screen bg-white p-4 shadow-lg hidden flex-col justify-start gap-4 text-lg font-semibold overflow-auto z-20" id="sidebarNavbar">
        <div class="flex justify-between border-b-2 py-4">
            <h3 class="text-red-400">Menu</h3>
            <button class="closeButton hover:text-red-500">
                <ion-icon name="close-circle-outline"></ion-icon>
            </button>
        </div>
        <div class="mobile_navbar_item border-b pb-3 text-gray-600">Home</div>
        <div class="mobile_navbar_item border-b pb-3 text-gray-600">
            <details>
                <a href="#">Shirt</a>
                <a href="#">Shorts & Jeans</a>
                <a href="#">Safety Shoes</a>
                <a href="#">Wallet</a>
                <summary>Men's</summary>
            </details>
        </div>
        <div class="mobile_navbar_item border-b pb-3 text-gray-600">
            <details>
                <a href="#">Dress & Frock</a>
                <a href="#">Earrings</a>
                <a href="#">Necklace</a>
                <a href="#">Makeup Kit</a>
                <summary>Women's</summary>
            </details>
        </div>
        <div class="mobile_navbar_item border-b pb-3 text-gray-600">
            <details>
                <a href="#">Earrings</a>
                <a href="#">Couple Rings</a>
                <a href="#">Necklace</a>
                <a href="#">Bracelets</a>
                <summary>Jewelry</summary>
            </details>
        </div>
        <div class="mobile_navbar_item border-b pb-3 text-gray-600">
            <details>
                <a href="#">Clothes Perfume</a>
                <a href="#">Deodorant</a>
                <a href="#">Flower Fragrance</a>
                <a href="#">Air Freshener</a>
                <summary>Perfume</summary>
            </details>
        </div>
        <div class="mobile_navbar_item border-b pb-3 text-gray-600">
            <a href="#">Blog</a>
        </div>
        <div class="mobile_navbar_item border-b pb-3 text-gray-600">
            <a href="#">Hot Offers</a>
        </div>

        <div class="mobile_navbar_item border-b pb-3 text-gray-600">
            <details>
                <div class="border rounded-xl shadow-xl flex flex-col items-start">
                    <a class="border-b w-full pb-2" href="#">English</a>
                    <a class="border-b w-full pb-2" href="#">Persian</a>
                </div>
                <summary>Language</summary>
            </details>
        </div>
        <div class="mobile_navbar_item border-b pb-3 text-gray-600">
            <details>
                <div class="border rounded-xl shadow-xl flex flex-col items-start">
                    <a class="border-b w-full pb-2" href="#">USD $</a>
                    <a class="border-b w-full pb-2" href="#">EUR €</a>
                </div>
                <summary>Currency</summary>
            </details>
        </div>

        <div class="icons flex items-center justify-center gap-4">
            <a class="text-gray-900 bg-gray-300/50 p-2 rounded-md hover:scale-110 hover:text-white hover:bg-red-400 flex items-center justify-center" href="#">
                <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a class="text-gray-900 bg-gray-300/50 p-2 rounded-md hover:scale-110 hover:text-white hover:bg-red-400 flex items-center justify-center" href="#">
                <ion-icon name="logo-linkedin"></ion-icon>
            </a>
            <a class="text-gray-900 bg-gray-300/50 p-2 rounded-md hover:scale-110 hover:text-white hover:bg-red-400 flex items-center justify-center" href="#">
                <ion-icon name="logo-github"></ion-icon>
            </a>
        </div>
    </div>

    <!--todo sidebarCategories -->
    <div id="sidebarCategories" class="fixed top-0 w-80 h-screen bg-white p-6 shadow-lg hidden flex-col justify-start gap-4 font-semibold overflow-auto z-20">
        <div class="categories w-full h-auto">
            <div class="w-full flex items-center justify-between">
                <h1 class="text-lg font-semibold mb-4">CATEGORY</h1>
                <button class="closeButton text-xl hover:text-red-500">
                    <ion-icon name="close-circle-outline"></ion-icon>
                </button>
            </div>
            <div class="border-b pb-3 text-lg text-gray-600">
                <details>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Shirt</a>
                        <span>300</span>
                    </div>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Shorts & Jeans</a>
                        <span>30</span>
                    </div>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Jacket</a>
                        <span>50</span>
                    </div>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Dress & Frock</a>
                        <span>120</span>
                    </div>
                    <summary>
                        <div class="flex items-center gap-2">
                            Clothes
                            <img class="w-4 h-4" src="{{ asset('eCommerce_tailwind_template-master') }}/assets/images/icons/dress.svg" alt="productPicture" />
                        </div>
                    </summary>
                </details>
            </div>
            <div class="border-b pb-3 text-lg text-gray-600">
                <details>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Sports</a>
                        <span>300</span>
                    </div>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Formal</a>
                        <span>30</span>
                    </div>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Casual</a>
                        <span>50</span>
                    </div>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Safety Shoes</a>
                        <span>120</span>
                    </div>
                    <summary>
                        <div class="flex items-center gap-2">
                            Footwear
                            <img class="w-4 h-4" src="{{ asset('eCommerce_tailwind_template-master') }}/assets/images/icons/shoes.svg" alt="productPicture" />
                        </div>
                    </summary>
                </details>
            </div>
            <div class="border-b pb-3 text-lg text-gray-600">
                <details>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Earrings</a>
                        <span>300</span>
                    </div>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Couple Rings</a>
                        <span>30</span>
                    </div>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Necklace</a>
                        <span>50</span>
                    </div>
                    <summary>
                        <div class="flex items-center gap-2">
                            Jewelry
                            <img class="w-4 h-4" src="{{ asset('eCommerce_tailwind_template-master') }}/assets/images/icons/jewelry.svg" alt="productPicture" />
                        </div>
                    </summary>
                </details>
            </div>
            <div class="border-b pb-3 text-lg text-gray-600">
                <details>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Clothes Perfume</a>
                        <span>300</span>
                    </div>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Deodorant</a>
                        <span>30</span>
                    </div>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Jacket</a>
                        <span>50</span>
                    </div>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Dress & Frock</a>
                        <span>120</span>
                    </div>
                    <summary>
                        <div class="flex items-center gap-2">
                            Perfume
                            <img class="w-4 h-4" src="{{ asset('eCommerce_tailwind_template-master') }}/assets/images/icons/perfume.svg" alt="productPicture" />
                        </div>
                    </summary>
                </details>
            </div>
            <div class="border-b pb-3 text-lg text-gray-600">
                <details>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Shampoo</a>
                        <span>300</span>
                    </div>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Sunscreen</a>
                        <span>30</span>
                    </div>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Body Wash</a>
                        <span>50</span>
                    </div>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Makeup Kit</a>
                        <span>120</span>
                    </div>
                    <summary>
                        <div class="flex items-center gap-2">
                            Cosmetics
                            <img class="w-4 h-4" src="{{ asset('eCommerce_tailwind_template-master') }}/assets/images/icons/cosmetics.svg" alt="productPicture" />
                        </div>
                    </summary>
                </details>
            </div>
            <div class="border-b pb-3 text-lg text-gray-600">
                <details>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Sunglasses</a>
                        <span>23</span>
                    </div>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Lenses</a>
                        <span>53</span>
                    </div>
                    <summary>
                        <div class="flex items-center gap-2">
                            Glasses
                            <img class="w-4 h-4" src="{{ asset('eCommerce_tailwind_template-master') }}/assets/images/icons/glasses.svg" alt="productPicture" />
                        </div>
                    </summary>
                </details>
            </div>
            <div class="border-b pb-3 text-lg text-gray-600">
                <details>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Wallet</a>
                        <span>300</span>
                    </div>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Purse</a>
                        <span>30</span>
                    </div>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Gym Backpack</a>
                        <span>50</span>
                    </div>
                    <div class="flex justify-between items-baseline text-sm">
                        <a href="#">Shopping Bag</a>
                        <span>120</span>
                    </div>
                    <summary>
                        <div class="flex items-center gap-2">
                            Bags
                            <img class="w-4 h-4" src="{{ asset('eCommerce_tailwind_template-master') }}/assets/images/icons/bag.svg" alt="productPicture" />
                        </div>
                    </summary>
                </details>
            </div>
        </div>

        <div class="bestsellers w-full h-auto mt-2 flex flex-col items-start justify-start gap-4">
            <h2 class="text-lg font-semibold">BEST SELLERS</h2>
            <div class="flex items-center justify-start gap-2">
                <div class="w-20 h-20 p-2 border shadow-lg bg-gray-300/20 rounded-md">
                    <img class="w-full h-full" src="{{ asset('eCommerce_tailwind_template-master') }}/assets/images/products/1.jpg" alt="" />
                </div>
                <div class="text-gray-700">
                    <h4 class="text-gray-900">Baby Fabric Shoes</h4>
                    <div class="stars text-yellow-500">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-half-outline"></ion-icon>
                    </div>
                    <div class="flex items-center justify-start gap-4">
                        <s class="text-gray-500">$14.00</s> <strong>$7.00</strong>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-start gap-2">
                <div class="w-20 h-20 p-2 border shadow-lg bg-gray-300/20 rounded-md">
                    <img class="w-full h-full" src="{{ asset('eCommerce_tailwind_template-master') }}/assets/images/products/2.jpg" alt="" />
                </div>
                <div class="text-gray-700">
                    <h4 class="text-gray-900">Men's Hoodies T-Shirt</h4>
                    <div class="stars text-yellow-500">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-half-outline"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                    </div>
                    <div class="flex items-center justify-start gap-4">
                        <s class="text-gray-500">$5.00</s> <strong>$2.00</strong>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-start gap-2">
                <div class="w-20 h-20 p-2 border shadow-lg bg-gray-300/20 rounded-md">
                    <img class="w-full h-full" src="{{ asset('eCommerce_tailwind_template-master') }}/assets/images/products/3.jpg" alt="" />
                </div>
                <div class="text-gray-700">
                    <h4 class="text-gray-900">Girls T-Shirt</h4>
                    <div class="stars text-yellow-500">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-half-outline"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                    </div>
                    <div class="flex items-center justify-start gap-4">
                        <s class="text-gray-500">$10.00</s> <strong>$5.00</strong>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-start gap-2">
                <div class="w-20 h-20 p-2 border shadow-lg bg-gray-300/20 rounded-md">
                    <img class="w-full h-full" src="{{ asset('eCommerce_tailwind_template-master') }}/assets/images/products/4.jpg" alt="" />
                </div>
                <div class="text-gray-700">
                    <h4 class="text-gray-900">Woolen Hat For Men</h4>
                    <div class="stars text-yellow-500">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-half-outline"></ion-icon>
                    </div>
                    <div class="flex items-center justify-start gap-4">
                        <s class="text-gray-500">$24.00</s> <strong>$17.00</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
