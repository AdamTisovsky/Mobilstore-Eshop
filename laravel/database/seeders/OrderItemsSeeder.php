<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class OrderItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Získanie existujúcich objednávok a produktov
        $orders = Order::pluck('id')->toArray();
        $products = Product::pluck('id')->toArray();

        if (empty($orders) || empty($products)) {
            $this->command->warn('❗ Žiadne objednávky alebo produkty v databáze. Najskôr spusť OrderSeeder a ProductSeeder.');
            return;
        }

        // Vloženie testovacích položiek do objednávok
        DB::table('order_items')->insert([
            [
                'order_id' => $orders[array_rand($orders)], // Náhodná objednávka
                'product_id' => $products[array_rand($products)], // Náhodný produkt
                'quantity' => rand(1, 5), // Náhodné množstvo
                'price' => rand(10, 200), // Náhodná cena
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => $orders[array_rand($orders)],
                'product_id' => $products[array_rand($products)],
                'quantity' => rand(1, 5),
                'price' => rand(10, 200),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => $orders[array_rand($orders)],
                'product_id' => $products[array_rand($products)],
                'quantity' => rand(1, 5),
                'price' => rand(10, 200),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
