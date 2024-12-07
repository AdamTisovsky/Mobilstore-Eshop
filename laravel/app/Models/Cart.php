<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    // Define the table name (optional if it follows Laravel's convention)
    protected $table = 'carts';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'user_id'
    ];

    // Define the relationship with the 'User' model (one-to-one)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with the 'CartItem' model (one-to-many)
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}