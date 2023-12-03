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

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $salad->name,
                "price" => $salad->price,
                "image" => $salad->image,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product has been added to cart!');
    }

    public function destroy(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product successfully deleted.');
        }
    }
}
