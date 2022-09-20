@extends('layouts.master')
{{-- @extends('layouts.app') --}}
@section('title')
profile
@endsection

@section('profile')
 active 
@endsection

@section('content')
{{-- Navbar Start --}}
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Profile</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Profile</a>
        </div>
    </div>
</div>
<!-- Navbar End -->
{{-- profile start --}}
<div class="container  text-dark px-3 mt-3">
    @if (session('status'))
        <div class="alert alert-primary" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div>
<div class="container-fluid wow fadeInUp mt-5" data-wow-delay="0.1s" >
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-8">
            <div class="card bg-dark-lighter text-white mt-3">
                <div class="card-header bg-dark d-flex">
                    <h4 class="m-0">
                        <i class="fa-solid fa-id-card"></i>
                        Edit profile
                    </h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-5 col-xl-4 mb-4">
                            <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                                <a data-toggle="pill" href="#v-pills-profile-info" role="tab"
                                   class="nav-link {{ ! $errors->hasAny(['password', 'current_password']) ? 'active' : ''}}">
                                    Profile information
                                </a>
                                {{-- <a class="nav-link {{ $errors->hasAny(['password', 'current_password']) ? 'active' : ''}}"
                                    data-toggle="pill" href="#v-pills-password" role="tab">
                                     Change password
                                 </a> --}}
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7 col-xl-8">
                            <div class="tab-content">
                                <div id="v-pills-profile-info" role="tabpanel" style="display: block"
                                     class="tab-pane fade {{ ! $errors->hasAny(['password', 'current_password']) ? 'show active' : ''}}">
                                    <form action="/editprofile/{{Auth::user()->id}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="user_name" class="text-dark">User Name</label>
                                            <input type="text" name="name" id="user_name"
                                                   class="form-control input-dark @error('user_name') is-invalid @enderror"
                                                   value="{{ old('name', auth()->user()->name) }}"
                                                   required autofocus>

                                            @error('user_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="text-dark">Email</label>
                                            <input type="email" name="email" id="email"
                                                   class="form-control input-dark @error('email') is-invalid @enderror"
                                                   value="{{ old('email', auth()->user()->email) }}" required>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="text-dark">Phone Number</label>
                                            <input type="tel" name="phone" id="phone"
                                                   class="form-control input-dark @error('phone') is-invalid @enderror"
                                                   value="{{ old('phone', auth()->user()->phone) }}" required>

                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-4 d-flex justify-content-center">
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                {{-- update password --}}
                                {{-- <div id="#v-pills-password" role="tabpanel" style="display: block"
                                     class="tab-pane fade {{ ! $errors->hasAny(['password', 'current_password']) ? 'show active' : ''}}">
                                    <form action="/editpassword/{{Auth::user()->id}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="password" class="text-dark">New Password</label>
                                            <input type="password" name="password" id="password"
                                                   class="form-control input-dark @error('password') is-invalid @enderror"
                                                   value="{{ old('password', auth()->user()->password) }}"
                                                   required autofocus>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password-confirm" class="text-dark">Confirm password</label>
                                            <input type="password" name="password-confirm" id="password-confirm"
                                                   class="form-control input-dark @error('password-confirm') is-invalid @enderror"
                                                   
                                                   required autofocus>

                                            @error('password-confirm')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-4 d-flex justify-content-center">
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div> --}}
                                {{-- <div id="v-pills-password" role="tabpanel"
                                     class="tab-pane fade  {{ $errors->hasAny(['password', 'current_password']) ? 'show active' : ''}}">
                                    <form action="/editPassword/{{Auth::user()->id}}"
                                          method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="current-password">Current password</label>
                                            <input type="password" name="current_password" id="current-password"
                                                   class="form-control input-dark @error('current_password') is-invalid @enderror"
                                                   required>

                                            @error('current_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="password">New password</label>
                                            <input type="password" name="password" id="password"
                                                   class="form-control input-dark @error('password') is-invalid @enderror"
                                                   required>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="password-confirm">Confirm password</label>
                                            <input type="password" name="password_confirmation"
                                                   id="password-confirm" class="form-control input-dark" required>
                                        </div>

                                        <div class="form-group mt-4 d-flex justify-content-center">
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div> --}}
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
{{---------- profile end------ --}}

{{-- ----booking history start------ --}}
<div class="container-fluid wow fadeInUp mt-5" data-wow-delay="0.1s" >
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-8">
            <div class="card bg-dark-lighter text-white mt-3">
                <div class="card-header bg-dark d-flex">
                    <h4 class="m-0">
                        <i class="fa-regular fa-calendar-check"></i>
                        My Bookings
                    </h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col" class="text-dark">Route</th>
                                <th scope="col"class="text-dark">Date</th>
                                <th scope="col"class="text-dark">Time</th>
                                <th scope="col"class="text-dark">Number of Seats</th>
                                <th scope="col"class="text-dark">Cost</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">Amman-Aqaba</th>
                                <td>20/10/2022</td>
                                <td>10:00 AM</td>
                                <td>3</td>
                                <td>10</td>
                              </tr>
                            </tbody>
                          </table>
                        {{-- <div class="col-sm-12 col-md-5 col-xl-4 mb-4">
                            <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                                <a data-toggle="pill" href="#v-pills-profile-info" role="tab"
                                   class="nav-link {{ ! $errors->hasAny(['password', 'current_password']) ? 'active' : ''}}">
                                    Profile information
                                </a>
                                <a class="nav-link {{ $errors->hasAny(['password', 'current_password']) ? 'active' : ''}}"
                                   data-toggle="pill" href="#v-pills-password" role="tab">
                                    Change password
                                </a>
                            </div>
                        </div> --}}
                        {{-- <div class="col-sm-12 col-md-7 col-xl-8">
                            <div class="tab-content">
                                <div id="v-pills-profile-info" role="tabpanel"
                                     class="tab-pane fade {{ ! $errors->hasAny(['password', 'current_password']) ? 'show active' : ''}}">
                                    <form action="" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="user_name" class="text-dark">User Name</label>
                                            <input type="text" name="user_name" id="user_name"
                                                   class="form-control input-dark @error('user_name') is-invalid @enderror"
                                                   value="{{ old('name', auth()->user()->name) }}"
                                                   required autofocus>

                                            @error('user_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="text-dark">Email</label>
                                            <input type="email" name="email" id="email"
                                                   class="form-control input-dark @error('email') is-invalid @enderror"
                                                   value="{{ old('email', auth()->user()->email) }}" required>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-4 d-flex justify-content-center">
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div id="v-pills-password" role="tabpanel"
                                     class="tab-pane fade {{ $errors->hasAny(['password', 'current_password']) ? 'show active' : ''}}">
                                    <form action=""
                                          method="POST">
                                        @csrf
                                        @method('PATCH')

                                        <div class="form-group">
                                            <label for="current-password">Current password</label>
                                            <input type="password" name="current_password" id="current-password"
                                                   class="form-control input-dark @error('current_password') is-invalid @enderror"
                                                   required>

                                            @error('current_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="password">New password</label>
                                            <input type="password" name="password" id="password"
                                                   class="form-control input-dark @error('password') is-invalid @enderror"
                                                   required>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="password-confirm">Confirm password</label>
                                            <input type="password" name="password_confirmation"
                                                   id="password-confirm" class="form-control input-dark" required>
                                        </div>

                                        <div class="form-group mt-4 d-flex justify-content-center">
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="card-footer bg-dark"></div>
            </div>
        </div>
    </div>
    </div>
</div>

{{-- ----booking history end------ --}}
@endsection

