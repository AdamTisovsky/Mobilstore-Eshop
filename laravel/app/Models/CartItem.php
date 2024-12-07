<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    // Define the table name (optional if it follows Laravel's convention)
    protected $table = 'cart_items';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'cart_id',
        'product_id',
        'quantity'
    ];

    // Define the relationship with the 'Cart' model (many-to-one)
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    // Define the relationship with the 'Product' model (many-to-one)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}