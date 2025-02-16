<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;

class ProductAttributeController extends Controller
{
    public function show($id)
{
    $product = Product::findOrFail($id);
    $product_attributes = ProductAttribute::where('product_id', $id)->get();

    return view('detailpage', compact('product', 'product_attributes'));
}

   
}
