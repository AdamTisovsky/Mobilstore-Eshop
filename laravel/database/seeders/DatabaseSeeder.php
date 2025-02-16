<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

public function run(): void
{
    $this->call(ProductSeeder::class);
    $this->call([
        CartSeeder::class,
    ]);
}
}
