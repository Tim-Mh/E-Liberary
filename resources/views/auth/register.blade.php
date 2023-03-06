@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label<!DOCTYPE html>
                                <html lang="en">
                                <head>
                                    <meta charset="UTF-8">
                                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                                    <title>Document</title>
                                    <link href="{{ asset('/css/login.css') }}" rel="stylesheet">
                                
                                </head>
                                <body>
                                    <header>
                                        <h2 class="logo">logo</h2>
                                        <nav class="navigation">
                                            <a href="#">Home</a>
                                            <a href="#">About</a>
                                            <a href="#">Services</a>
                                            <a href="#">Contact</a>
                                            <button class="btnLogin-popup">Login</button>
                                
                                        </nav>
                                    </header>
                                    <div class="wrapper">
                                        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
                                
                                        <div class="form-box login">
                                            <h2>Login</h2>
                                            <form action="#">
                                            <div class="input-box">
                                                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                                                <input type="email" required>
                                                <label>Email</label>
                                            </div>
                                                <div class="input-box">
                                                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                                                    <input type="password" required>
                                                    <label>Password</label>
                                                </div>
                                                <div class="remember-forgot">
                                                    <label><input type="checkbox">Remember me!</label>
                                                    <a href="#">Forgot Password?</a>
                                                </div>
                                                <button type="submit" class="btn">Login</button>
                                                <div class="login-register">
                                                    <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
                                                </div>
                                        </form>
                                        </div>
                                
                                        <div class="form-box register">
                                            <h2>Registration</h2>
                                            <form action="{{route('register')}}">
                                            <div class="input-box">
                                                <span class="icon"><ion-icon name="person"></ion-icon></span>
                                                <input type="text" required>
                                                <label>Username</label>
                                            </div>
                                            <div class="input-box">
                                                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                                                <input type="email" required>
                                                <label>Email</label>
                                            </div>
                                                <div class="input-box">
                                                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                                                    <input type="password" required>
                                                    <label>Password</label>
                                                </div>
                                                <div class="remember-forgot">
                                                    <label><input type="checkbox">I agree to the terms & conditions:)</label>
                                                </div>
                                                <button type="submit" class="btn">Register</button>
                                                <div class="login-register">
                                                    <p>Already have an account?<a href="#" class="login-link">Login</a></p>
                                                </div>
                                        </form>
                                        </div>
                                    </div>
                                    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                                <script src="{{asset('js/login.js')}}"></script>
                                
                                
                                </body>
                                </html> for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
