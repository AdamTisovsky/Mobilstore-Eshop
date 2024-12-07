<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    // Define the table name (optional if it follows Laravel's convention)
    protected $table = 'images';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'product_id',
        'image_path',
        'alt_text'
    ];

    // Define the relationship with the 'Product' model (many-to-one)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}