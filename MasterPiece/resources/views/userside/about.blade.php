@extends('layouts.master')
@section('title')
About us
@endsection

@section('about')
 active 
@endsection

@section('content')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">About Us</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">About</a>
        </div>
    </div>
</div>
</div>
<!-- Navbar End -->


<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
<div class="modal-dialog modal-fullscreen">
    <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
        <div class="modal-header border-0">
            <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex align-items-center justify-content-center">
            <div class="input-group" style="max-width: 600px;">
                <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Full Screen Search End -->


<!-- About Start -->
<div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
<div class="container py-2">
    <div class="row g-5">
        <div class="col-lg-7">
            <div class="section-title position-relative pb-2 mb-2">
                <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                <h1 class="mb-0">One of the suggestions for public transportation obstacles in Jordan</h1>
            </div>
            <p class="mb-4">Our mission is to provide our customers with the highest level of transportation solutions by offering customers with a safe, punctual and credible journey.
                Our vision is to provide a safe, reliable and affordable transportation service for passengers in a local and international network and to continually upgrade its fleet and services to meet the market needs.</p>
            <!-- <div class="row g-0 mb-3">
                <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                    <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                </div>
                <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                    <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                </div>
            </div> -->
            <!-- <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                    <i class="fa fa-phone-alt text-white"></i>
                </div>
                <div class="ps-4">
                    <h5 class="mb-2">Call to ask any question</h5>
                    <h4 class="text-primary mb-0">+012 345 6789</h4>
                </div>
            </div> -->
            <a href="/contact" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Send Us Your Suggestions </a>
        </div>
        <div class="col-lg-5" style="min-height: 500px;">
            <div class="position-relative h-100">
                <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="https://images.unsplash.com/photo-1534011056808-50c1c6082fe7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" style="object-fit: cover;">
            </div>
        </div>
    </div>
</div>
</div>
<!-- About End -->
@endsection