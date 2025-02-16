<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define the table name (optional if it follows Laravel's convention)
    protected $table = 'products';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'name', 
        'description', 
        'price', 
        'stock', 
        'category_id'
    ];

    // Define the relationship with the 'Category' model (many-to-one)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Define the relationship with the 'ProductAttribute' model (one-to-many)
    public function productAttributes()
    {
        return $this->hasMany(ProductAttribute::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'product_id');
    }
}
