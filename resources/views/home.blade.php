@extends('layouts.main')

@section('title')
    <title>Home | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@section('container')
    {{-- Header --}}
    <header>
        <div id="header" class="vh-100 carousel slide" data-bs-ride="carousel">
            <div class="container d-flex align-items-center carousel-inner top-50 start-50 translate-middle banner">
                <div class="text-center carousel-item active">
                    @auth
                        <h2 class="text-capitalize text-dark">Welcome, <span class="fw-bold">{{ auth()->user()->name }}</span></h2>
                        <h2 class="text-capitalize py-2 text-dark">want to leave this account ?</h2>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="btn mt-3 mb-2 text-uppercase mx-2">Log out</button>
                        </form>
                        @if(auth()->user()->email == 'dava@gmail.com')
                            <a href="{{ route('salad.create') }}" class="btn btn-info text-uppercase">Tambah Produk</a>
                        @endif
                    @else
                        <h2 class="text-capitalize text-dark">Don't have an account or</h2>
                        <h2 class="text-capitalize py-2 text-dark">haven't logged in yet ?</h2>
                        <a href="{{ route('login') }}" class="btn mt-3 text-uppercase mx-2">Log in</a>
                        <a href="{{ route('register') }}" class="btn mt-3 text-uppercase mx-2">Register</a>
                    @endauth
                </div>
                <div class="text-center carousel-item">
                    <h2 class="text-capitalize text-dark">Best Collection</h2>
                    <h1 class="text-uppercase py-2 fw-bold text-dark">New Arrivals</h1>
                    <a href="#collection" class="btn mt-3 text-uppercase">Shop Now</a>
                </div>
                <div class="text-center carousel-item">
                    <h2 class="text-capitalize text-dark">Best Price & Offer</h2>
                    <h1 class="text-uppercase py-2 fw-bold text-dark">New Menu</h1>
                    <a href="#" class="btn mt-3 text-uppercase">Order Now</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </header>
    {{-- Header End --}}

    {{-- Collection --}}
    <section id="collection" class="py-5">
        <div class="container">
            <div class="title text-center">
                <h2 class="position-relative d-inline-block">New Collection</h2>
            </div>

            <div class="row g-0">
                <div class="d-flex flex-wrap justify-content-center mt-5">
                    <button class="btn m-2 text-dark active-filter-btn" type="button">All</button>
                </div>

                <div class="mt-3">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>

                <div class="collection-list mt-4 row gx-0 gy-3">
                    @foreach ($salads as $key => $data )
                        <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
                            <div class="collection-img position-relative">
                                <img src="{{ asset('fotosalad/'.$data->image) }}" class="w-100" width="300" height="200">
                                <span
                                    class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Sale</span>
                            </div>
                            <div class="text-center mt-2">
                                <p class="text-capitalize my-1">{{ $data->name }}</p>
                                <span class="fw-bold">$ {{ $data->price }}</span><br>
                                <a href="{{ route('product.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                                <form class="d-inline" action="products/{{ $data->id }}/delete" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                  </form>
                                {{-- <a href="{{ route('addsalad.to.cart', $data->id) }}"
                                    class="btn btn-primary mt-3">Add to Cart</a> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- Collection End --}}
@endsection
