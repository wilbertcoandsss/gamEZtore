@extends('layouts.header')

@section('title', 'Manage Game Genre')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/managegame.css') }}">
    <div class="top-con">
        @if (Session::has('message'))
            <div class="alert"><img class="success-alert" src="{{ Storage::url('/success.png') }}">
                <h3>{{Session::get('message')}}</h3>
            </div>
        @endif
        <h1>Game Genre List</h1>
        <div class="test">
            <table style="border-collapse: collapse">
                <thead>
                    <th>Game Genre</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($genre as $g)
                        <tr>
                            <td>{{$g->genre}}</td>
                            <td><a href="updateGameGenrePage/{{$g->id}}">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
