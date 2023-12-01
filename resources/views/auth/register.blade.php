@extends('layouts.main')

@section('title')
<title>Register | {{ config('app.name') }}</title>
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
@endsection

@section('container')
<head>
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head> <br> <br> <br> <br>



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
{{-- <script>
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
</script> --}}

@endsection