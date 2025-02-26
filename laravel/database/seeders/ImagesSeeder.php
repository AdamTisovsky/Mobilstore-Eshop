<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('images')->insert([
            [
                'image_path' => 'iphone_12-removebg-preview.png',
                'alt_text' => 'mobil',
                'product_id' => 4, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => 'iphone 14.png',
                'alt_text' => 'mobil',
                'product_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => '15_pro_max-removebg-preview.png',
                'alt_text' => 'mobil',
                'product_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => '13-removebg-preview.png',
                'alt_text' => 'mobil',
                'product_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => 'iphone 11.png',
                'alt_text' => 'mobil',
                'product_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],











/*******************************/




            [
                'image_path' => 'samsung-monitor-led-27-removebg-preview.png',
                'alt_text' => 'monitor',
                'product_id' => 7, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => 'images-removebg-preview.png',
                'alt_text' => 'monitor',
                'product_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => 'benq-removebg-preview.png',
                'alt_text' => 'monitor',
                'product_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => 'herny-monitor-asus-tuf-gaming-vg27aq-90lm0500-b01370-408688-removebg-preview.png',
                'alt_text' => 'monitor',
                'product_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => 'dell-removebg-preview.png',
                'alt_text' => 'monitor',
                'product_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],









            [
                'image_path' => 'OLED55C1PVB-removebg-preview.png',
                'alt_text' => 'TV',
                'product_id' => 11, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => 'ae-qled-qn90b-qa75qn90bauxzn-531523268-removebg-preview.png',
                'alt_text' => 'TV',
                'product_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => 'Sony-KD-65X75L-Television-493837810-i-1-1200Wx1200H-300Wx300H-removebg-preview.png',
                'alt_text' => 'TV',
                'product_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => '81XHkz-8g1L-removebg-preview.png',
                'alt_text' => 'TV',
                'product_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => '716A15ELFtL-removebg-preview.png',
                'alt_text' => 'TV',
                'product_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],











            [
                'image_path' => 's24.png',
                'alt_text' => 'mobil',
                'product_id' => 21, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => 'a55.png',
                'alt_text' => 'mobil',
                'product_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => 'a35.png',
                'alt_text' => 'mobil',
                'product_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => 'galaxy s23.png',
                'alt_text' => 'mobil',
                'product_id' => 24,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => 's25 ultra.png',
                'alt_text' => 'mobil',
                'product_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],




















            [
                'image_path' => 'mac air.png',
                'alt_text' => 'notebook',
                'product_id' => 16, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => 'dell laptop.png',
                'alt_text' => 'notebook',
                'product_id' => 17,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => 'hp laptop.png',
                'alt_text' => 'notebook',
                'product_id' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => 'lenovo laptop.png',
                'alt_text' => 'notebook',
                'product_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => 'asus rogue laptop.png',
                'alt_text' => 'notebook',
                'product_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
         
        ]);
    }
}