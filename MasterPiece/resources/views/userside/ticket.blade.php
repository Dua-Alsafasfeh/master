{{-- @extends('layouts.master')

@section('styleticket')
{{ asset('style/ticket.css') }}
@endsection
@section('title')
Ticket
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ticket</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/71fa6fa637.js" crossorigin="anonymous"></script>

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/ticket.css') }}">
</head>
{{-- @section('content') --}}
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Ticket</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h5 text-white">Ticket</a>
        </div>
    </div>
</div>
<!-- Navbar End -->
<body>
<!-- start ticket-booking -->
<div class="container-fluid wow fadeInUp mt-5 mb-5" data-wow-delay="0.1s" id="print_tkt">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-8">
            <div class="card bg-dark-lighter text-white mt-3">
                <div class="card-header bg-dark d-flex">
                    
                    <h4 class="m-2">
                    <i class="fa-solid fa-ticket me-2"></i>
                     Ticket | Passenger information
                    </h4>
                    <h4 class="ms-auto btn text-light" id="print">
                     <i class="fa-solid fa-print me-2"></i>| Print Ticket
                    </h4>
                </div>
 
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-5 col-xl-4 mb-4">
                            <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                                <span data-toggle="pill" role="tab"
                                   class="nav-link active text">
                                    From : <strong>{{$ticket_details->city_from->city_name}}</strong> To : <strong>{{$ticket_details->city_to->city_name}}</strong>
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
                                            <span class="text-dark">{{ $ticket_details->date }}</span>
                                        </div>
                                        <div class="form-group m-2">
                                            <i class="fa-solid fa-clock text-dark"></i>
                                            <span class="text-dark h5">Trip Time :</span>
                                            <span class="text-dark">{{ $ticket_details->time }}</span>
                                        </div>
                                        <div class="form-group m-2">
                                            <i class="fa-solid fa-arrow-up-1-9 text-dark"></i>
                                            <span class="text-dark h5">Number of Seats :</span>
                                            <span class="text-dark">{{ $paid->num_of_seats}}</span>
                                        </div>
                                        <div class="form-group m-2">
                                            <i class="fa-solid fa-hand-holding-dollar text-dark"></i>
                                            <span class="text-dark h5">Total Cost :</span>
                                            <span class="text-dark">{{$paid->total_cost}}</span>
                                        </div>
                                        <div class="form-group m-2">
                                            <i class="fa-solid fa-money-check-dollar text-dark"></i>
                                            <span class="text-dark h5">Is Paid?</span>
                                            <span class="text-dark">
                                                
                                                {{$paid->is_payment ? "Yes " : "NO"}}</span>
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
<script>
    var print_tkt = document.getElementById("print");
    print_tkt.onclick = function() {
    window.print();     
}
</script>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('lib/wow/wow.min.js')}}"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('js/main.js')}}"></script>
</body>

</html>
{{-- @endsection --}}