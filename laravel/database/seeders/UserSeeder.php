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
        // Create a regular user
        User::create([
            'username' => '123',
            'email' => '123@example.com',
            'is_admin' => false,
            'password' => Hash::make('123'), // Hash the password for security
        ]);

        // Create an admin user
        User::create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'is_admin' => true,
            'password' => Hash::make('admin'),
        ]);

        

        // Create additional users using a loop/
        
    }
}