<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Assume cart_ids and product_ids already exist
        $cartIds = DB::table('carts')->pluck('id')->toArray();
        $productIds = DB::table('products')->pluck('id')->toArray();

        if (empty($cartIds) || empty($productIds)) {
            $this->command->info('No carts or products found. Please seed carts and products first.');
            return;
        }

        foreach (range(1, 50) as $index) {
            DB::table('cart_items')->insert([
                'cart_id' => $cartIds[array_rand($cartIds)],
                'product_id' => $productIds[array_rand($productIds)],
                'quantity' => rand(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}