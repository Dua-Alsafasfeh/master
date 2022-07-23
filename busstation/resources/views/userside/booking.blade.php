@extends('layouts.master')
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
    <div id="starred" class="bg-white px-2 pt-1 mt-2">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex mt-2 border-right">
                                <div class="box p-2 rounded">
                                    <i class="fa-solid fa-bus text-white "></i>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div class="text-muted">Saturday</div>
                                <div class="d-flex align-items-center">
                                    <b class="pl-2">12/05/2022</b>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div class="text-muted">Sunday</div>
                                <div><b>12/05/2022</b></div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div class="text-muted">Monday</div>
                                <div><b>12/05/2022</b></div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center labels">
                                    <div class="text-muted">Tuesday</div>
                                </div>
                                <div><b>12/05/2022</b></div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center labels">
                                    <div class="text-muted">Wednesday</div>
                                </div>
                                <div><b>12/05/2022</b></div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-lg-flex align-items-lg-center py-4">
        <div class="h3 text-muted">From:</div>
        <div class="ml-auto">
            <strong>--------</strong>
        </div>
        &nbsp;&nbsp;&nbsp;
        <div class="h3 text-muted">To:</div>
        <div class="ml-auto">
            <strong>--------</strong>
        </div>
    </div>
    <div id="top">
        <div class="bg-white table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-row1">
                        <th scope="col">Time</th>
                        <th scope="col">Price</th>
                        <th scope="col">Available Seats</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">15:15 - 20:15</th>
                        <td>5 JD</td>
                        <td>12</td>
                        <td><button type="button" class="btn btn-outline-primary">Choose</button></td>
                    </tr>
                    <tr>
                        <th scope="row">15:15 - 20:15</th>
                        <td>5 JD</td>
                        <td>12</td>
                        <td><button type="button" class="btn btn-outline-primary">Choose</button></td>
                    </tr>
                    <tr>
                        <th scope="row">15:15 - 20:15</th>
                        <td>5 JD</td>
                        <td>12</td>
                        <td><button type="button" class="btn btn-outline-primary">Choose</button></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end booking -->

<!-- start seat booking -->
<div class="seatshow">
    <div id="app">
        <div class="container">
          <div class="row">
            <div class="col-8 py-5">
              <div>
                <table class="mx-auto">
                  <tbody>
                    <tr v-for="idxr, r in rows">
                      <td v-for="idxc, c in cols" class="pl-2" style="width: 50px;">
                        <div onclick="onSeatSelected(idxr, idxc)" v-if="!isAisle(idxr, idxc)" :class="classifier(idxr, idxc)" style="width: 30px; height: 30px; border: 1px solid black;"></div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-4 pt-3">
              <div class="card" v-show="selectedSeat !=null" style="display: none;">
                <div class="card-header">Properties</div>
                <div class="card-body">
                  <ul class="list-group">
                    <li onclick="changeSeatStatus('RA')" class="list-group-item" :class="seatStatus('RA')">
                      <div class="float-left bg-white" style="width: 25px;"><div class="cls-ra" style="width: 30px; height: 30px; border: 1px solid black;"></div></div>
                      <span class="px-3">Available</span>
                    </li>
                    <li onclick="changeSeatStatus('RB')" class="list-group-item" :class="seatStatus('RB')">
                      <div class="float-left" style="width: 25px;"><div class="cls-rb" style="width: 30px; height: 30px; border: 1px solid black;"></div></div>
                      <span class="px-3">Booked</span>
                    </li>
                    <li onclick="changeSeatStatus('FA')" class="list-group-item" :class="seatStatus('FA')">
                      <div class="float-left" style="width: 25px;"><div class="cls-fa" style="width: 30px; height: 30px; border: 1px solid black;"></div></div>
                      <span class="px-3">Reserve for Female</span>
                    </li>
                    <li onclick="changeSeatStatus('FB')" class="list-group-item" :class="seatStatus('FB')">
                      <div class="float-left" style="width: 25px;"><div class="cls-fb" style="width: 30px; height: 30px; border: 1px solid black;"></div></div>
                      <span class="px-3">Reserve for Female - Booked</span>
                    </li>
                    <li onclick="changeSeatStatus('MA')" class="list-group-item" :class="seatStatus('MA')">
                      <div class="float-left" style="width: 25px;"><div class="cls-ma" style="width: 30px; height: 30px; border: 1px solid black;"></div></div>
                      <span class="px-3">Reserve for Male</span>
                    </li>
                    <li onclick="changeSeatStatus('MB')" class="list-group-item" :class="seatStatus('MB')">
                      <div class="float-left" style="width: 25px;"><div class="cls-mb" style="width: 30px; height: 30px; border: 1px solid black;"></div></div>
                      <span class="px-3">Reserve for Male - Booked</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
<!-- end seat booking -->

@endsection