@extends('layouts.master')

@section('title')
Login 
@endsection 

@section('login')
 active 
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
<form method="post" action="{{ route('login') }}">
    @csrf
    <div class="avatar">
        <img src="https://s3.amazonaws.com/branch.qlik.com/attachments/5ada5a8f0c313f5c539dc7fd/image.png" alt="Avatar">
    </div>
    <h2 class="text-center">Member Login</h2>   
    <div class="form-group">
        <div class="col-md-12">
        <label for="email" class="col-md col-form-label text-md-end">{{ __('Email Address') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <p class="h6">{{ $message }}</p>
                </span>
            @enderror
        </div>
    </div>
    <br>        
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info btn-lg btn-block">Login</button>
    </div>
    {{-- <div class="bottom-action clearfix">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

        <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
        </label>
        
        @if (Route::has('password.request'))
            <a class="float-right" href="{{ route('password.request') }}">
                {{ __('Forgot Password?') }}
            </a>
        @endif
    </div> --}}
</form>
<p class="text-center small">Don't have an account?<a href="{{ route('register') }}">Register here!</a></p>
</div>

<!-- end login -->
@endsection