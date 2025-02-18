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
                    'user_id' => 22, 
                    'first_name' => 'Jana',
                    'last_name' => 'Kováčová',
                    'phone' => '+421911987654',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                
            ]);
    }
}
