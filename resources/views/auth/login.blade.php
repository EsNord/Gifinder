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
                        <h1 class="font-color" style="margin-bottom: 20px;">Welcome Back</h1>
                        <p class="font-color">Login with Gifinde for easy search</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
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
                            <input type="submit" class="btn btn-primary btn-lg btn-block " style="background-color:crimson;height: 45px" value="Log In">
                            <div class="sing">
                                <a class="h5 font-color sing" href="{{ route('register') }}">>sing up</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-9  height-full accent-3 align-self-center text-center d-none d-md-block" style="background-image:url('img/2.jpg');background-size: auto 100%" data-bg-repeat="false"
                     data-bg-possition="center">
                </div>
            </div>
        </div>
        <div class="control-sidebar-bg shadow white fixed"></div>
    </div>
@endsection



