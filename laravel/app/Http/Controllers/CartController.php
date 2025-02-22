<?php

namespace App\Http\Controllers;

use App\Models\CartItem; // Import the Cart model
use App\Models\product;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            // Prihlásený používateľ – získame jeho košík z DB
            $cart = Cart::where('user_id', auth()->id())->first();

            if (!$cart) {
                return view('cart', ['cartItems' => [], 'totalPrice' => 0])
                    ->with('info', 'Váš košík je prázdny.');
            }

            $cartItems = CartItem::where('cart_id', $cart->id)
                ->with(['product.images'])
                ->get();
        } else {
            // Neprihlásený používateľ – získame košík zo session
            $cartItems = collect(session('cart', []));
        }

        // Vypočíta sa celková cena
        $totalPrice = $cartItems->sum(fn($item) => $item['price'] * $item['quantity']);

        return view('cart', compact('cartItems', 'totalPrice'));
    }

    public function remove($id)
    {
        if (auth()->check()) {
            // ✅ Prihlásený používateľ – nájdenie položky v košíku
            $cartItem = CartItem::findOrFail($id);
            $product = Product::findOrFail($cartItem->product_id);
    
            // ✅ Pripočítanie množstva späť do skladu
            $product->stock += $cartItem->quantity;
            $product->save();
    
            // ✅ Odstránenie položky z databázy
            $cartItem->delete();
        } else {
            // ✅ Neprihlásený používateľ – odstráni zo session
            $cart = session('cart', []);
            $restoredQuantity = 0;
    
            // ✅ Pripočítanie odstráneného množstva do skladu
            foreach ($cart as $key => $item) {
                if ($item['product_id'] == $id) {
                    $restoredQuantity = $item['quantity'];
                    unset($cart[$key]); // Odstránenie produktu zo session
                    break;
                }
            }
    
            // ✅ Aktualizácia skladu
            if ($restoredQuantity > 0) {
                $product = Product::findOrFail($id);
                $product->stock += $restoredQuantity;
                $product->save();
            }
    
            session(['cart' => array_values($cart)]);
        }
    
        return redirect()->route('cart')->with('success', 'Produkt bol odstránený z košíka a pridaný späť do skladu.');
    }
    

    public function add($id)
    {
        $product = Product::findOrFail($id);
    
        if ($product->stock <= 0) {
            return redirect()->back()->with('error', 'Produkt nie je na sklade.');
        }
    
        if (auth()->check()) {
            // Prihlásený používateľ – pridáme do DB
            $cart = Cart::firstOrCreate(['user_id' => auth()->id()]);
    
            $cartItem = CartItem::where('product_id', $product->id)
                ->where('cart_id', $cart->id)
                ->first();
    
            if ($cartItem) {
                $cartItem->quantity += 1;
                $cartItem->save();
            } else {
                CartItem::create([
                    'cart_id' => $cart->id,
                    'product_id' => $product->id,
                    'quantity' => 1,
                ]);
            }
        } else {
            // Neprihlásený používateľ – pridáme do session
            $cart = session('cart', []);
            $found = false;
    
            foreach ($cart as &$item) {
                if ($item['product_id'] == $id) {
                    $item['quantity'] += 1;
                    $found = true;
                    break;
                }
            }
    
            if (!$found) {
                $cart[] = [
                    'product_id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => 1,
                    'image' => $product->images->first()->image_path ?? 'default.jpg'
                ];
            }
    
            session(['cart' => $cart]);
        }
    
        $product->stock -= 1;
        $product->save();
    
        return redirect()->back()->with('success', 'Produkt bol pridaný do košíka.');
    }
    

public function buyNow($id)
{
    $this->add($id); // Voláme existujúcu metódu add() na pridanie do košíka

    return redirect()->route('cart')->with('success', 'Produkt bol pridaný do košíka. Skontrolujte objednávku.');
}


}