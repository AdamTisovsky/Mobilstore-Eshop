<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $table = 'cart_items';

    protected $fillable = [
        'cart_id',
        'product_id',
        'quantity'
    ];

    /*prepojenie tabulky kosiku*/
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    /*prepojenie tabulky produktov*/
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}