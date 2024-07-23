@extends('layouts.app')

@section('page-title')
{{ $animal->nome}} - {{$animal->note}}
@endsection

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <article class="col-6 card p-0 m-5">
                <img src="{{ $animal->url_img }}" class="card-img-top" alt="...">
                <div class="card-body p-3">
                    <h5 class="card-title my-3">Nome: {{$animal->nome}}</h5>
                    <p class="card-text">Specie: {{ $animal->specie }}</p>
                    <p class="card-text">Razza: {{ $animal->razza }}</p>
                    <p class="card-text">Età: {{ $animal->eta }} anni</p>
                    <p class="card-text">Sesso: {{ $animal->sesso }}</p>
                    <p class="card-text">Colore: {{ $animal->colore }}</p>
                    <p class="card-text">Peso: {{ $animal->peso }} kg</p>
                    <p class="card-text">Altezza: {{ $animal->altezza }} cm</p>
                    <p class="card-text">Info: {{ $animal->note }}</p>
                </div>
            </article>
        </div>
    </div>
@endsection
