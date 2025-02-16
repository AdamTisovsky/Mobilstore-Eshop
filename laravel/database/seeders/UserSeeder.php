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
        
        User::create([
            'username' => '456',
            'email' => '456@example.com',
            'is_admin' => false,
            'password' => Hash::make('123'), // Hash the password for security
        ]);

        User::create([
            'username' => '789',
            'email' => '789@example.com',
            'is_admin' => false,
            'password' => Hash::make('123'), // Hash the password for security
        ]);

        User::create([
            'username' => 'tisovsky',
            'email' => 'tisovsky@example.com',
            'is_admin' => true,
            'password' => Hash::make('123'), // Hash the password for security
        ]);
        
    }
}