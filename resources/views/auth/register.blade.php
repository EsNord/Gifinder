@extends('layouts.app')

@push('js')
    <script src="assets/js/app.js"></script>
 @endpush

@push('css')
    <link rel="stylesheet" href="assets/css/app.css">

    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
    <style>
        #nprogress{
            display: none;
        }
        .font-color{
        rgba(163,163,163,0.9);
        }
        .sing{
            padding-top: 10px;
        }

    </style>

@endpush

@section('content')

    <div id="appo">
        <div class="page parallel">
            <div class="d-flex row">
                <div class="col-md-3" style="background-color: #333">
                    <div class="p-5 mb-lg-5" style="margin-top: 60px">
                        <img style="width: 119px;display: inline-block;filter: drop-shadow(0 0 0.75rem crimson);;" src="img/logo.png" alt=""/>
                        <p class="h2" style="display: inline-block ;margin-left: 5px;font-family: Gabriola;font-size: 50px;color: #DC143C;filter:  drop-shadow(0 0 0.75rem crimson)">Gifinder</p>
                    </div>

                    <div class="p-5 ml-5">
                        <p class="font-color">BEGIN WITH Gifinde FOR EASY SEARCH</p>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                <input type="text" class="form-control-lg form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                <input type="email" class="form-control form-control-lg has-val @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="email" type="email"
                                       placeholder="Email Address">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                <input type="password" class="form-control form-control-lg has-val form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="current-password"
                                       placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password"
                                       placeholder="Confirm Password">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary btn-lg btn-block " style="background-color:crimson;height: 45px" value="Log In">
                            <div class="sing">
                                <a class="h5 font-color sing" href="{{ route('login') }}">>login</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="background" class="col-md-9  height-full accent-3 align-self-center text-center d-none d-md-block" style="background-image:url('img/3.jpg');background-size: auto 100%" data-bg-repeat="false"
                     data-bg-possition="center">
                </div>
            </div>
        </div>
        <div class="control-sidebar-bg shadow white fixed"></div>
    </div>
@endsection



