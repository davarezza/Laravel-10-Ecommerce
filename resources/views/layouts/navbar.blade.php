     {{-- Navbar --}}
     <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand d-flex justify-content-between align-items-center">
                <img src="{{ asset('img/sidelogo.jpg') }}" width="56" height="56" alt="">
                <span class="text-uppercase fw-lighter ms-2">Savor Salads</span>
            </a>

            <div class="collapse navbar-collapse order-lg-1" id="navMenu">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item px-2 py-2">
                        <a href="{{ route('home') }}" class="nav-link {{ ($active ==="home") ? 'active' : '' }}">Home</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a href="{{ route('about') }}" class="nav-link {{ ($active ==="about") ? 'active' : '' }}">About Us</a>
                    </li>
                </ul>
            </div>

            <div class="order-lg-2 side-icon nav-btns">
                <a href="{{ route('cart') }}" class="position-relative text-dark text-center px-2 py-2">
                    <i class='bx bxs-cart'></i>
                </a>
                <span class = "position-absolute badge bg-primary">{{ count((array) session('cart')) }}</span>
                {{-- <a href="#" class="text-dark"><i class='bx bxs-heart'></i></a> --}}

                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
    {{-- End Navbar --}}