@extends('layouts.main')

@section('title')
<title>About Us | {{ config('app.name') }}</title>
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
                    <p class = "lead text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, ipsam.
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem fuga blanditiis, modi
                        exercitationem quae quam eveniet! Minus labore voluptatibus corporis recusandae accusantium
                        velit, nemo, nobis, nulla ullam pariatur totam quos.</p>
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

                <p class = "text-center text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                    rem officia accusantium maiores quisquam dolorum?</p>
                <div class = "input-group mb-3 mt-3">
                    <input type = "text" class = "form-control" placeholder="Enter Your Email ...">
                    <button class = "btn btn-primary" type = "submit">Follow</button>
                </div>
            </div>
        </div>
    </section>
    <!-- end of newsletter -->
@endsection