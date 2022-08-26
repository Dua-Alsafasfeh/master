@extends('layouts.master')

@section('styleticket')
{{ asset('style/booking.css') }}
@endsection

@section('title')
Booking
@endsection

@section('content')
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
    <div class="d-lg-flex align-items-lg-center py-4">
        <div class="h3 text-muted">From:</div>
        <div class="ml-auto">
            <strong>{{$city_from->city_name}}</strong>
        </div>
        &nbsp;&nbsp;&nbsp;
        <div class="h3 text-muted">To:</div>
        <div class="ml-auto">
            <strong>{{$city_to->city_name}}</strong>
        </div>
    </div>
    <div id="top">
        <div class="bg-white table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-row1">
                        <th scope="col">Time & Date</th>
                        <th scope="col">Price</th>
                        <th scope="col">Available Seats</th>
                        <th scope="col" class="w-25">Enter Number of Seats</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trips as $trip)
                    <tr>
                        <th scope="row">{{$trip->time . " / " . $trip->date}}</th>
                        <td>{{$trip->price . " JD"}}</td>
                        <td>{{ $trip->bus->size - $trip->tripBookings()->count()}}</td>
                         <form action="{{route('storeBokking' , $trip->id)}}" method="post">
                            @csrf
                        <td>
                            <input type="number" name="number" required>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-outline-primary">Choose</button>
                        </td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end booking -->
@endsection