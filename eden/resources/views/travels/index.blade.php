@extends('layout.app')

@section('title', 'Offerte')


@section('content')
    <h1>Offerte</h1>
    @foreach ($travels as $travel)
        <h2>{{ $travel->titolo }}</h2>
        <h2>{{ $travel->body }}</h2>
    @endforeach
@endsection
