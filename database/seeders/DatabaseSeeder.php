<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Product::factory(10)->create();
        \App\Models\Order::factory(10)->hasAttached(
            Product::factory()->count(3),
            ['price' => 1000, 'quantity' => 5]
        )->create();
    }
}
