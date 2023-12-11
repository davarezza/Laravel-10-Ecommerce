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
                <h1 class="h2">Tambah Data</h1>
            </div>
            <!-- Isi konten utama Anda di sini -->

            <form method="post" action="{{ route('salad.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-8">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                        Nama wajib diisi.
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Harga</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price">
                    @error('price')
                    <div class="invalid-feedback">
                        Harga wajib diisi.
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto Produk</label>
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" aria-describedby="fotoHelp">
                    <div id="fotoHelp" class="form-text">Usahakan menggunakan gambar/image 3:4</div>
                    @error('foto')
                    <div class="invalid-feedback">
                        Foto wajib diisi.
                    </div>
                    @enderror
                </div>
            </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>

            </main>
    </div>
</div><br><br><br><br>
@endsection