<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salad;

class SaladController extends Controller
{
    public function index()
    {
        return view('cart', [
            'active' => 'cart'
        ]);
    }

    public function addSalad($id)
    {
        $salad = Salad::findOrFail($id);
        $cart = session()->get('cart', []); 
    }
}
