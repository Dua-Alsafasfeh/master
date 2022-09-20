@extends('layouts.master')

@section('styleticket')
{{ asset('style/ticket.css') }}
@endsection
@section('title')
Ticket
@endsection


@section('content')
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
<div class="container-fluid wow fadeInUp mt-5" data-wow-delay="0.1s">
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
                                   class="nav-link active text">
                                    From : <strong>{{$trip->city_from->city_name}}</strong> To : <strong>{{$trip->city_to->city_name}}</strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7 col-xl-8">
                            <div class="tab-content">
                                <div>
                                    <form action="" method="">
                                        @csrf

                                        <div class="form-group m-2">
                                            <i class="fa-solid fa-person-walking-luggage text-dark"></i>
                                            <span class="text-dark h5">Passenger Name :</span>
                                            <span class="text-dark">{{ Auth::user()->name }}</span>
                                        </div>
                                        <div class="form-group m-2">
                                            <i class="fa-solid fa-calendar text-dark"></i>
                                            <span class="text-dark h5">Trip Date :</span>
                                            <span class="text-dark">{{ $trip->date }}</span>
                                        </div>
                                        <div class="form-group m-2">
                                            <i class="fa-solid fa-clock text-dark"></i>
                                            <span class="text-dark h5">Trip Time :</span>
                                            <span class="text-dark">{{ $trip->time }}</span>
                                        </div>
                                        <div class="form-group m-2">
                                            <i class="fa-solid fa-arrow-up-1-9 text-dark"></i>
                                            <span class="text-dark h5">Number of Seats :</span>
                                            <span class="text-dark">{{ $number }}</span>
                                        </div>
                                        <div class="form-group m-2">
                                            <i class="fa-solid fa-hand-holding-dollar text-dark"></i>
                                            <span class="text-dark h5">Total Cost :</span>
                                            <span class="text-dark">{{$trip->price * $number}}</span>
                                        </div>

                                        {{-- <div class="form-group mt-4 d-flex justify-content-center">
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
                                        </div> --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-dark"></div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- end ticket-booking -->
{{$trip->id}}
{{$number}}
@endsection