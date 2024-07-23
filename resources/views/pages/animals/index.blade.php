@extends('layouts.app')

@section('page-title', 'Homepage')


@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center p-5">
                <h1>
                    Lista animali
                </h1>
            </div>
        </div>
        <div class="row">
            @foreach ($animals as $animal)
                <article class="col-3 card p-0 m-2">
                    <img src="{{ $animal->url_img }}" class="card-img-top" alt="...">
                    <div class="card-body p-3">
                        <h5 class="card-title my-3">Nome: {{$animal->nome}}</h5>
                        <p class="card-text">Specie: {{ $animal->specie }}</p>
                        <p class="card-text">Razza: {{ $animal->razza }}</p>
                        <a href="{{ route('animals.show', $animal)}}" class="btn btn-primary">Dettagli</a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
@endsection
