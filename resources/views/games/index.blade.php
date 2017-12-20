@extends('layouts.app')

@section('content')

    <a href="/games/create">Create a new game</a>

    <h1>My Games</h1>

    <ul>
    @foreach ($games as $game)

        <li><a href="/games/{{ $game->id }}">Game saved at {{ $game->updated_at }}</a></li>

    @endforeach
    </ul>

@endsection
