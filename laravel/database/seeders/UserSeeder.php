<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        for ($i = 1; $i <= 20; $i++) {
            User::create([
                'username' => "user{$i}",
                'email' => "user{$i}@example.com",
                'is_admin' => false,
                'password' => Hash::make('123'), // Hash the password for security
            ]);
        }
        
    }
}