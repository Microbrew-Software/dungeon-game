@extends('layouts.app')

@section('content')

    <a href="/games">My Games</a>

    <h1>Show a Game</h1>

    <p><strong>User:</strong> {{ $user->name }}</p>

    <p><strong>Created:</strong> {{ $game->created_at }}</p>

    <p><strong>Updated:</strong> {{ $game->updated_at }}</p>

    <p><strong>Data:</strong> {{ $game->data }}</p>

@endsection
