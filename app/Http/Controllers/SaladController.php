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

    // Mendapat atau membuat keranjang dari sesi
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

    public function create()
    {
        return view('create', [
            'active' => 'create'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $data = Salad::create([
            'name' => $request->name,
            'price' => $request->price,
            // tambahkan kolom lain yang perlu disimpan di sini
        ]);
    
        if ($request->hasFile('image')) {
            $request->file('image')->move('fotosalad/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
    
        return redirect()->route('home')->with('success', 'Salad added successfully');
    }

    public function edit($id)
    {
        $salad = Salad::findOrFail($id);
        return view('edit', [
            'active' => 'laporan',
            'salad' => $salad
        ]);
    }

    public function update(Request $request, $id)
        {
            $request->validate([
                'name' => 'required',
                'price' => 'required|numeric',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
        
            $salad = Salad::findOrFail($id);
        
            // Cek apakah ada gambar baru yang dikirim
            if ($request->hasFile('image')) {
                // Hapus gambar sebelumnya
                $oldImagePath = public_path('fotosiswa/' . $salad->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
        
                // Simpan gambar yang baru diunggah
                $request->file('image')->move('fotosalad/', $request->file('image')->getClientOriginalName());
                $salad->image = $request->file('image')->getClientOriginalName();
            }
        
            $salad->name = $request->name;
            $salad->price = $request->price;
            $salad->save();
        
            return redirect()->route('home')->with('success', 'Data berhasil diperbarui!');
        }

        public function hapus($id)
    {
        $salad = Salad::where('id',$id)->first();
        $salad->delete();

        //Delete Image

        $image_name = $salad->image;
        $image_path = 'products/' . $image_name;
        if(file_exists($image_path)){
          unlink($image_path);
        }
        return back()->with('success', 'Salad Deleted');
    }

}
