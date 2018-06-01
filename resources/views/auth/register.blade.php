@extends('layouts.liberty')

@section('content')

    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper auth p-0 theme-two">
            <div class="row d-flex align-items-stretch">
                <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
                    <div class="slide-content bg-2">
                    </div>
                </div>
                <div class="col-12 col-md-8 h-100 bg-white">
                    <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
                        <div class="nav-get-started">
                            <p>Already have an account?</p>
                            <a class="btn get-started-btn" href="{{ route('login') }}">SIGN IN</a>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h3 class="mr-auto">Register</h3>
                            <p class="mb-5 mr-auto">Enter your details below.</p>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                                    </div>
                                    <input type="text" class="form-control {{ $errors->has('name') ? ' border-danger' : '' }}" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="mdi mdi-email"></i></span>
                                    </div>
                                    <input type="email" class="form-control {{ $errors->has('email') ? ' border-danger' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email Address" required>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="mdi mdi-lock-outline"></i></span>
                                    </div>
                                    <input type="password" class="form-control {{ $errors->has('password') ? ' border-danger' : '' }}" name="password" placeholder="Password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="mdi mdi-lock-outline"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary submit-btn">SIGN IN</button>
                            </div>

                            <div class="wrapper mt-5 text-gray">
                                <p class="footer-text">Copyright © 2018 Formsly. All rights reserved.</p>
                                <ul class="auth-footer text-gray">
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Cookie Policy</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->

@endsection