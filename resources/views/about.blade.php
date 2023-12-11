@extends('layouts.main')

@section('title')
    <title>About Us | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@section('container')
    {{-- About Us --}}
    <section id = "about" class = "py-5">
        <div class = "container jarak">
            <div class = "row gy-lg-5 align-items-center">
                <div class = "col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class = "title pt-3 pb-5">
                        <h2 class = "position-relative d-inline-block ms-4">About Us</h2>
                    </div>
                    <p class="lead text-muted">Selamat datang di Kedai Salad Buah kami, tempat di mana kesehatan dan rasa
                        berkumpul dalam setiap sajian. Kami berkomitmen untuk menyajikan pilihan salad buah segar dan
                        lezat untuk memenuhi kebutuhan nutrisi Anda.</p>
                    <p>Di sini, kami percaya bahwa setiap gigitan adalah perjalanan menuju kesehatan yang lebih baik.
                        Dengan bahan-bahan berkualitas tinggi, kami hadirkan pengalaman menyantap yang menyenangkan dan
                        memuaskan bagi pelanggan kami.</p>
                </div>
                <div class = "col-lg-6 order-lg-0">
                    <img src = "{{ asset('img/hero02.jpg') }}" alt = "" class = "img-fluid">
                </div>
            </div>
        </div>
    </section>
    {{-- About Us End --}}

    <!-- newsletter -->
    <section id = "newsletter" class = "py-5">
        <div class = "container">
            <div class = "d-flex flex-column align-items-center justify-content-center">
                <div class = "title text-center pt-3 pb-5">
                    <h2 class = "position-relative d-inline-block ms-4">Langganan</h2>
                </div>

                <p class = "text-center text-muted">Mari berlangganan di kedai kami dan ikuti perkembangan kedai ini dengan follow akun Instagram owner.</p>
                <div class = "input-group mb-3 mt-3">
                    <input type = "text" class = "form-control" disabled value="@rezza_dava">
                    <a class = "btn btn-primary" href="#">Follow</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end of newsletter -->
    
@endsection