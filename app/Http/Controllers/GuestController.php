<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('home', [
            'active' => 'home',
        ]);
    }

    public function about()
    {
        return view('about', [
            'active' => 'about',
        ]);
    }
}
