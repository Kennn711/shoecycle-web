<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\ShoesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\TransactionController;



use Illuminate\Support\Facades\Route;

// Page Auth (Login / Register)
Route::get("/", [SessionController::class, 'loginPage'])->name("login");

// Validasi
Route::post("/register", [SessionController::class, 'register'])->name("auth.register");
Route::post("/login", [SessionController::class, "login"])->name("auth.login");

Route::middleware('auth')->group(function () {
    // Fungsi Logout
    Route::get("logout", [SessionController::class, "logout"])->name("auth.logout");

    // Melengkapi Profil Diri (Alamat dan No HP)
    Route::get("complete-profile", [SessionController::class, 'completeProfile'])->name('complete.profile');
    Route::put("complete-profile/store", [SessionController::class, 'storeProfile'])->name('store.profile');
});


// Halaman Admin
Route::group(['middleware' => 'admin'], function () {
    Route::get("dashboard", [DashboardController::class, 'index'])->name("page.dashboard");
    Route::get("transaction", [TransactionController::class, 'index'])->name("transaction.index");

    // Switch Status Transaksi (Admin)
    Route::post("status/transaksi/{id}", [TransactionController::class, 'transactionStatus'])->name("transaction.status");

    // Table CRUD Sepatu
    Route::resource("shoes", ShoesController::class);

    // Table CRUD Driver
    Route::resource("driver", DriverController::class);
});


// Halaman Driver
Route::group(['middleware' => 'driver'], function () {
    Route::get("ordershoes", [TransactionController::class, 'indexDriver'])->name("ordershoes.view");
    Route::post("add-to-myorder", [TransactionController::class, "addToMyOrder"])->name("add.to.myorder");
    Route::get("myorder", [TransactionController::class, 'myOrder'])->name("myorder.view");

    // Switch Status Pengiriman (Driver)
    Route::post("status/driver/{id}", [TransactionController::class, 'deliveryStatus'])->name('delivery.status');
});

// Halaman Customer
Route::group(['middleware' => 'customer'], function () {
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
});



// Cuman Testing
Route::get("main", function () {
    return view("layouts.main");
});
