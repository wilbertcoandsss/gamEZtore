@extends('layouts.header')

@section('title', 'Profile')

@section('content')
@if (Session::has('message'))
<div class="alert"><img class="success-alert" src="{{ Storage::url('/success.png') }}">
    <h3>{{ Session::get('message') }}</h3>
</div>
@endif
    <div class="main-wrap-profile">
        <div class="profile">
            <h1>Profile</h1>
            <form enctype="multipart/form-data" action="/updateProfile/{{ Auth::user()->id }}" method="POST">
                @csrf
                <div class="form-content">
                    <div class="form-insert">
                        <label for="nameInsert">Name</label>
                        <input class="nameInsert" type="text" name="name" placeholder="{{ Auth::user()->name }}">
                    </div>
                    <div class="error-msg">
                        @error('name')
                            <strong class="error-msg">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <hr class="line-break">
                <div class="form-content">
                    <div class="form-insert-special">
                        <input id="photoInsert" type="file" name="photo" placeholder="Input your photo...">
                        @if (Auth::user()->profilepic == null)
                            @if (Auth::user()->gender == 'Male')
                                <img class="profile-pic" src="{{ Storage::url('/male_avatar.png') }}">
                            @else
                                <img class="profile-pic" src="{{ Storage::url('/female_avatar.png') }}">
                            @endif
                        @else
                            <img class="profile-pic" src={{ Storage::url('/') . Auth::user()->profilepic }}>
                        @endif
                        <label for="photoInsert">Photo</label>
                    </div>
                    <div class="error-msg">
                        @error('profilepic')
                            <strong class="error-msg">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <hr class="line-break">
                <div class="form-content">
                    <div class="form-insert">
                        <label for="emailInsert">Email address</label>
                        <input id="emailInsert" type="email" name="email" placeholder="{{ Auth::user()->email }}">
                    </div>
                    <div class="error-msg">
                        @error('email')
                            <strong class="error-msg">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <hr class="line-break">
                <div class="form-content">
                    <div class="form-insert">
                        <label for="gender">Gender</label>
                        {{ Auth::user()->gender }}
                    </div>
                </div>
                <hr class="line-break">
                <div class="form-content">
                    <div class="form-insert">
                        <label for="Date of Birth">Date of Birth</label>
                        {{ Auth::user()->dob }}
                    </div>
                </div>
                <hr class="line-break">
                <div class="form-content">
                    <div class="form-insert">
                        <input type="submit" value="Update">
                    </div>
                </div>
            </form>
        </div>

        <div class="account">
            <h1>Account</h1>
            <form action="/updateAccount/{{ Auth::user()->id }}" method="POST">
                @csrf
                <div class="form-content-1">
                    <div class="form-insert">
                        <label for="oldPassword">Old Password</label>
                        <input class="oldPassword" type="password" name="old_pw" placeholder="Input your old password...">
                    </div>
                    <div class="error-msg">
                        @error('old_pw')
                            <strong class="error-msg">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <hr class="line-break-1">
                <div class="form-content-1">
                    <div class="form-insert">
                        <label for="newPassword">New Password</label>
                        <input class="newPassword" type="password" name="new_pw" placeholder="Input your new password...">
                    </div>
                    <div class="error-msg">
                        @error('new_pw')
                            <strong class="error-msg">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <hr class="line-break-1">
                <div class="form-content-1">
                    <div class="form-insert">
                        <label for="confirmPassword">Confirm New Password</label>
                        <input class="confirmPassword" type="password" name="confirm_pw" placeholder="Input your confirm password...">
                    </div>
                    <div class="error-msg">
                        @error('confirm_pw')
                            <strong class="error-msg">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <hr class="line-break-1">
                <div class="form-content-1">
                    <div class="form-insert">
                        <input type="submit" value="Update">
                    </div>
                </div>
        </div>
        </form>
    </div>


@endsection
