@extends('layouts.main')

@section('title')
<title>Cart | {{ config('app.name') }}</title>
@endsection

@section('container') <br><br><br><br><br>

<div class="container-fluid">
    <div class="row">

        <!-- Konten Utama -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Edit Produk</h1>
            </div>
            <!-- Isi konten utama Anda di sini -->

            <form method="post" action="{{ route('product.update', $salad->id) }}" enctype="multipart/form-data">
                @method('put') <!-- Untuk menandai request sebagai metode PUT -->
                @csrf

                <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $salad->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ $salad->price }}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Foto Produk</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label"></label>
                        <img src="{{ asset('fotosalad/' . $salad->image) }}" alt="Foto Sekarang" width="100">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </main>
    </div>
</div>

</div><br><br><br><br>
@endsection