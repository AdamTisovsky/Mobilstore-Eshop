<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    // Define the table name (optional if it follows Laravel's convention)
    protected $table = 'order_items';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price'
    ];

    // Define the relationship with the 'Order' model (many-to-one)
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Define the relationship with the 'Product' model (many-to-one)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}