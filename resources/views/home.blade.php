@extends('layouts.app')

@section('main-content')
<main>
    <div class="container mt-5">
        <div class="row">
            @foreach ($movies as $film)
            <div class="col-4 mb-4">     
                <div class="card p-3">
                    <h2 class="title text-center">{{ $film->title }}</h2>
                    <p>Titolo originale: <span>{{ $film->original_title }}</span></p>
                    <p>Origine: <span>{{ $film->nationality }}</span></p>
                    <p>Disponibile dal: <span>{{ $film->date }}</span></p>
                    <p>Voto: <span>{{ $film->vote }}</span></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
        
    

</main>
@endsection