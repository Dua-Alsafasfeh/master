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
<div class="container  text-dark px-3 mt-3">
    @if (session('status'))
        <div class="alert alert-primary" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div>
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
                                            <span class="text-dark">{{ $trip->bus->size }}</span>
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
{{-- -----payment start---- --}}
<div class="container-fluid wow fadeInUp mt-5" data-wow-delay="0.1s">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-8">
            <div class="cardpay bg-dark-lighter text-white mt-3">
                <div class="card-header bg-dark d-flex">                   
                    <h4 class="m-0">
                        <i class="fa-regular fa-credit-card"></i>
                     Paymet Information
                    </h4>
                </div>
                <div class="container p-0 mt-3">
                    <div class="cardpay px-4">
                        {{-- <p class="h8 py-3">Payment Details</p> --}}
                        <div class="row gx-3">
                            <form action="/storepayment/{{Auth::user()->id}}" method="POST">
                                @csrf
                            <div class="col-12">
                                <div class="d-flex flex-column">
                                    <p class="text mb-1">Person Name</p>
                                    <input class="form-control mb-3" type="text" placeholder="Name" name="person_name" value="{{old('person_name')}}" required @error('person_name') is-invalid @enderror>

                                    @error('person_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex flex-column">
                                    <p class="text mb-1">Card Number</p>
                                    <input class="form-control mb-3" type="text" name="card_num" value="{{old('card_num')}}" placeholder="1234 5678 435678" required @error('card_num') is-invalid @enderror>

                                    @error('card_num')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex flex-column">
                                    <p class="text mb-1">Expiry</p>
                                    <input class="form-control mb-3" type="date" name="expiry"  placeholder="DD/MM/YYYY" min="2022-09-0" value="{{old('expiry')}}" required @error('expiry') is-invalid @enderror>

                                    @error('expiry')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex flex-column">
                                    <p class="text mb-1">CVV/CVC</p>
                                    <input class="form-control mb-3 pt-2 " type="password" name="cvv" value="{{old('cvv')}}" placeholder="***" required @error('cvv') is-invalid @enderror>

                                    @error('cvv')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mt-3 mb-2 d-flex justify-content-center">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Confirm Booking
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary btn-block mx-2">
                                        Cancel Booking
                                    </button>
                                </div>
                            </div>
                            {{-- <div class="col-12">
                                <div class="btn btn-primary mb-3">
                                    <span class="ps-3">Pay $243</span>
                                    <span class="fas fa-arrow-right"></span>
                                </div>
                            </div> --}}
                        </form>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer bg-dark"></div>
            </div>
        </div>
    </div>
    </div>
</div>
{{-- -----payment end---- --}}
@endsection