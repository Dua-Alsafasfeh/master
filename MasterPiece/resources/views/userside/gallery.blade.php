@extends('layouts.master')

@section('title')
Gallery
@endsection

@section('gallery')
 active 
@endsection

@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Gallery</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Gallery</a>
        </div>
    </div>
</div>
<!-- Navbar End -->
<!-- start gallery -->
<!-- Gallery -->
<div class="container py-5">
<div class="row">
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
      <img
        src="http://www.gju.edu.jo/sites/default/files/news/inside_88.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Boat on Calm Water"
      />
  
      <img
        src="https://thumbs.dreamstime.com/b/view-to-public-bus-station-city-amman-jordan-february-capital-largest-174389107.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Wintry Mountain Landscape"
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="http://ammannet.net/sites/default/files/styles/facebook_metatag/public/2019-05/1375701869Zarqa_R_C_55167.jpg?itok=ePnz55wr"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Mountains in the Clouds"
      />
  
      <img
        src="https://alghad.com/wp-content/uploads/2020/01/figuur-i-258.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Boat on Calm Water"
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="https://cdnimg.royanews.tv/imageserv/Size728Q100/news/20201210/SwcY0Lla8hlbo5EFm2Z8Z843Fzwq6EnxB2SQsJ24.png"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Waves at Sea"
      />
  
      <img
        src="https://pbs.twimg.com/profile_images/1279269647985057793/yMJYONqE_400x400.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Yosemite National Park"
      />
    </div>
  </div>
</div>
  <!-- Gallery -->
<!-- end gallery -->
@endsection