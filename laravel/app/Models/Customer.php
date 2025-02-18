<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Define the table name (optional if it follows Laravel's convention)
    protected $table = 'customers';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'user_id', 
        'first_name', 
        'last_name', 
        'phone'
    ];

    // Define the relationship with the 'User' model (one-to-one)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

