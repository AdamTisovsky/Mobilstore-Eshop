<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $totalPrice = $request->totalPrice; 
        return view('payment', compact('totalPrice'));
    }
}
