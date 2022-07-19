@extends('layouts.master')
@section('title')
Register
@endsection

@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Register</h1>
            <a href="/Home" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Register</a>
        </div>
    </div>
</div>
<!-- Navbar End -->
<!-- start register -->
<div class="signup-form">
<form action="/examples/actions/confirmation.php" method="post">
<h2>Register</h2>
<p class="hint-text">Create your account. It's free and only takes a minute.</p>
<div class="form-group">
    <div class="row">
        <div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
        <div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
    </div>        	
</div>
<div class="form-group">
    <input type="email" class="form-control" name="email" placeholder="Email" required="required">
</div>
<div class="form-group">
    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
</div>
<div class="form-group">
    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
</div>        
<div class="form-group">
    <input type="number" class="form-control" name="mobile" placeholder="Mobile Number" required="required">
</div>                
<div class="form-group">
    <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-outline-info btn-lg btn-block">Register Now</button>
</div>
</form>
<div class="text-center">Already have an account? <a href="login.html">Login</a></div>
</div>
<!-- end register -->
@endsection