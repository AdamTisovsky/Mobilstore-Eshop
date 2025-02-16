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
    // Získame košík aktuálneho používateľa
    $cart = Cart::where('user_id', auth()->id())->first();

    if (!$cart) {
        return view('cart', ['cartItems' => [], 'totalPrice' => 0])
            ->with('info', 'Váš košík je prázdny.');
    }

    // Načítame položky košíka so súvisiacim produktom a jeho obrázkom
    $cartItems = CartItem::where('cart_id', $cart->id)
        ->with(['product.images']) // Načíta produkty aj s ich obrázkami
        ->get();

    // Vypočítame celkovú cenu košíka
    $totalPrice = $cartItems->sum(function ($item) {
        return $item->product->price * $item->quantity;
    });

    return view('cart', compact('cartItems', 'totalPrice'));
}

    

    public function remove($id)
    {
        // Find the cart item by its ID
        $cartItem = CartItem::findOrFail($id);

        // Remove the cart item
        $cartItem->delete();

        // Optionally, return a response or redirect
        return redirect()->route('cart')->with('success', 'Item removed from the cart');
    }

    public function add($id)
{
    $product = Product::findOrFail($id);

    // Skontrolujeme, či je produkt na sklade
    if ($product->stock <= 0) {
        return redirect()->back()->with('error', 'Produkt nie je na sklade.');
    }

    // Nájdeme alebo vytvoríme košík pre aktuálneho používateľa
    $cart = Cart::firstOrCreate(['user_id' => auth()->id()]);

    // Skontrolujeme, či už produkt existuje v košíku
    $cartItem = CartItem::where('product_id', $product->id)
                        ->where('cart_id', $cart->id)
                        ->first();

    if ($cartItem) {
        // Ak produkt už existuje v košíku, skontrolujeme sklad
        if ($product->stock < ($cartItem->quantity + 1)) {
            return redirect()->back()->with('error', 'Nie je dostatok kusov na sklade.');
        }

        // Zvýšime množstvo v košíku
        $cartItem->quantity += 1;
        $cartItem->save();
    } else {
        // Ak produkt neexistuje v košíku, pridáme nový záznam
        CartItem::create([
            'cart_id' => $cart->id,
            'product_id' => $product->id,
            'quantity' => 1, // Predvolená hodnota
        ]);
    }

    // Znížime stav skladu o 1
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