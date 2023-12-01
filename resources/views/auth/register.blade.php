@extends('layouts.main')

@section('title')
<title>Register | {{ config('app.name') }}</title>
@endsection

@section('container')
<br><br>

<section>
    <div class="container mt-5 pt-5 mb-4">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <svg class="mx-auto my-3" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                          </svg>
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <input type="text" name="name" id="name" class="form-control my-3 py-2" placeholder="Username" value="{{ old('name') }}">
                            @error('name')
                             <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input type="email" name="email" id="email" class="form-control my-3 py-2" placeholder="Email Address" value="{{ old('email') }}">
                            @error('email')
                             <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input type="password" name="password" id="password" class="form-control my-3 py-2" placeholder="Password">
                            @error('password')
                             <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="text-center mt-3">
                                <input type="submit" value="Register" class="btn btn-primary">
                            </div>
                            <a href="{{ route('login') }}" class="nav-link mx-2 my-2 text-primary ms-auto">Already Registered ?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><br><br>

@endsection