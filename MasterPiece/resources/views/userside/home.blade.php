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
<div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.1s">
<div class="hotel_booking_area position">
    <div class="container-fluid">
        <form action="/booking" method="get">
            @csrf 
        <div class="seat_booking_table">
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
                                                <select class="wide" name="from_id">
                                                   @foreach($cities as $city)
                                                   <option value="{{$city->id}}">{{$city->name}}</option>
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
                                                <select class="wide" name="to_id">
                                                    @foreach($cities as $city)
                                                    <option value="{{$city->id}}">{{$city->name}}</option>
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
                    <h4 class="mb-3">Route of Bus
                    </h4>
                    <p class="m-0">The passenger can know the route of the bus.</p>
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

<!-- Pricing Plan Start -->
<div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-3">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Booking Plans</h5>
            <h1 class="mb-0">Steps to Book your prebooking trip</h1>
        </div>
        <!-- <div class="row g-0">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="bg-light rounded">
                    <div class="border-bottom py-4 px-5 mb-4">
                        <h4 class="text-primary mb-1">Basic Plan</h4>
                        <small class="text-uppercase">For Small Size Business</small>
                    </div>
                    <div class="p-5 pt-0">
                        <h1 class="display-5 mb-3">
                            <small class="align-top"
                                style="font-size: 22px; line-height: 45px;">$</small>49.00<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                        </h1>
                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i
                                class="fa fa-times text-danger pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i
                                class="fa fa-times text-danger pt-1"></i></div>
                        <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                    <div class="border-bottom py-4 px-5 mb-4">
                        <h4 class="text-primary mb-1">Standard Plan</h4>
                        <small class="text-uppercase">For Medium Size Business</small>
                    </div>
                    <div class="p-5 pt-0">
                        <h1 class="display-5 mb-3">
                            <small class="align-top"
                                style="font-size: 22px; line-height: 45px;">$</small>99.00<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                        </h1>
                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i
                                class="fa fa-times text-danger pt-1"></i></div>
                        <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="bg-light rounded">
                    <div class="border-bottom py-4 px-5 mb-4">
                        <h4 class="text-primary mb-1">Advanced Plan</h4>
                        <small class="text-uppercase">For Large Size Business</small>
                    </div>
                    <div class="p-5 pt-0">
                        <h1 class="display-5 mb-3">
                            <small class="align-top"
                                style="font-size: 22px; line-height: 45px;">$</small>149.00<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                        </h1>
                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
<!-- Pricing Plan End -->

@endsection
