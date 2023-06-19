@extends('layouts.header')

@section('title', 'Manage Game Genre')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/insertgame.css') }}">
    <div class="main-wrap-profile">
        <div class="profile">
            <h1>Update Game Genre</h1>
            <form enctype="multipart/form-data" action="/updateGameGenre/{{ $genre->id }}" method="POST" return="false">
                @csrf
                <div class="form-content">
                    <div class="form-insert">
                        <label for="titleInsert">Update Game Genre</label>
                        <input class="titleInsert" type="text" name="genre" placeholder="{{ $genre->title }}">
                    </div>
                    <div class="error-msg">
                        @error('genre')
                            <strong class="error-msg">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="form-content">
                    <div class="form-insert">
                        <input type="submit" value="Update">
                    </div>
                </div>
            </form>
        </div>
    @endsection
