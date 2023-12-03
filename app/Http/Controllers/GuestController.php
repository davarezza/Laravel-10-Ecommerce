<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salad;

class GuestController extends Controller
{
    public function index()
    {
        $salads = Salad::all();

        return view('home', [
            'active' => 'home',
            'salads' => $salads,
        ]);
    }

    public function about()
    {
        return view('about', [
            'active' => 'about',
        ]);
    }
}
