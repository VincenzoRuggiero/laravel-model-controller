@extends('layouts.app')

@section('main-content')
    @foreach ($movies as $film)
        <div class="card">
            <h1>{{ $film->title}}</h1>
            <p>Titolo originale {{ $film->original_title }}</p>
            <p>Origine {{ $film->nationality }}</p>
            <p>Disponibile dal {{ $film->date }}</p>
            <p>Voto {{ $film->date }}</p>
        </div>
    @endforeach
@endsection