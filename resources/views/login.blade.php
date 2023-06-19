@extends('layouts.header')

@section('title', 'Login')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/registration.css') }}">
    <img class="logo-regist" src="{{ Storage::url('/logo.png') }}">
    <h1>Sign in to your account</h1>
    <form action="/login" class="form-container" method="POST">
        @csrf
        <div>
            <div class="form-content-new">
                <label for="emailInsert">Email address</label>
                <input id="emailInsert" type="email" name="email" placeholder="Input your email..."
                    value="{{ Cookie::get('mycookie') !== null ? Cookie::get('mycookie') : '' }}" style="border: 1px solid #111111; background-color: #181A1B; color: whitesmoke;">
                @error('email')
                    <strong class="error-msg">{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-content-new">
                <label for="passwordInsert">Password</label>
                <input id="passwordInsert" type="password" name="password" placeholder="Input your password..." style="border: 1px solid #111111; background-color: #181A1B; color: whitesmoke;">
                @error('password')
                    <strong class="error-msg">{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-content-cookies">
                <input type="checkbox" name="remember" id="remember" {{ Cookie::get('mycookie') !== null }}>
                <label for="cookie">Remember Me</label>
            </div>
            <div>
                @error('notmatch')
                    <strong class="error-msg">{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-content-new">
                <input type="submit" value="Login">
            </div>

            <div class="form-content-new">
                Not Registered ? <span><a href = "/registerPage">Create an account</a></span>
            </div>
        </div>
    </form>
@endsection
