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
    <link rel="stylesheet" href="{{ asset('style/booking.css') }}">
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
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa-solid fa-bus me-2"></i>Bus Station</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse col-lg-7 mx-5 text-center text-lg-start d-flex justify-content-center" id="navbarCollapse">
                <div class="navbar-nav ms-5 py-0 ">
                    <a href="/home" class="nav-item nav-link active">Home</a>
                    <a href="/schedule" class="nav-item nav-link">Schedule</a>
                    <a href="/about" class="nav-item nav-link">About</a>
                    <a href="/contact" class="nav-item nav-link">Contact Us</a>
                    <a href="/gallery" class="nav-item nav-link">Gallery</a>
                </div>

            </div>
            <div class="navbar-nav ms-auto py-0 col-lg-3 text-center text-lg-end">
                <a href="/Register" class="nav-link ">Register</a>
                <a href="/Login" class="nav-link ">Login</a>
            </div>
        </nav>
    </div>

<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Booking</h1>
            <a href="" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Booking</a>
        </div>
    </div>
</div>
<!-- Navbar End -->

<!-- start booking -->
<div class="container mt-5">
    <div class="h3 text-muted">Seat Booking</div>
    <div id="starred" class="bg-white px-2 pt-1 mt-2">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex mt-2 border-right">
                                <div class="box p-2 rounded">
                                    <i class="fa-solid fa-bus text-white "></i>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div class="text-muted">Saturday</div>
                                <div class="d-flex align-items-center">
                                    <b class="pl-2">12/05/2022</b>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div class="text-muted">Sunday</div>
                                <div><b>12/05/2022</b></div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div class="text-muted">Monday</div>
                                <div><b>12/05/2022</b></div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center labels">
                                    <div class="text-muted">Tuesday</div>
                                </div>
                                <div><b>12/05/2022</b></div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center labels">
                                    <div class="text-muted">Wednesday</div>
                                </div>
                                <div><b>12/05/2022</b></div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-lg-flex align-items-lg-center py-4">
        <div class="h3 text-muted">From:</div>
        <div class="ml-auto">
            <strong>--------</strong>
        </div>
        &nbsp;&nbsp;&nbsp;
        <div class="h3 text-muted">To:</div>
        <div class="ml-auto">
            <strong>--------</strong>
        </div>
    </div>
    <div id="top">
        <div class="bg-white table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-row1">
                        <th scope="col">Time</th>
                        <th scope="col">Price</th>
                        <th scope="col">Available Seats</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">15:15 - 20:15</th>
                        <td>5 JD</td>
                        <td>12</td>
                        <td><button type="button" class="btn btn-outline-primary">Choose</button></td>
                    </tr>
                    <tr>
                        <th scope="row">15:15 - 20:15</th>
                        <td>5 JD</td>
                        <td>12</td>
                        <td><button type="button" class="btn btn-outline-primary">Choose</button></td>
                    </tr>
                    <tr>
                        <th scope="row">15:15 - 20:15</th>
                        <td>5 JD</td>
                        <td>12</td>
                        <td><button type="button" class="btn btn-outline-primary">Choose</button></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end booking -->

<!-- start seat booking -->
<div class="seatshow">
    <div id="app">
        <div class="container">
          <div class="row">
            <div class="col-8 py-5">
              <div>
                <table class="mx-auto">
                  <tbody>
                    <tr v-for="idxr, r in rows">
                      <td v-for="idxc, c in cols" class="pl-2" style="width: 50px;">
                        <div onclick="onSeatSelected(idxr, idxc)" v-if="!isAisle(idxr, idxc)" :class="classifier(idxr, idxc)" style="width: 30px; height: 30px; border: 1px solid black;"></div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-4 pt-3">
              <div class="card" v-show="selectedSeat !=null" style="display: none;">
                <div class="card-header">Properties</div>
                <div class="card-body">
                  <ul class="list-group">
                    <li onclick="changeSeatStatus('RA')" class="list-group-item" :class="seatStatus('RA')">
                      <div class="float-left bg-white" style="width: 25px;"><div class="cls-ra" style="width: 30px; height: 30px; border: 1px solid black;"></div></div>
                      <span class="px-3">Available</span>
                    </li>
                    <li onclick="changeSeatStatus('RB')" class="list-group-item" :class="seatStatus('RB')">
                      <div class="float-left" style="width: 25px;"><div class="cls-rb" style="width: 30px; height: 30px; border: 1px solid black;"></div></div>
                      <span class="px-3">Booked</span>
                    </li>
                    <li onclick="changeSeatStatus('FA')" class="list-group-item" :class="seatStatus('FA')">
                      <div class="float-left" style="width: 25px;"><div class="cls-fa" style="width: 30px; height: 30px; border: 1px solid black;"></div></div>
                      <span class="px-3">Reserve for Female</span>
                    </li>
                    <li onclick="changeSeatStatus('FB')" class="list-group-item" :class="seatStatus('FB')">
                      <div class="float-left" style="width: 25px;"><div class="cls-fb" style="width: 30px; height: 30px; border: 1px solid black;"></div></div>
                      <span class="px-3">Reserve for Female - Booked</span>
                    </li>
                    <li onclick="changeSeatStatus('MA')" class="list-group-item" :class="seatStatus('MA')">
                      <div class="float-left" style="width: 25px;"><div class="cls-ma" style="width: 30px; height: 30px; border: 1px solid black;"></div></div>
                      <span class="px-3">Reserve for Male</span>
                    </li>
                    <li onclick="changeSeatStatus('MB')" class="list-group-item" :class="seatStatus('MB')">
                      <div class="float-left" style="width: 25px;"><div class="cls-mb" style="width: 30px; height: 30px; border: 1px solid black;"></div></div>
                      <span class="px-3">Reserve for Male - Booked</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
<!-- end seat booking -->

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