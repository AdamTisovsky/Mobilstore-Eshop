<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    // Define the table name (optional if it follows Laravel's convention)
    protected $table = 'address';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'customer_id',
        'country',
        'city',
        'street',
        'zip_code',
        'home_number'
    ];

    // Define the relationship with the 'Customer' model (one-to-one)
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}