<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\ShoesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    // Fungsi Logout
    Route::get("logout", [SessionController::class, "logout"])->name("auth.logout");

    // Tampilan Admin
    Route::get("dashboard", [DashboardController::class, 'index'])->name("page.dashboard");
    Route::get("transaction", [TransactionController::class, 'index'])->name("transaction.index");

    // Switch Status Transaksi (Admin)
    Route::post("status/transaksi/{id}", [TransactionController::class, 'transactionStatus'])->name("transaction.status");

    // Switch Status Pengiriman (Driver)
    Route::post("status/driver/{id}", [TransactionController::class, 'deliveryStatus'])->name('delivery.status');

    // Table CRUD Sepatu
    Route::resource("shoes", ShoesController::class);

    // Tampilan Customer
    Route::get("payment", [TransactionController::class, 'payment'])->name("payment.view");
    Route::get("order", [ShoesController::class, 'order'])->name("order.view");
    Route::get("order-detail/{id}/order", [ShoesController::class, 'orderDetail'])->name("order-detail.view");
    Route::get("transaction-history", [TransactionController::class, "indexCustomer"])->name("transaction-customer.index");

    // Tampilan Cart
    Route::post("cart/add/{id}", [CartController::class, 'addToCart'])->name("add.cart");
    Route::get("cart", [CartController::class, 'viewCart'])->name("view.cart");
    Route::delete("cart/remove/{id}", [CartController::class, 'removeFromCart'])->name("remove.cart");
    Route::post("cart/clear", [CartController::class, 'clearCart'])->name('clear.cart');

    // Checkout / Pembayaran
    Route::get("checkout", [TransactionController::class, 'checkout'])->name('checkout');
    Route::post("checkout-detail", [TransactionController::class, 'storeTransaction'])->name('checkout.detail');

    // Melengkapi Profil Diri (Alamat dan No HP)
    Route::get("complete-profile", [SessionController::class, 'completeProfile'])->name('complete.profile');
    Route::put("complete-profile/store", [SessionController::class, 'storeProfile'])->name('store.profile');

    // Tampilan Driver
    Route::get("ordershoes", [TransactionController::class, 'indexDriver'])->name("ordershoes.view");
    Route::post("add-to-myorder", [TransactionController::class, "addToMyOrder"])->name("add.to.myorder");
    Route::get("myorder", [TransactionController::class, 'myOrder'])->name("myorder.view");
    Route::resource("driver", DriverController::class);
});

// Page Auth (Login / Register)
Route::get("/", [SessionController::class, 'loginPage'])->name("login");
Route::get("register", [SessionController::class, 'registerPage'])->name("register");

// Validasi
Route::post("/register", [SessionController::class, 'register'])->name("auth.register");
Route::post("/login", [SessionController::class, "login"])->name("auth.login");

// Cuman Testing
Route::get("main", function () {
    return view("layouts.main");
});

Route::get("main-customer", function () {
    return view("layouts-customer.index");
});

Route::get("backend", function () {
    return view("backend.main");
});

Route::get("testing", function () {
    return view("layouts-backend/index");
});
