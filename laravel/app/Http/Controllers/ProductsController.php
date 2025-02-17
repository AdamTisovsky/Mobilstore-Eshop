<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\Category;
use App\Models\Image;
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


    /*pridanie produktu*/
    public function store(Request $request)
    {
        $request->validate([
            'nazov' => 'required|string|max:255',
            'popis' => 'required|string',
            'cena' => 'required|numeric|min:0',
            'pocet' => 'required|integer|min:0',
            'category' => 'required|integer|in:1,2,3,4',
            'nazov_param' => 'required|array',
            'hodnota_param' => 'required|array',
            'hodnota_param.*' => 'required|string|min:1', // Každá hodnota musí byť vyplnená
            'obrazok' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Uloženie produktu
        $product = Product::create([
            'name' => $request->nazov,
            'description' => $request->popis,
            'price' => $request->cena,
            'stock' => $request->pocet,
            'category_id' => $request->category,
        ]);
    
        // Debugging - Výpis hodnôt do logu pred uložením
        \Log::info('Product ID: ' . $product->id);
        \Log::info('Attributes:', ['nazov_param' => $request->nazov_param, 'hodnota_param' => $request->hodnota_param]);
    
        // Uloženie parametrov do `product_attributes`
        foreach ($request->nazov_param as $key => $paramName) {
            if (!empty($paramName) && !empty($request->hodnota_param[$key])) {
                ProductAttribute::create([
                    'product_id' => $product->id,
                    'attribute_name' => $paramName,
                    'attribute_value' => $request->hodnota_param[$key], // Zmena na správny názov
                ]);
            }
        }
    
        // Uloženie obrázka
        if ($request->hasFile('obrazok')) {
            $path = $request->file('obrazok')->store('product_images', 'public');
    
            Image::create([
                'product_id' => $product->id,
                'image_path' => $path,
            ]);
        }
    
        return redirect()->back()->with('success', 'Produkt bol úspešne pridaný.');
    }
    
    
}