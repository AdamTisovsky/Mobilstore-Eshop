<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use App\Models\Address;
use App\Models\user;
use App\Models\Order;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'meno' => 'required|string|max:255',
            'priezvisko' => 'required|string|max:255',
            'telefon' => 'required|string|max:20',
            'krajina' => 'required|string|max:255',
            'mesto' => 'required|string|max:255',
            'ulica' => 'required|string|max:255',
            'psc' => 'required|string|max:20',
            'cislo_domu' => 'required|string|max:20',
            'platba' => 'required|string|in:dobierka,karta',
            'doprava' => 'required|string|in:kurier,posta,osobne',
        ]);

        DB::beginTransaction(); // Začiatok transakcie

        try {
            // Uloženie zákazníka
            $customer = Customer::create([
                'first_name' => $request->meno,
                'last_name' => $request->priezvisko,
                'phone' => $request->telefon,
            ]);

            // Uloženie adresy
            $address = Address::create([
                'customer_id' => $customer->id,
                'country' => $request->krajina,
                'city' => $request->mesto,
                'street' => $request->ulica,
                'zip_code' => $request->psc,
                'home_number' => $request->cislo_domu,
            ]);

            // Uloženie objednávky
            $order = Order::create([
                'customer_id' => $customer->id,
                'payment' => $request->platba,
                'shipping' => $request->doprava,
            ]);

            DB::commit(); // Potvrdenie transakcie

            return redirect()->back()->with('success', 'Objednávka bola úspešne odoslaná.');
        } catch (\Exception $e) {
            DB::rollBack(); // Vrátenie zmien v prípade chyby
            return redirect()->back()->with('error', 'Nastala chyba pri spracovaní objednávky.');
        }
    }
    
    
    
    public function orderComplete()
    {
        $order = Order::where('user_id', Auth::id())->latest()->first(); // Posledná objednávka prihláseného používateľa
    
        if (!$order) {
            return redirect()->route('home')->with('error', 'Žiadna objednávka nebola nájdená.');
        }
    
        return view('ordercomplete', compact('order'));
    }
    

}
