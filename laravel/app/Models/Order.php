<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Define the table name (optional if it follows Laravel's convention)
    protected $table = 'orders';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'customer_id',
        'payment',
        'shipping',
        'total',
        'status'
    ];

    // Define the relationship with the 'Customer' model (many-to-one)
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Define the relationship with the 'OrderItem' model (one-to-many)
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    // Optionally, you can define a method for payment if you have a separate payment model
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}