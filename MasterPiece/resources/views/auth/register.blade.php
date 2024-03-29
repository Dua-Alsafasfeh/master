@extends('layouts.master')

@section('title')
Register
@endsection

@section('register')
 active 
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
<form method="post" action="{{ route('register') }}">
    @csrf
<h2>Register</h2>
<p class="hint-text">Create your account. It's free and only takes a minute.</p>
<div class="form-group">
    <div class="row">
        <div class="col">
        <label for="first_name" class="col-md col-form-label text-md-end">{{ __('First Name') }}</label>
        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" autocomplete="first_name" autofocus>

        @error('first_name')
            <span class="invalid-feedback" role="alert">
                <p class="h6">{{ $message }}</p>
            </span>
        @enderror
        </div>
        <div class="col">
        <label for="last_name" class="col-md col-form-label text-md-end">{{ __('Last Name') }}</label>
        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" autocomplete="last_name" autofocus>

        @error('last_name')
            <span class="invalid-feedback" role="alert">
                <p class="h6">{{ $message }}</p>
            </span>
        @enderror
        </div>
        
    </div>        	
</div>
<div class="form-group">
    <div class="col-md-12">
    {{-- <input type="email" class="form-control" name="email" placeholder="Email" required="required"> --}}
    <label for="email" class="col-md col-form-label text-md-end">{{ __('Email Address') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <p class="h6">{{ $message }}</p>
            </span>
        @enderror
    </div>
</div>
<div class="form-group">
    <div class="col-md-12">
    <label for="password" class="col-md col-form-label text-md-end">{{ __('Password') }}</label>

    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

    @error('password')
    <span class="invalid-feedback" role="alert">
        <p class="h6">{{ $message }}</p>
    </span>
    @enderror                    
    </div>
</div>
<div class="form-group">
    <div class="col-md-12">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
    </div>
</div>        
<div class="form-group">
    {{-- <input type="number" class="form-control" name="mobile" placeholder="Mobile Number" required="required"> --}}
    <div class="col-md-12">
        <label for="phone" class="col-md col-form-label text-md-end">{{ __('Phone Number') }}</label>
            <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror rounded form-control-md"  name="phone" value="{{ old('phone') }}" autocomplete="phone">
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <p class="h6">{{ $message }}</p>
                </span>
            @enderror
    </div>
</div>                
<div class="form-group">
    <input type="checkbox" name="check" class="@error('check') is-invalid @enderror">
    <label class="form-check-label"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a>
    </label> @error('check')
    <span class="invalid-feedback" role="alert">
        <p class="h6">{{ $message }}</p>
    </span>
    @enderror
</div>
<div class="form-group">
    <button type="submit" class="btn btn-outline-info btn-lg btn-block">Register Now</button>
</div>
</form>
<div class="text-center">Already have an account? <a href={{ route('login') }}>Login</a></div>
</div>
<!-- end register -->
@endsection