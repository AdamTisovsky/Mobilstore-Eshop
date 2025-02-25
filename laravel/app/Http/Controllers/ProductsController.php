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
        
        $category_id = $request->query('category_id');
    
        /*Nacitanie produktov podla kategorie*/
        $products = Product::with(['images', 'category', 'productAttributes'])
            ->when($category_id, function ($query) use ($category_id) {
                return $query->where('category_id', $category_id);
            })
            ->orderBy('price', 'asc')
            ->get();
    
        /* ziskanie id produktov po filtrovani podla kategoree*/
        $productIds = $products->pluck('id');
    
        /* ziskanie unikatnych značiek len pre tieto produkty*/
        $brands = ProductAttribute::whereIn('product_id', $productIds)
            ->where('attribute_name', 'Vyrobca')
            ->distinct()
            ->pluck('attribute_value');
    
        return view('products', compact('products', 'category_id', 'brands'));
    }
    

    public function show($id)
    {
    $product_attributes = ProductAttribute::where('product_id', $id)->get();
      $product = Product::with('images')->find($id);

        if (!$product) {
             return abort(404);
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
            'hodnota_param.*' => 'required|string|min:1',
            'obrazok' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $product = Product::create([
            'name' => $request->nazov,
            'description' => $request->popis,
            'price' => $request->cena,
            'stock' => $request->pocet,
            'category_id' => $request->category,
        ]);
    
        \Log::info('Product ID: ' . $product->id);
        \Log::info('Attributes:', ['nazov_param' => $request->nazov_param, 'hodnota_param' => $request->hodnota_param]);
    
        foreach ($request->nazov_param as $key => $paramName) {
            if (!empty($paramName) && !empty($request->hodnota_param[$key])) {
                ProductAttribute::create([
                    'product_id' => $product->id,
                    'attribute_name' => $paramName,
                    'attribute_value' => $request->hodnota_param[$key],
                ]);
            }
        }

          
        if ($request->hasFile('obrazok')) {
    
        $fileName = $request->file('obrazok')->getClientOriginalName();

        $request->file('obrazok')->storeAs('images', $fileName, 'public');

        Image::create([
            'product_id' => $product->id,
            'image_path' => $fileName, 
        ]);
        }

        return redirect()->back()->with('success', 'Produkt bol úspešne pridaný.');



    }

    public function removeproducts()
    {
        $products = Product::all(); 
        return view('removeproducts', compact('products')); 
    }



    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('removeproducts')->with('success', 'Produkt bol odstránený.');
    }
    
    public function filtration(Request $request)
    {
        
        /* yiskanie filtrov z formulara*/
        $category_id = $request->input('category_id');
        $price_min = $request->input('price_min');
        $price_max = $request->input('price_max');
        $selected_brand = $request->input('brand');
    
        $products = Product::with(['images', 'category', 'productAttributes'])
            ->when($category_id, function ($query) use ($category_id) {
                return $query->where('category_id', $category_id);
            })
            ->when($price_min, function ($query) use ($price_min) {
                return $query->where('price', '>=', $price_min);
            })
            ->when($price_max, function ($query) use ($price_max) {
                return $query->where('price', '<=', $price_max);
            })
            ->when(!empty($selected_brand) && $selected_brand !== "Všetko", function ($query) use ($selected_brand) {
                return $query->whereHas('productAttributes', function ($query) use ($selected_brand) {
                    return $query->where('attribute_name', 'Vyrobca')->where('attribute_value', $selected_brand);
                });
            })
            ->orderBy('price', 'asc')
            ->get();
    
        /* ziskanie unikatnych znaciek len pre filtrovane produkty*/
        $productIds = $products->pluck('id');
    
        $brands = ProductAttribute::whereIn('product_id', $productIds)
            ->where('attribute_name', 'Vyrobca')
            ->distinct()
            ->pluck('attribute_value');
    
        return view('products', compact('products', 'category_id', 'brands', 'selected_brand', 'price_min', 'price_max'));
    }

        public function searchProducts(Request $request)
        {
            $searchQuery = $request->input('query');
            $category_id = null;
        
        
            /* Vyhladanie produktov case insensitive */
            $products = Product::with('images')
                ->whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($searchQuery) . '%'])
                ->orderBy('price', 'asc')
                ->get();

            $productIds = $products->pluck('id');

            $brands = ProductAttribute::whereIn('product_id', $productIds)
            ->where('attribute_name', 'Vyrobca')
            ->distinct()
            ->pluck('attribute_value');
        
            return view('products', compact('products', 'searchQuery','brands','category_id'));
        }
          
    }
    

