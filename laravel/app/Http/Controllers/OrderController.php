<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Customer;
use App\Models\Address;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\OrderItem;
use App\Models\User;
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
        ]);

        DB::beginTransaction();

        try {
            $userId = auth()->id();

            if (!$userId) {
                // Vytvorenie dočasného zákazníka pre neprihláseného
                $customer = Customer::create([
                    'user_id' => null, // Pre neprihláseného
                    'first_name' => $request->meno,
                    'last_name' => $request->priezvisko,
                    'phone' => $request->telefon,
                ]);
            } else {
                $customer = Customer::firstOrCreate(['user_id' => $userId], [
                    'first_name' => $request->meno,
                    'last_name' => $request->priezvisko,
                    'phone' => $request->telefon,
                ]);
            }

            $address = Address::create([
                'customer_id' => $customer->id,
                'country' => $request->krajina,
                'city' => $request->mesto,
                'street' => $request->ulica,
                'zip_code' => $request->psc,
                'home_number' => $request->cislo_domu,
            ]);

            $order = Order::create([
                'customer_id' => $customer->id,
                'payment' => $request->payment,
                'shipping' => $request->shipping,
                'total' => $request->totalPrice,
                'status' => "spracováva sa",
            ]);

            $this->moveCartToOrder($userId, $order->id);

            DB::commit();

            return view('ordercomplete', compact('order'));
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            return redirect()->route('ordercomplete')->with('error', 'Nastala chyba pri spracovaní objednávky.');
        }
    }

    public function moveCartToOrder($userId, $orderId)
    {
        if ($userId) {
            // Prihlásený – presunieme z databázy
            $cart = Cart::where('user_id', $userId)->first();

            if (!$cart) {
                throw new \Exception("Košík pre používateľa neexistuje.");
            }

            $cartItems = CartItem::where('cart_id', $cart->id)->get();
        } else {
            // Neprihlásený – presunieme zo session
            $cartItems = collect(session('cart', []));
        }

        foreach ($cartItems as $cartItem) {
            OrderItem::create([
                'order_id' => $orderId,
                'product_id' => $cartItem['product_id'],
                'quantity' => $cartItem['quantity'],
                'price' => $cartItem['price'] * $cartItem['quantity'],
            ]);
        }

        if ($userId) {
            CartItem::where('cart_id', $cart->id)->delete();
        } else {
            session()->forget('cart');
        }
    }
}
