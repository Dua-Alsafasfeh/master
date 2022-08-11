@extends('layouts.master')

@section('title')
Schedule
@endsection

@section('schedule')
 active 
@endsection

@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Schedule</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">schedule</a>
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


<!-- schedule Start -->
<div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.1s">
<div class="seat_booking_area position">
<div class="container">
<table class="table table-striped table-bordered table-md table-wrapper-scroll-y my-custom-scrollbar" cellspacing="0" width="100%">
<thead>
  <tr class="tr-bg" scope="row">
    <th class="th-sm">Trip
    </th>
    <th class="th-sm">Days
    </th>
    <th class="th-sm">Trip Schedule
    </th>
    <th class="th-sm">Price (JD)
    </th>
    <th class="th-sm">Path
    </th>
    <th class="th-sm">Number of Seats
    </th>
  </tr>
</thead>
<tbody>
  @foreach ($schedule as $item )
  <tr scope="row">
    <td class="">{{$item->from_id}}</td>
    <td >{{$item->to_id}}</td>
    <td >{{$item->trip_schedule}}</td>
    <td >{{$item->price}}</td>
    <td >{{$item->path}}</td>
    <td >{{$item->num_seats}}</td>
  </tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
<!-- schedule End -->
@endsection