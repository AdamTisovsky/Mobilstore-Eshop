<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DetailPageController extends Controller
{
    public function index()
    {

        
        return view('Detailpage'); 

       
    }

    public function show($id)
    {
        
        $product = Product::with('images')->findOrFail($id);  // Fetch product by ID
      
        
        return view('detailpage', compact('product'));
    }
}
