<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    <div class="parents">
        <nav class="nav-bar">
            <div>
                <a href="/">
                    <img class="logo" src="{{ Storage::url('/logo(2).png') }}">
                </a>
            </div>
            @auth
                @if (Auth::user()->role == 'admin')
                    <div class="admin-nav">
                        <div>
                            <form action="/manageGamePage" method="GET">
                                <button class="manage-game-btn">Manage Game</button>
                            </form>
                        </div>
                        <div>
                            <form action="/manageGameGenrePage" method="GET">
                                <button class="manage-game-genre-btn">Manage Game Genre</button>
                            </form>
                        </div>
                    </div>
                @endif
            @endauth
            <div>
                <form action="/search" method="POST" class="search-bar">
                    @csrf
                    <button type="submit"><img class="search-logo"
                            src="{{ Storage::url('/search-bar.png') }}"></button>
                    <input type="text" placeholder="Search" name="search">
                </form>
            </div>
            @auth
                <div class="auth-container">
                    <div>
                        <a href="/cartPage"><img class="cart-img"
                                src="{{ Storage::url('/cart.png') }}"></a>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">
                            @if (Auth::user()->profilepic == null)
                                @if (Auth::user()->gender == 'Male')
                                    <img class="profile-pic" src="{{ Storage::url('/male_avatar.png') }}">
                                @else
                                    <img class="profile-pic" src="{{ Storage::url('/female_avatar.png') }}">
                                @endif
                            @else
                                <img class = "profile-pic" src ={{Storage::url('/').Auth::user()->profilepic}}>
                            @endif
                        </button>
                        <div class="dropdown-content">
                            <div class="greetings">
                                Hi, <strong>{{ Auth::user()->name }}</strong>
                            </div>
                            <hr class="line">
                            <a href="/profilePage">Your Profile</a>
                            <a href="/transactionHistoryPage">Transaction History</a>
                            <a href="/logout">Sign out</a>
                        </div>
                    </div>
                </div>
            @else
                <div class="regist-nav">
                    <div>
                        <form action="/loginPage">
                            <button class="sign-in-btn">Sign In</button>
                        </form>
                    </div>
                    <div>
                        <form action="/registerPage">
                            <button class="sign-up-btn">Sign Up</button>
                        </form>
                    </div>
                </div>
            @endauth
        </nav>
    </div>
    <div class="main">
        @yield('content')
    </div>
    @extends('layouts.footer')
    <script src="{{ asset('js/script-burger-bar.js') }}"></script>

    </div>
</body>

</html>
