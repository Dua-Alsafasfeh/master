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
<div class="container  text-dark px-3 mt-3">
    @if (session('status'))
        <div class="alert alert-primary" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div>
{{-- {{$trip->id}}
{{$number}}
{{$trip->city_to->city_name}}
{{ $trip->time }}
{{ $trip->date }}
{{$trip_booking->id}} --}}
<div class="ml-auto d-flex justify-content-center">
    <div class="btn btn-dark m-3" id="ticket">
        <form action="{{route('unpaidTicket',$trip_booking->id)}}" method="post">
            @csrf
            <input type="hidden" value="{{$trip->price * $number}}" name="price">
            <input type="hidden" value="{{$trip->city_from->city_name}}" name="city_from">
            <input type="hidden" value="{{$trip->city_to->city_name}}" name="city_to">
            <input type="hidden" value="{{ $trip->date }}" name="trip_date">
            <input type="hidden" value="{{ $trip->time }}" name="trip_time">
            <input type="hidden" value="{{ $number }}" name="number">
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
                            <form action="{{route('payment.details',$trip_booking->id)}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$trip->price * $number}}" name="price">
                            <input type="hidden" value="{{$trip->city_from->city_name}}" name="city_from">
                            <input type="hidden" value="{{$trip->city_to->city_name}}" name="city_to">
                            <input type="hidden" value="{{ $trip->date }}" name="trip_date">
                            <input type="hidden" value="{{ $trip->time }}" name="trip_time">
                            <input type="hidden" value="{{ $number }}" name="number">

                            <div class="col-12">
                                <div class="d-flex flex-column">
                                    <p class="text mb-1">Person Name</p>
                                    <input class="form-control mb-3" type="text" placeholder="Name" name="person_name" value="{{old('person_name')}}" @error('person_name') is-invalid @enderror>

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
                                    <input class="form-control mb-3" type="text" name="card_num" value="{{old('card_num')}}" placeholder="1234 5678 435678"  @error('card_num') is-invalid @enderror>

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
                                    <input class="form-control mb-3" type="date" name="expiry"  placeholder="DD/MM/YYYY" min="2022-09-0" value="{{old('expiry')}}"  @error('expiry') is-invalid @enderror>

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
                                    <input class="form-control mb-3 pt-2 " type="password" name="cvv" value="{{old('cvv')}}" placeholder="***"  @error('cvv') is-invalid @enderror>

                                    @error('cvv')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mt-3 mb-2 d-flex justify-content-center">
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


