<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminPanelController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('adminpanel', compact('users'));
    }

    public function adminPanel()
    {
    $users = User::all(); 
    return view('adminpanel', compact('users')); 
    }
    
}



