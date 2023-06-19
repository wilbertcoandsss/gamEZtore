@extends('layouts.header')

@section('title', 'Manage Game')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/managegame.css') }}">
    <div class="top-con">
        @if (Session::has('message'))
            <div class="alert"><img class="success-alert" src="{{ Storage::url('/success.png') }}">
                <h3>{{Session::get('message')}}</h3>
            </div>
        @endif
        <h1>Game List</h1>
        <div class="test">
            <div class="add-game-btn">
                <a href="/insertGamePage">
                    Add Game
                </a>
            </div>
            <table style="border-collapse: collapse;">
                <thead>
                    <th>Game ID</th>
                    <th colspan="2">Game Title</th>
                    <th>PEGI Rating</th>
                    <th>Game Genre</th>
                    <th>Game Price</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($games as $g)
                        <tr>
                            <td>{{ $g->id }}</td>
                            <td>
                                <img class="game-pic-icon" src="{{ Storage::url('games/' . $g->pic) }}">
                            </td>
                            <td>{{ $g->title }}</td>
                            <td>{{ $g->pegi_rating }}</td>
                            <td>
                                <div class="game-genre-icon" style="background-color: #C21F1E; color: #C9CCD0;">
                                    <h4>{{ $g->genre->genre }}</h4>
                                </div>
                            </td>
                            <td>{{ $g->price }}</td>
                            <td><a href="updateGamePage/{{$g->id}}">Edit</a></td>
                            <td><a href="deleteGame/{{$g->id}}">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
