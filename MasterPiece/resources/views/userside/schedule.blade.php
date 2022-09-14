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

<!-- schedule Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
<div class="seat_booking_area position">
<div class="container">
<table class="table table-striped table-bordered table-md table-wrapper-scroll-y my-custom-scrollbar" cellspacing="0" width="100%">
<thead>
  <tr class="tr-bg" scope="row">
    <th class="th-sm">Trip
    </th>
    <th class="th-sm">Driver Name
    </th>
    <th class="th-sm">Driver Phone Number
    </th>
    <th class="th-sm">Price (JD)
    </th>
    <th class="th-sm">Number of Seats
    </th>
    <th class="th-sm">Path
    </th>
    
  </tr>
</thead>
<tbody>
  @foreach ($schedule as $item )
  <tr scope="row">
    <td >{{$item->city_from->city_name}} - {{$item->city_to->city_name}}</td>
    <td >{{$item->driver->driver_name}}</td>
    <td >{{$item->driver->phone_number}}</td>
    <td >{{$item->price}}</td>
    <td >{{$item->bus->size}}</td>
    <td ><button type="button" class="btn btn-outline-primary" id="showbtn">Show</button></td> 
  </tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" style="background-color: rgba(0,0,0,0.7)"   aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle"><i class="fa-solid fa-route text-dark"></i>&nbsp;Trip Path</h4>
        <button type="button" class="close bg-dark text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
       <span class="text-dark h5"> 
       <i class="fa-solid fa-road text-dark"></i>
       &nbsp;Start :</span>
       <span class="text-primary h5">{{$item->city_from->city_name}}</span>
       <br>
       <i class="fa-solid fa-location-dot text-primary"></i>&nbsp;
       <span class="text-dark h5">{{$item->path}}</span>
       &nbsp;<i class="fa-solid fa-location-dot text-primary"></i>
        <br>
       <span class="text-dark h5">
        <i class="fa-solid fa-road-circle-check text-dark"></i>
        &nbsp;End : 
      </span>
      <span class="text-primary h5">{{$item->city_to->city_name}}</span>
      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal" class="close">Close</button>
      </div> --}}
    </div>
  </div>
</div>
<!-- schedule End -->


  <script>
    // Get the modal
    var modal = document.getElementById("exampleModalCenter");
    
    // Get the button that opens the modal
    var btn = document.getElementById("showbtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";     
    }
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
@endsection