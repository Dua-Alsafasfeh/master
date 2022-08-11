<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Booking</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/71fa6fa637.js" crossorigin="anonymous"></script>

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- external style --}}
    {{-- <link rel="stylesheet" href="{{ asset('style/ticket.css') }}"> --}}
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block topnav">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Aqaba, Jordan</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+0777 777 777</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>bus_station@mail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa-solid fa-bus me-2"></i>Bus Station</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse col-lg-7 mx-5 text-center text-lg-start d-flex justify-content-center" id="navbarCollapse">
                <div class="navbar-nav ms-5 py-0 ">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/schedule" class="nav-item nav-link">Schedule</a>
                    <a href="/about" class="nav-item nav-link">About</a>
                    <a href="/contact" class="nav-item nav-link">Contact Us</a>
                    <a href="/gallery" class="nav-item nav-link">Gallery</a>
                </div>

            </div>
            <div class="navbar-nav ms-auto py-0 col-lg-3 text-center text-lg-end">
                {{-- <ul class="navbar-nav ms-auto"> --}}
                @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link @yield('login')" href="{{ route('login') }}">Login</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link @yield('register')" href="{{ route('register') }}">Register</a>
                    </li>
                @endif
                @else
                <li class="nav-item">
                    <a class="nav-link @yield('profile')" href="{{ route('profile') }}">{{ Auth::user()->name }}</a>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                    @endguest
            </div>
        </nav>
    </div>

<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Ticket</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Ticket</a>
        </div>
    </div>
</div>
<!-- Navbar End -->

<!-- start ticket-booking -->
<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 7%">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-8">
            <div class="card bg-dark-lighter text-white mt-3">
                <div class="card-header bg-dark d-flex">
                    
                    <h4 class="m-0">
                    <i class="fa-solid fa-ticket me-2"></i>
                     Ticket | Passenger information
                    </h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-5 col-xl-4 mb-4">
                            <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                                <span data-toggle="pill" role="tab"
                                   class="nav-link active">
                                    From : --------- To : ---------
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7 col-xl-8">
                            <div class="tab-content">
                                <div>
                                    <form action="" method="POST">
                                        @csrf

                                        <div class="form-group m-2">
                                            <i class="fa-solid fa-person-walking-luggage text-dark"></i>
                                            <span class="text-dark h5">Passenger Name :</span>
                                            <span class="text-dark">------------</span>
                                        </div>
                                        <div class="form-group m-2">
                                            <i class="fa-solid fa-calendar text-dark"></i>
                                            <span class="text-dark h5">Trip Date :</span>
                                            <span class="text-dark">------------</span>
                                        </div>
                                        <div class="form-group m-2">
                                            <i class="fa-solid fa-clock text-dark"></i>
                                            <span class="text-dark h5">Trip Time :</span>
                                            <span class="text-dark">------------</span>
                                        </div>
                                        <div class="form-group m-2">
                                            <i class="fa-solid fa-arrow-up-1-9 text-dark"></i>
                                            <span class="text-dark h5">Number of Seats :</span>
                                            <span class="text-dark">------------</span>
                                        </div>
                                        <div class="form-group m-2">
                                            <i class="fa-solid fa-hand-holding-dollar text-dark"></i>
                                            <span class="text-dark h5">Total Price :</span>
                                            <span class="text-dark">----</span>
                                        </div>

                                        <div class="form-group mt-4 d-flex justify-content-center">
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    Confirm Booking
                                                </button>
                                            </div>
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    Cancel Booking
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-dark"></div>
            </div>
        </div>
    </div>
    </div>
</div>

<!-- end ticket-booking -->

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-2 col-md-12 pt-5 mb-3">
                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                    <h4 class="text-light mb-0"><a>Home</a></h4>
                </div>
            </div>
            <div class="col-lg-2 col-md-12 pt-0 pt-lg-5 mb-3">
                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                    <h4 class="text-light mb-0"><a>Schedule</a></h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-3 ">
                <div class="text-center section-title-sm position-relative">
                    <a href="index.html" class="navbar-brand p-0">
                        <h3 class="m-0"><i class="fa-solid fa-bus me-2"></i>Bus Station</h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-12 pt-0 pt-lg-5 mb-3">
                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                    <h4 class="text-light mb-0"><a>About</a></h4>
                </div>
            </div>
            <div class="col-lg-2 col-md-12 pt-0 pt-lg-5 mb-3">
                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                    <h4 class="text-light mb-0"><a>Contact Us</a></h4>
                </div>
            </div>
        </div>
        <div class="row gx-5 ">
            <div class="col-lg-2 col-md-12 pt-0 pt-lg-5 mb-3">
                <div class=" section-title-sm position-relative pb-3 mb-4">
                    <h4 class="text-light mb-0">Useful Links :</h4>
                </div>
            </div>
            <div class="col-lg-1 col-md-12 pt-0 pt-lg-5 mb-3">
                <div class=" section-title-sm position-relative pb-3 mb-4">
                    <a href="">Link 1</a>
                </div>
            </div>
            <div class="col-lg-1 col-md-12 pt-0 pt-lg-5 mb-3">
                <div class=" section-title-sm position-relative pb-3 mb-4">
                    <a href="">Link 2</a>
                </div>
            </div>
            <div class="col-lg-1 col-md-12 pt-0 pt-lg-5 mb-3">
                <div class=" section-title-sm position-relative pb-3 mb-4">
                    <a href="">Link 3</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-3 d-flex flex-row-reverse">
                <div class=" section-title-sm position-relative pb-3 mb-4 p-2">
                    <h4 class="text-light mb-0">Follow Us :</h4>
                </div>
            </div>
            <div class="col-lg-2 col-md-12 pt-0 pt-lg-5 mb-3 ">
                <div class=" section-title-sm position-relative pb-3 mb-4 ">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Bus Station</a>. All
                        Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
{{-- seat Javascript --}}
<script src="style/booking.js"></script>
</body>

</html>