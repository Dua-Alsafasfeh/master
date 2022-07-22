@extends('layouts.master')

@section('title')
Login 
@endsection 

@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Login</h1>
            <a href="/Home" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Login</a>
        </div>
    </div>
</div>
<!-- Navbar End -->

<!-- start login -->
<div class="login-form">
<form action="/examples/actions/confirmation.php" method="post">
    <div class="avatar">
        <img src="https://s3.amazonaws.com/branch.qlik.com/attachments/5ada5a8f0c313f5c539dc7fd/image.png" alt="Avatar">
    </div>
    <h2 class="text-center">Member Login</h2>   
    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="E-mail" required="required">
    </div>
    <br>
    <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
    </div>
    <br>        
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info btn-lg btn-block">Login</button>
    </div>
    <div class="bottom-action clearfix">
        <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
        <a href="#" class="float-right">Forgot Password?</a>
    </div>
</form>
<p class="text-center small">Don't have an account? <a href="#">Sign up here!</a></p>
</div>

<!-- end login -->
@endsection