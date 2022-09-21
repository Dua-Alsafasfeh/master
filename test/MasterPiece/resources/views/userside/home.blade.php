@extends('layouts.master')

@section('title')
Home
@endsection

@section('home')
 active 
@endsection

@section('content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="https://images.unsplash.com/photo-1619349983584-b180edbf289c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Image">
        </div>
        <div class="carousel-item">
            <img class="w-100" src="https://images.unsplash.com/photo-1600206085398-f6ede93b06f8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Image">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- </div> -->
<!-- Navbar & Carousel End -->


<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3"
                        placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->

<!-- start Booking -->
<div class="container  text-dark px-3 mt-3">
    @if (session('city_error'))
        <div class="alert alert-danger" role="alert">
            {{ session('city_error') }}
        </div>
    @endif
</div>
<div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.1s">
<div class="hotel_booking_area position">
    <div class="container-fluid">
        <form action="/booking" method="get">
            @csrf 
        <div class="seat_booking_table row">
            <div class="col-md-3"> 
                <h2 class="text-white">Book Your Seat</h2>
            </div> 
            
            <div class="col-md-9">
                <div class="boking_table">
                    <div class="row pb-4">
                        <div class="col-md-4">
                            <div class="book_tabel_item">
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker11'>
                                        <h5 class="mx-4"> FROM </h5>
                                        <div class="form-group">
                                        <div class="book_tabel_item">
                                            <div class="input-group">
                                                <select class="wide" name="from_id" id="select_from" onchange="validationSelect()">
                                                   @foreach($cities as $city)
                                                   <option value="{{$city->id}}">{{$city->city_name}}</option>
                                                   @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="book_tabel_item">
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker11'>
                                        <h5 class="mx-4"> To </h5>
                                        <div class="form-group">
                                        <div class="book_tabel_item">
                                            <div class="input-group">
                                                <select class="wide" name="to_id" id="select_to" onchange="validationSelect()">
                                                    @foreach($cities as $city)
                                                    <option value="{{$city->id}}">{{$city->city_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- @error("city_error")
                            {{$message}}
                        @enderror --}}
                        <div class="col-md-4">
                            <div class="book_tabel_item">
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker11'>
                                        <button type="submit" class="mx-4 mt-4 book_now_btn button_hover">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
</div>
<!-- end Booking -->

<!-- Service Start -->
<div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-4">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
            <!-- <h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1> -->
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa-solid fa-person-chalkboard text-white"></i>
                    </div>
                    <h4 class="mb-3">Prebooking trips
                    </h4>
                    <p class="m-0"> The passenger can reserve a seat on the bus.</p>
                    <!-- <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa-solid fa-route text-white"></i>
                    </div>
                    <h4 class="mb-3">Path of Bus
                    </h4>
                    <p class="m-0">The passenger can know the path of the bus trip.</p>
                    <!-- <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa-solid fa-credit-card text-white"></i>
                    </div>
                    <h4 class="mb-3">Electronic Payment System
                    </h4>
                    <p class="m-0">The passenger can Pay by credit card.</p>
                    <!-- <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- booking Plan Start -->
<div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-3">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Booking Plans</h5>
            <h1 class="mb-0">Steps to Book your prebooking trip</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase mb-2">How To Book!</h6>
                <h1 class="display-6 mb-4">A New Transportation Experience</h1>
                <p class="mb-5">Bus station aims to improve public transportation in Jordan. it provides a convenient transportation experience with advanced information system and electronic payments through using a credit card.</p>
                <div class="row gy-5 gx-4">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa-solid fa-user-plus text-white mt-2"></i>
                            </div>
                            <h5 class="mb-0">Register</h5>
                        </div>
                        <span>1. You have to Register or Login if you have an account.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa-solid fa-check text-white mt-2"></i>
                            </div>
                            <h5 class="mb-0">Choose a Trip</h5>
                        </div>
                        <span>2. Choose the Trip you want; City-From and City-To, then click on <strong>BOOK Now.</strong></span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa-solid fa-person-chalkboard text-white mt-2"></i>
                            </div>
                            <h5 class="mb-0">Choose a Trip Details</h5>
                        </div>
                        <span>3. Choose a Trip's time, date and number of seats, then click on <strong>choose</strong>.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa-solid fa-credit-card text-white mt-2"></i>
                            </div>
                            <h5 class="mb-0">Insert Payment Details</h5>
                        </div>
                        <span>4. Insert credit card details to pay for a trip then click on <strong>confirm booking</strong>.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="https://images.pexels.com/photos/3847770/pexels-photo-3847770.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" style="object-fit: cover;">
                    <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="https://media.istockphoto.com/photos/happy-driver-driving-bus-and-snowing-thumbs-up-picture-id529420242?k=20&m=529420242&s=612x612&w=0&h=95-KvHZHyOovlozAcR5gtwttqOZ1iFD18aFIGdYDob0=" alt="" style="width: 200px; height: 200px">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- booking Plan End -->


{{-- <script>
    function validationSelect(){
        var from_id = document.getElementById('select_from');
        var to_id = document.getElementById('select_to');

        if(from_id.value == to_id.value){

        }
    }
    </script> --}}

@endsection
