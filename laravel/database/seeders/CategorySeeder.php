<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed some example categories
        Category::create(['name' => 'Mobil']);
        Category::create(['name' => 'TV']);
        Category::create(['name' => 'Monitor']);
        Category::create(['name' => 'Notebook']);
    }
}