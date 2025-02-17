<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
                [
                    'user_id' => 10, 
                    'first_name' => 'Peter',
                    'last_name' => 'Novák',
                    'phone' => '+421912345678',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 12, 
                    'first_name' => 'Jana',
                    'last_name' => 'Kováčová',
                    'phone' => '+421911987654',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 17, 
                    'first_name' => 'Marek',
                    'last_name' => 'Horák',
                    'phone' => '+421902345678',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
    }
}
