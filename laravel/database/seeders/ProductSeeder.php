<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() :void 
    {
        Product::insert([
            [
                'name' => 'Iphone 15',
                'description' => 'The iPhone 15 is Apples latest flagship smartphone, offering a sleek design and advanced features that elevate the user experience. It combines cutting-edge technology with a user-friendly interface, making it a perfect choice for both casual users and tech enthusiasts.',
                'price' => 899.99,
                'stock' => 20,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Iphone 14',
                'description' => 'The iPhone 14, released by Apple, offers cutting-edge technology and innovative features.',
                'price' => 699.99,
                'stock' => 15,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Iphone 13',
                'description' => 'The iPhone 13, released by Apple in 2021, balances advanced features and affordability.',
                'price' => 499.99,
                'stock' => 23,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'name' => 'Iphone 12',
                'description' => 'The iPhone 12, released by Apple in 2020, marked a significant upgrade with a redesigned look and enhanced features',
                'price' => 449.99,
                'stock' => 7,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Iphone 11',
                'description' => 'The iPhone 11, released by Apple in 2019, offers a solid combination of performance, camera quality, and value for money.',
                'price' => 399.99,
                'stock' => 13,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'name' => 'Dell UltraSharp U2720Q',
                'description' => 'A high-end monitor with excellent color reproduction and HDR support, perfect for professionals.',
                'price' => 550.00,
                'stock' => 8,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'name' => 'Samsung Odyssey G7',
                'description' => 'A gaming-focused monitor offering an ultra-smooth experience with high refresh rates and deep contrast.',
                'price' => 600.00,
                'stock' => 25,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'name' => 'LG 27GN950-B',
                'description' => 'A top-tier 4K monitor designed for gaming with fast refresh rates and impressive color precision.',
                'price' => 700.00,
                'stock' => 5,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'name' => 'BenQ PD2700U',
                'description' => 'A professional-grade 4K monitor designed for creative work, offering excellent color accuracy and detailed images.',
                'price' => 500.00,
                'stock' => 14,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'name' => 'ASUS TUF Gaming VG27AQ',
                'description' => 'A versatile and affordable gaming monitor with a fast refresh rate, ideal for both casual and competitive gamers.',
                'price' => 350.00,
                'stock' => 34,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'name' => 'LG OLED C1 Series',
                'description' => 'A premium OLED TV with exceptional picture quality, ideal for movie lovers and gamers.',
                'price' => 1500.00,
                'stock' => 5,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'name' => 'Samsung QN90B Neo QLED',
                'description' => 'A high-end QLED TV with excellent brightness and contrast, perfect for HDR content and bright spaces.',
                'price' => 1300.00,
                'stock' => 2,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sony A8H OLED',
                'description' => 'A high-performance OLED TV with outstanding color and contrast, offering a cinematic viewing experience.',
                'price' => 1600.00,
                'stock' => 11,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'name' => 'TCL 6-Series R646',
                'description' => 'A budget-friendly 4K QLED TV with excellent picture quality and smart TV features, ideal for everyday use.',
                'price' => 800.00,
                'stock' => 9,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'name' => 'Vizio P-Series Quantum',
                'description' => 'A great value QLED TV with excellent color and gaming features at a competitive price point.',
                'price' => 900.00,
                'stock' => 8,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'name' => 'Apple MacBook Air',
                'description' => 'A sleek, lightweight laptop with Apples M2 chip offering a balance of power, performance, and portability.',
                'price' => 999.99,
                'stock' => 17,
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'name' => 'Dell XPS 13',
                'description' => 'A high-end ultrabook offering powerful performance and a beautiful display, ideal for professionals and students.',
                'price' => 1200.00,
                'stock' => 6,
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'HP Spectre x360',
                'description' => 'A versatile 2-in-1 ultrabook with premium design and performance, perfect for creative professionals and everyday tasks.',
                'price' => 1400.00,
                'stock' => 23,
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'name' => 'Lenovo ThinkPad X1 Carbon Gen 10',
                'description' => 'A durable, high-performance business laptop with a slim design and strong security features.',
                'price' => 1500.00,
                'stock' => 11,
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Asus ROG Zephyrus G14',
                'description' => 'A compact yet powerful gaming laptop with great performance and portability for gamers and content creators.',
                'price' => 1500.00,
                'stock' => 34,
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ]

        ]);
    }
}