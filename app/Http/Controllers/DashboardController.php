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
        $transactions  = Transaction::orderBy('created_at', 'desc')->limit(5)->get();

        $customerCount = User::where('role', 'customer')->count();
        $driverCount   = User::where('role', 'driver')->count();
        $shoesCount    = Shoes::count();
        $transactionCount = Transaction::count();
        $transactionPendingCount = Transaction::where('transaction_status', 'pending')->count();

        $driverData = User::where('role', 'driver')->limit(5)->get();

        return view("page.dashboard", compact('customerCount', 'driverCount', 'shoesCount', 'transactionCount', 'transactions', 'transactionPendingCount', 'driverData'));
    }
}
