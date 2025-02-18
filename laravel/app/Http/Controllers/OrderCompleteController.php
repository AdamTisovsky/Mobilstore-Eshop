<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderCompleteController extends Controller
{
    public function index()
    {
        return view('ordercomplete');
    }
}
