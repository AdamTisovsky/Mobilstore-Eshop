<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
 
    public function run(): void
    {
       
        $userIds = DB::table('users')->pluck('id')->toArray();

        if (empty($userIds)) {
            $this->command->info('No users found. Please seed the users table first.');
            return;
        }

        foreach ($userIds as $userId) {
            DB::table('carts')->insert([
                'user_id' => $userId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $this->command->info('Carts seeded successfully!');
    }
}