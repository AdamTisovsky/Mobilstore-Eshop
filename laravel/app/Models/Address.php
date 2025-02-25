<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'address';

    protected $fillable = [
        'customer_id',
        'country',
        'city',
        'street',
        'zip_code',
        'home_number'
    ];

    /*prepojenie tabulky customers*/
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}