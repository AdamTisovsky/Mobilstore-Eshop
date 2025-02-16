<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AddProductController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('addproduct', compact('users'));
    }

    
}


