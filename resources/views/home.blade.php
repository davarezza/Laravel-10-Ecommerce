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
    <link rel="icon" type="image/x-icon" href="{{ asset('savicon.ico') }}" />
    <title>Home | {{ config('app.name') }}</title>
</head>

<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a href="#" class="navbar-brand d-flex justify-content-between align-items-center">
                <img src="{{ asset('img/sidelogo.jpg') }}" width="56" height="56" alt="">
                <span class="text-uppercase fw-lighter ms-2">Savor Salads</span>
            </a>

            <div class="collapse navbar-collapse order-lg-1" id="navMenu">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item px-2 py-2">
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a href="#collection" class="nav-link">Collection</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a href="#" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-dark" type="submit">Search</button>
                        </form>
                    </li>
                </ul>
            </div>

            <div class="order-lg-2 side-icon nav-btns">
                <a href="#" class="text-dark text-center px-2 py-2"><i class='bx bxs-cart'></i></a>
                <a href="#" class="text-dark"><i class='bx bxs-heart'></i></a>

                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
    {{-- End Navbar --}}

    {{-- Header --}}
    <header>
        <div id="header" class="vh-100 carousel slide" data-bs-ride="carousel">
            <div class="container h-100 d-flex align-items-center carousel-inner">
                <div class="text-center carousel-item active">
                    <h2 class="text-capitalize text-dark">Best Collection</h2>
                    <h1 class="text-uppercase py-2 fw-bold text-dark">New Arrivals</h1>
                    <a href="#" class="btn mt-3 text-uppercase">Shop Now</a>
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
                    <button class="btn m-2 text-dark" type="button">Best Sellers</button>
                    <button class="btn m-2 text-dark" type="button">Featured</button>
                    <button class="btn m-2 text-dark" type="button">New</button>
                </div>

                <div class = "collection-list mt-4 row gx-0 gy-3">
                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class = "collection-img position-relative">
                            <img src = "{{ asset('img/size200.jpg') }}" class = "w-100">
                            <span
                                class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                            </div>
                            <p class = "text-capitalize my-1">gray shirt</p>
                            <span class = "fw-bold">$ 45.50</span><br>
                            <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class = "collection-img position-relative">
                            <img src = "{{ asset('img/size300.jpeg') }}" class = "w-100">
                            <span
                                class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                            </div>
                            <p class = "text-capitalize my-1">gray shirt</p>
                            <span class = "fw-bold">$ 45.50</span><br>
                            <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 new">
                        <div class = "collection-img position-relative">
                            <img src = "{{ asset('img/size400.jpg') }}" class = "w-100">
                            <span
                                class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                            </div>
                            <p class = "text-capitalize my-1">gray shirt</p>
                            <span class = "fw-bold">$ 45.50</span><br>
                            <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class = "collection-img position-relative">
                            <img src = "{{ asset('img/size1k02.jpg') }}" class = "w-100">
                            <span
                                class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                            </div>
                            <p class = "text-capitalize my-1">gray shirt</p>
                            <span class = "fw-bold">$ 45.50</span><br>
                            <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class = "collection-img position-relative">
                            <img src = "{{ asset('img/size650.jpg') }}" class = "w-100">
                            <span
                                class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                            </div>
                            <p class = "text-capitalize my-1">gray shirt</p>
                            <span class = "fw-bold">$ 45.50</span><br>
                            <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 new">
                        <div class = "collection-img position-relative">
                            <img src = "{{ asset('img/size750.jpg') }}" class = "w-100">
                            <span
                                class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                            </div>
                            <p class = "text-capitalize my-1">gray shirt</p>
                            <span class = "fw-bold">$ 45.50</span><br>
                            <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class = "collection-img position-relative">
                            <img src = "{{ asset('img/size1k.jpg') }}" class = "w-100">
                            <span
                                class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                            </div>
                            <p class = "text-capitalize my-1">gray shirt</p>
                            <span class = "fw-bold">$ 45.50</span><br>
                            <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class = "collection-img position-relative">
                            <img src = "{{ asset('img/size600.jpg') }}" class = "w-100">
                            <span
                                class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                                <span class = "text-primary"><i class='bx bx-star'></i></span>
                            </div>
                            <p class = "text-capitalize my-1">gray shirt</p>
                            <span class = "fw-bold">$ 45.50</span><br>
                            <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Collection End --}}

    {{-- About Us --}}
    <section id = "about" class = "py-5">
        <div class = "container">
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

    <!-- footer -->
    <footer class = "bg-dark py-5">
        <div class = "container">
            <div class = "row text-white g-4">
                <div class = "col-md-6 col-lg-3">
                    <a class = "text-uppercase text-decoration-none brand text-white" href = "index.html">Attire</a>
                    <p class = "text-white text-muted mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Nostrum mollitia quisquam veniam odit cupiditate, ullam aut voluptas velit dolor ipsam?</p>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light">Links</h5>
                    <ul class = "list-unstyled">
                        <li class = "my-3">
                            <a href = "#" class = "text-white text-decoration-none text-muted">
                                <i class='bx bx-chevron-right me-1'></i></i> Home
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "#" class = "text-white text-decoration-none text-muted">
                                <i class='bx bx-chevron-right me-1'></i></i> Collection
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "#" class = "text-white text-decoration-none text-muted">
                                <i class='bx bx-chevron-right me-1'></i></i> About Us
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light mb-3">Contact Us</h5>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class='bx bxs-map' ></i>
                        </span>
                        <span class = "fw-light">
                            Albert Street, New York, AS 756, United States of America
                        </span>
                    </div>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class='bx bxs-envelope' ></i>
                        </span>
                        <span class = "fw-light">
                            attire.support@gmail.com
                        </span>
                    </div>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class='bx bxs-phone'></i>
                        </span>
                        <span class = "fw-light">
                            +9786 6776 236
                        </span>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light mb-3">Follow Us</h5>
                    <div>
                        <ul class = "list-unstyled d-flex">
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class='bx bxl-github' ></i>
                                </a>
                            </li>
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class='bx bxl-linkedin-square' ></i>
                                </a>
                            </li>
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class='bx bxl-facebook-circle' ></i>
                                </a>
                            </li>
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class='bx bxl-instagram-alt' ></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->

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
