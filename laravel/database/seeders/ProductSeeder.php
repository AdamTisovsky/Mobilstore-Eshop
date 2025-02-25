<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * 
     *
     * @return void
     */
    public function run() :void 
    {
        Product::insert([
            [
                'id' => 1,
                'name' => 'Iphone 15',
                'description' => 'The iPhone 15 is Apples latest flagship smartphone, offering a sleek design and advanced features that elevate the user experience. It combines cutting-edge technology with a user-friendly interface, making it a perfect choice for both casual users and tech enthusiasts.',
                'price' => 899.99,
                'stock' => 20,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Iphone 14',
                'description' => 'The iPhone 14, released by Apple, offers cutting-edge technology and innovative features.',
                'price' => 699.99,
                'stock' => 15,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Iphone 13',
                'description' => 'The iPhone 13, released by Apple in 2021, balances advanced features and affordability.',
                'price' => 499.99,
                'stock' => 23,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'id' => 4,
                'name' => 'Iphone 12',
                'description' => 'The iPhone 12, released by Apple in 2020, marked a significant upgrade with a redesigned look and enhanced features',
                'price' => 449.99,
                'stock' => 7,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'name' => 'Iphone 11',
                'description' => 'The iPhone 11, released by Apple in 2019, offers a solid combination of performance, camera quality, and value for money.',
                'price' => 399.99,
                'stock' => 13,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now() 
            ],





            /*monitory*/
            [
                'id' => 6,
                'name' => 'Dell UltraSharp U2720Q',
                'description' => 'A high-end monitor with excellent color reproduction and HDR support, perfect for professionals.',
                'price' => 550.00,
                'stock' => 8,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'id' => 7,
                'name' => 'Samsung Odyssey G7',
                'description' => 'A gaming-focused monitor offering an ultra-smooth experience with high refresh rates and deep contrast.',
                'price' => 600.00,
                'stock' => 25,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'id' => 8,
                'name' => 'LG 27GN950-B',
                'description' => 'A top-tier 4K monitor designed for gaming with fast refresh rates and impressive color precision.',
                'price' => 700.00,
                'stock' => 5,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'id' => 9,
                'name' => 'BenQ PD2700U',
                'description' => 'A professional-grade 4K monitor designed for creative work, offering excellent color accuracy and detailed images.',
                'price' => 500.00,
                'stock' => 14,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'id' => 10,
                'name' => 'ASUS TUF Gaming VG27AQ',
                'description' => 'A versatile and affordable gaming monitor with a fast refresh rate, ideal for both casual and competitive gamers.',
                'price' => 350.00,
                'stock' => 34,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now() 
            ],










            [
                'id' => 11,
                'name' => 'LG OLED C1 Series',
                'description' => 'A premium OLED TV with exceptional picture quality, ideal for movie lovers and gamers.',
                'price' => 1500.00,
                'stock' => 5,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'id' => 12,
                'name' => 'Samsung QN90B Neo QLED',
                'description' => 'A high-end QLED TV with excellent brightness and contrast, perfect for HDR content and bright spaces.',
                'price' => 1300.00,
                'stock' => 2,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 13,
                'name' => 'Sony A8H OLED',
                'description' => 'A high-performance OLED TV with outstanding color and contrast, offering a cinematic viewing experience.',
                'price' => 1600.00,
                'stock' => 11,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'id' => 14,
                'name' => 'TCL 6-Series R646',
                'description' => 'A budget-friendly 4K QLED TV with excellent picture quality and smart TV features, ideal for everyday use.',
                'price' => 800.00,
                'stock' => 9,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'id' => 15,
                'name' => 'Vizio P-Series Quantum',
                'description' => 'A great value QLED TV with excellent color and gaming features at a competitive price point.',
                'price' => 900.00,
                'stock' => 8,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now() 
            ],














            [
                'id' => 16,
                'name' => 'Apple MacBook Air',
                'description' => 'A sleek, lightweight laptop with Apples M2 chip offering a balance of power, performance, and portability.',
                'price' => 999.99,
                'stock' => 17,
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'id' => 17,
                'name' => 'Dell XPS 13',
                'description' => 'A high-end ultrabook offering powerful performance and a beautiful display, ideal for professionals and students.',
                'price' => 1200.00,
                'stock' => 6,
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 18,
                'name' => 'HP Spectre x360',
                'description' => 'A versatile 2-in-1 ultrabook with premium design and performance, perfect for creative professionals and everyday tasks.',
                'price' => 1400.00,
                'stock' => 23,
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'id' => 19,
                'name' => 'Lenovo ThinkPad X1 Carbon Gen 10',
                'description' => 'A durable, high-performance business laptop with a slim design and strong security features.',
                'price' => 1500.00,
                'stock' => 11,
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 20,
                'name' => 'Asus ROG Zephyrus G14',
                'description' => 'A compact yet powerful gaming laptop with great performance and portability for gamers and content creators.',
                'price' => 1500.00,
                'stock' => 34,
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],










            
            [
                'id' => 21,
                'name' => 'Samsung Galaxy S24 Ultra S928B 12GB/256GB',
                'description' => 'The Samsung Galaxy S24 Ultra S928B is a premium flagship smartphone featuring a 6.8-inch Dynamic AMOLED 2X display with a 120Hz refresh rate and QHD+ resolution.',
                'price' => 1200.00,
                'stock' => 6,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 22,
                'name' => 'Samsung Galaxy A55',
                'description' => 'The Samsung Galaxy A55 5G is a mid-range smartphone with a 6.6-inch 120Hz Super AMOLED display, Exynos 1480 processor, and up to 12GB RAM.',
                'price' => 350.00,
                'stock' => 7,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 23,
                'name' => 'Samsung Galaxy A35',
                'description' => 'The Samsung Galaxy A35 5G, released in March 2024, is a mid-range smartphone featuring a 6.6-inch Super AMOLED display with a 120Hz refresh rate.',
                'price' => 270.00,
                'stock' => 16,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 24,
                'name' => 'Samsung Galaxy S23',
                'description' => 'The Samsung Galaxy S23 is a compact flagship smartphone with a 6.1-inch Dynamic AMOLED 2X display (120Hz), powered by the Snapdragon 8 Gen 2 for Galaxy.',
                'price' => 800.00,
                'stock' => 6,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 25,
                'name' => 'Samsung Galaxy S25 Ultra',
                'description' => 'The Samsung Galaxy S25 Ultra, announced on January 22, 2025, and released on February 7, 2025, is Samsungs latest flagship smartphone, emphasizing advanced AI integration and enhanced hardware features.',
                'price' => 1700.00,
                'stock' => 10,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
            
            
        ]);
        $maxId = DB::table('products')->max('id');
        DB::statement("SELECT setval('products_id_seq', ?)", [$maxId + 1]);
    }
}