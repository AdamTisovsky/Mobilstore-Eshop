<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        // Filtrovanie produktov podľa kategórie (ak je poslaná)
        $category_id = $request->query('category_id'); // ID kategórie z query stringu

        $products = Product::with('images', 'category') // Načítaj obrázky a kategóriu
            ->when($category_id, function ($query) use ($category_id) {
                return $query->where('category_id', $category_id); // Filtruj podľa kategórie
            })
            ->get();

        return view('products', compact('products'));
    }

    public function show($id)
    {
    $product_attributes = ProductAttribute::where('product_id', $id)->get();
      $product = Product::with('images')->find($id);

        if (!$product) {
             return abort(404); // Show 404 if product is not found
        }

       return view('detailpage', compact('product', 'product_attributes'));
    }
}