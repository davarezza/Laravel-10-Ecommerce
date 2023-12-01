@extends('layouts.main')

@section('title')
<title>Login | {{ config('app.name') }}</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('container')
<br><br>

<style>
    #toast-container {
    top: 100px; /* Sesuaikan dengan nilai yang sesuai untuk menggeser toast ke bawah */
}
</style>

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
                        <form action="/login" method="post">
                            @csrf
                            <input type="email" name="email" id="email" class="form-control my-3 py-2" placeholder="Email Address" value="{{ old('email') }}">
                            @error('email')
                             <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input type="password" name="password" id="password" class="form-control my-3 py-2" placeholder="Password">
                            @error('password')
                             <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="text-center mt-3">
                                <input type="submit" value="Login" class="btn btn-primary">
                            </div>
                            <a href="{{ route('register') }}" class="nav-link mx-2 my-2 text-primary ms-auto">Not Registered ?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><br><br>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    @if (Session::has('success'))
    toastr.options = {
        "positionClass": "toast-top-right", // Atur posisi ke kanan atas
    };
    toastr.success("{{ Session::get('success') }}");
    @endif

    @if (Session::has('loginError'))
    toastr.options = {
        "positionClass": "toast-top-right", // Atur posisi ke kanan atas
    };
    toastr.error("{{ Session::get('loginError') }}");
    @endif
</script>

@endsection