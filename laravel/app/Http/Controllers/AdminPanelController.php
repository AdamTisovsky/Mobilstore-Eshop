<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminPanelController extends Controller
{
    public function index()
    {
        return view('adminpanel');
    }

    public function adminPanel()
    {
    $users = User::all(); // Retrieve all users from the database
    return view('adminpanel', compact('users')); // Pass the $users variable to the view
    }   
}



