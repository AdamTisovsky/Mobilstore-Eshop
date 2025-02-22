<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    
    public function run(): void
    {
        
        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'username' => "user{$i}",
                'email' => "user{$i}@example.com",
                'is_admin' => false,
                'password' => Hash::make('123'), 
            ]);
        }

        User::create([
            'username' => "admin",
            'email' => "admin@example.com",
            'is_admin' => true,
            'password' => Hash::make('admin'), 
        ]);
        
    }
}