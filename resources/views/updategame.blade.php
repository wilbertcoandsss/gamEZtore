@extends('layouts.header')

@section('title', 'Manage Game')

@section('content')
<link rel="stylesheet" href="{{ asset('css/insertgame.css') }}">
    <div class="main-wrap-profile">
        <div class="profile">
            <h1>Update Game</h1>
            <form enctype="multipart/form-data" action="/updateGame/{{$games->id}}" method="POST" return = "false">
                @csrf
                <div class="form-content">
                    <div class="form-insert">
                        <label for="titleInsert">Game Title</label>
                        <input class="titleInsert" type="text" name="title" placeholder = "{{$games->title}}">
                    </div>
                    <div class="error-msg">
                        @error('title')
                        <strong class="error-msg">{{ $message }}</strong>
                    @enderror
                    </div>
                </div>
                <hr class="line-break">
                <div class="form-content">
                    <div class="form-insert-special">
                        <input id="photoInsert" type="file" name="photo" placeholder="Input your photo...">                        <img class="profile-pic-new"
                        src="{{ Storage::url('games/') . $games->pic }}">
                        <label for="photoInsert">Photo</label>
                    </div>
                    <div class="error-msg">
                        @error('photo')
                        <strong class="error-msg">{{ $message }}</strong>
                    @enderror
                    </div>
                </div>
                <hr class="line-break">
                <div class="form-content">
                    <div class="form-insert">
                        <label for="descInsert">Game Description</label>
                        <textarea id="descInsert" name="desc"  placeholder = "{{$games->description}}"></textarea>
                    </div>
                    <div class="error-msg">
                        @error('desc')
                        <strong class="error-msg">{{ $message }}</strong>
                    @enderror
                    </div>
                </div>
                <hr class="line-break">
                <div class="form-content">
                    <div class="form-insert">
                        <label for="priceInsert">Game Price</label>
                        <input id="priceInsert" type="number" name="price"  placeholder = "{{$games->price}}">
                    </div>
                    <div class="error-msg">
                        @error('price')
                        <strong class="error-msg">{{ $message }}</strong>
                    @enderror
                    </div>
                </div>
                <hr class="line-break">
                <div class="form-content">
                    <div class="form-insert" oninput="genreValidation()">
                        <label for="newGameGenre">Game Genre</label>
                        <select id="genre" name="genre"  style="border: 1px solid #111111; background-color: #181A1B; color: whitesmoke;">
                            @foreach ($genre as $g)
                                <option value={{ $g->genre }}>{{ $g->genre }}</option>
                            @endforeach
                            <option value="newgenre">Add New Genre</option>
                        </select>
                    </div>
                    <div class="error-msg">
                        @error('new_genre')
                        <strong class="error-msg">{{ $message }}</strong>
                    @enderror
                    </div>
                </div>
                <span id = "new-genre-form" style="display: none">
                    <hr class="line-break">
                    <div class="form-content">
                        <div class="form-insert">
                            <label for="priceInsert">New Game Genre</label>
                            <input id="priceInsert" type="text" name="new_genre" placeholder="Input genre...">
                        </div>
                        <div class="error-msg">
                            @error('genre')
                        <strong class="error-msg">{{ $message }}</strong>
                    @enderror
                        </div>
                    </div>
                </span>
                <hr class="line-break">
                <div class="form-content">
                    <div class="form-insert" oninput="genreValidation()">
                        <label for="pegi">PEGI Rating</label>
                        <select id="pegi" name="pegi"  style="border: 1px solid #111111; background-color: #181A1B; color: whitesmoke;">
                            <option>0</option>
                            <option>3</option>
                            <option>7</option>
                            <option>12</option>
                            <option>16</option>
                            <option>18</option>
                        </select>
                    </div>
                    <div class="error-msg">
                        @error('pegi')
                        <strong class="error-msg">{{ $message }}</strong>
                    @enderror
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

        <script type="text/javascript">
            function genreValidation() {
                let country = document.getElementById("genre").value;

                if(country == 'newgenre'){
                    document.getElementById("new-genre-form").style.display = "block";
                }
                else{
                    document.getElementById("new-genre-form").style.display = "none";
                }
            }
        </script>
    @endsection
