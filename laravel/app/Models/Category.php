<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Define the table name (optional if it follows Laravel's convention)
    protected $table = 'categories';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'name'
    ];

    // Define the relationship with the 'Product' model (one-to-many)
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
