<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @yield('title')
    <link rel="icon" type="image/x-icon" href="{{ asset('savicon.ico') }}" />
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kaisei+Tokumin:wght@400;500;700&family=Poppins:wght@200;400;500;600;700;800;900&display=swap');

        :root {
            --lg-font: font-family: 'Kaisei Tokumin', serif;
            --sm-font: font-family: 'Poppins', sans-serif;
            --main-color: rgb(100, 68, 9);
        }
    </style>

    @include('layouts.navbar')
    
    @yield('container')

    @include('layouts.footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script>
    // init Isotope
    var $grid = $('.collection-list').isotope({
        // options
    });
    // filter items on button click
    $('.filter-button-group').on('click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        resetFilterBtns();
        $(this).addClass('active-filter-btn');
        $grid.isotope({
            filter: filterValue
        });
    });

    var filterBtns = $('.filter-button-group').find('button');

    function resetFilterBtns() {
        filterBtns.each(function() {
            $(this).removeClass('active-filter-btn');
        });
    }
</script>
</body>

</html>
