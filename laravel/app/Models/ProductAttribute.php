<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasFactory;

    // Define the table name (optional if it follows Laravel's convention)
    protected $table = 'product_attributes';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'product_id', 
        'attribute_name', 
        'attribute_value'
    ];

    // Define the relationship with the 'Product' model (many-to-one)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}