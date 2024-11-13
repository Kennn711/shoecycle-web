<?php

namespace App\Http\Controllers;

use App\Models\Shoes;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $transactions = Transaction::orderBy('created_at', 'desc')->take(5)->get();

        $customerCount = User::where('role', 'customer')->count();
        $driverCount = User::where('role', 'driver')->count();
        $shoesCount = Shoes::count();
        $transactionCount = Transaction::count();

        return view("page.dashboard", compact('customerCount', 'driverCount', 'shoesCount', 'transactionCount', 'transactions'));
    }
}
