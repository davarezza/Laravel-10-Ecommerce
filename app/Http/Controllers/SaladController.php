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
        // Jika kunci 'quantity' sudah ada, tambahkan nilainya
        if (isset($cart[$id]['quantity'])) {
            $cart[$id]['quantity']++;
        } else {
            // Jika kunci 'quantity' belum ada, tambahkan kunci tersebut dan set nilainya menjadi 1
            $cart[$id]['quantity'] = 1;
        }
    } else {
        // Jika $id belum ada di dalam $cart, tambahkan data salad dengan kunci 'quantity' diatur menjadi 1
        $cart[$id] = [
            "name" => $salad->name,
            "price" => $salad->price,
            "image" => $salad->image,
            "quantity" => 1, // Set jumlah awal menjadi 1
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
