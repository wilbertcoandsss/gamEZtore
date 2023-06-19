@extends('layouts.header')

@section('title', 'Homepage')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/managegame.css') }}">
    <div class="top-con" style="background-color: #1B222C; color: aliceblue;">
        @if (Session::has('message'))
            <div class="alert"><img class="success-alert" src="{{ Storage::url('/success.png') }}">
                <h3>{{ Session::get('message') }}</h3>
            </div>
        @endif
    </div>
    <div class="content-wrap">
        @foreach ($games as $g)
            <a href="/gamedetails/{{ $g->id }}">
                <div class="content-box">

                    <img class="game-pic" src="{{ Storage::url('games/' . $g->pic) }}">

                    <h3>{{ $g->title }}</h3>

                    <div class="game-genre">
                        <h4>{{ $g->genre->genre }}</h4>
                    </div>

                    <hr class="line-games">

                    <div class="game-price">
                        <h4>
                            @if ($g->price == 0)
                                Free
                            @else
                                ${{ $g->price }}
                            @endif
                        </h4>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    <hr>
    <div class="results">
        <div class="pages" style="margin-left: 55px; margin-top: 10px;">
            Showing
            {{ $games->firstItem() }}
            to
            {{ $games->lastItem() }}
            of
            {{ $games->total() }}
            entries
        </div>
        <div class="pagination">
            <a class="pagination-content" href="{{ $games->previousPageUrl() }}">&laquo;</a>
            @for ($i = 1; $i <= $games->lastPage(); $i++)
                @if ($i == $games->currentPage())
                    <b><a class="pagination-content" style="color: red"
                            href="{{ $games->url($i) }}">{{ $i }}</a></b>
                @else
                    <a class="pagination-content" href="{{ $games->url($i) }}">{{ $i }}</a>
                @endif
            @endfor
            <a class="pagination-content" href="{{ $games->nextPageUrl() }}">&raquo;</a>
        </div>
    </div>
@endsection

