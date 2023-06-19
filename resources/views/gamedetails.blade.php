@extends('layouts.header')

@section('title', 'Game Details')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/gamedetail.css') }}">
    @foreach ($games as $g)
        <div class="details-wrap"
            style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('../storage/games/{{ $g->pic }}'); background-repeat: no-repeat; background-size: cover;">
            <div class="title">
                <h1>{{ $g->title }}</h1>
                <div class="game-genre">
                    <h4>{{ $g->genre->genre }}</h4>
                </div>
            </div>
            <div class="details-content">
                <div class="desc-text">
                    <h2>{{ $g->description }}</h2>
                </div>
                <div class="desc-img">
                    <div class="game-price">
                        <p>
                            @if ($g->price == 0)
                                Free
                            @else
                                ${{ $g->price }}
                            @endif
                        </p>
                        <div>
                            <h3>
                                <img class="pegi-img" src="{{ Storage::url('rating/PEGI' . $g->pegi_rating . '.png') }}">
                            </h3>
                        </div>
                    </div>
                    <div class="add-to-cart-btn">
                        <form action="/addGame/{{$g->id}}" method="POST">
                            @csrf
                            <input type="submit" value="Add to Cart">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
