@extends('layouts.header')

@section('title', 'Registration')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/registration.css') }}">
    <img class="logo-regist" src="{{ Storage::url('/logo.png') }}">
    <h1>Sign up your account</h1>
    <form action="/register" class="form-container" method="POST">
        @csrf

        <div>
            <div class="form-content-new">
                <label for="nameInsert">Name</label>
                <input class="nameInsert" type="text" name="name" placeholder="Input your name..." style="border: 1px solid #111111; background-color: #181A1B; color: whitesmoke;">
                @error('name')
                    <strong class="error-msg">{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-content-new">
                <label for="emailInsert">Email address</label>
                <input id="emailInsert" type="email" name="email" placeholder="Input your email..." style="border: 1px solid #111111; background-color: #181A1B; color: whitesmoke;">
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
            <div class="form-content-new-radio">
                <label for="genderInsert">Gender</label><br>
                <div>
                    <input id="maleInsert" type="radio" name="gender" value="Male"
                        {{ old('gender') == 'Male' ? 'checked' : '' }}>Male
                    <input id="femaleInsert" type="radio" name="gender" value="Female"
                        {{ old('gender') == 'Female' ? 'checked' : '' }}>Female
                </div>
                @error('gender')
                    <strong class="error-msg">{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-content-new">
                <label for="dobInsert">Date Of Birth</label>
                <input id="dobInsert" type="date" name="dob" value="date" placeholder="Input your DOB.."  style="border: 1px solid #111111; background-color: #181A1B; color: whitesmoke;">
                @error('dob')
                    <strong class="error-msg">{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-content-new">
                <input type="submit" value="Sign Up" >
            </div>
    </form>
@endsection
