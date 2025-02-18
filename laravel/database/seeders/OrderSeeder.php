<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        // Uistíme sa, že zákazníci existujú
        $customers = Customer::pluck('id')->toArray();

        if (empty($customers)) {
            $this->command->warn('❗ Žiadni zákazníci v databáze. Najskôr spusť CustomerSeeder.');
            return;
        }

        DB::table('orders')->insert([
            [
                'customer_id' => 28,
                'payment' => 'karta',
                'shipping' => 'kurier',
                'total' => 99.99,
                'status' => 'Doručené',
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
         
        ]);
    }
}
