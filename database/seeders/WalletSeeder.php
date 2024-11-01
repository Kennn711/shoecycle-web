<?php

namespace Database\Seeders;

use App\Models\Wallet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $myWallets = [
            ['wallets' => "
             37912484
            "]
        ];

        foreach ($myWallets as $key => $val) {
            Wallet::create($val);
        }
    }
}
