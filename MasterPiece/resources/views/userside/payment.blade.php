@extends('layouts.master')

@section('styleticket')
{{ asset('style/ticket.css') }}
@endsection
@section('title')
Payment
@endsection


@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Payment</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Payment</a>
        </div>
    </div>
</div>
<!-- Navbar End -->

{{-- -----payment start---- --}}
{{-- <div class="container  text-dark px-3 mt-3">
    @if (session('status'))
        <div class="alert alert-primary" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div> --}}
{{-- {{$trip->id}}
{{$trip_booking->id}} --}}
<div class="ml-auto d-flex justify-content-center">
    <div class="btn btn-dark m-3" id="ticket">
        <form action="{{route('unpaidTicket',["trip_id" => $trip->id, "tripBooking" => $trip_booking->id])}}" method="get">
            @csrf
        <span class="">
            <button type="submit" class="btn btn-primary">View Ticket</button>
        </span>
        </form>      
    </div>
    <div class="btn btn-dark m-3">
        <form action="{{route('cancelBooking',$trip_booking->id)}}" method="post">
            @csrf
            @method('delete')
        <span class="">
            <button type="submit" class="btn btn-primary">Cancel Booking</button>
        </span>
         </form>      
    </div>
</div>
<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
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
                            <form action="{{route('payment_details',["trip_id" => $trip->id, "tripBooking" => $trip_booking->id])}}" method="POST">
                            @csrf

                            <div class="col-12">
                                <div class="d-flex flex-column">
                                    <p class="text mb-1">Person Name</p>
                                    <input class="form-control mb-1 @error('person_name') is-invalid @enderror" type="text" placeholder="Name" name="person_name" value="{{old('person_name')}}" required>

                                    @error('person_name')
                                        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex flex-column">
                                    <p class="text mb-1">Card Number</p>
                                    <input class="form-control mb-1 @error('card_num') is-invalid @enderror" type="number" name="card_num" value="{{old('card_num')}}" placeholder="1234 5678 435678" required size="16">

                                    @error('card_num')
                                        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex flex-column">
                                    <p class="text mb-1">Expiry</p>
                                    <input class="form-control mb-1 @error('expiry') is-invalid @enderror" type="date" name="expiry"  placeholder="DD/MM/YYYY" min="2022-09-0" value="{{old('expiry')}}" required min="2022-09-29" >

                                    @error('expiry')
                                        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex flex-column">
                                    <p class="text mb-1">CVV/CVC</p>
                                    <input class="form-control mb-1 pt-2 @error('cvv') is-invalid @enderror" type="password" name="cvv" value="{{old('cvv')}}" placeholder="***" required size="3">

                                    @error('cvv')
                                        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mt-1 mb-2 d-flex justify-content-center">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block w-100" id="pay">
                                        Pay Now
                                        <span class="fas fa-arrow-right"></span>
                                    </button>
                                </div>                              
                            </div>
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


