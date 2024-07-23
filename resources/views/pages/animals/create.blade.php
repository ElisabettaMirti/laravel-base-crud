@extends('layouts.app')

@section('page-title')
Inserisci un animale
@endsection


@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <form class="col-8" action="{{ route('animals.store')}}" method="POST">
                @csrf

                <h1 class="text-center m-3">Inserisci un nuovo animale</h1>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome">
                </div>
                <div class="mb-3">
                    <label for="specie" class="form-label">Specie:</label>
                    <input type="text" class="form-control" id="specie">
                </div>
                <div class="mb-3">
                    <label for="razza" class="form-label">Razza:</label>
                    <input type="text" class="form-control" id="razza">
                </div>
                <div class="mb-3">
                    <label for="eta" class="form-label">Età (anni):</label>
                    <input type="number" class="form-control" id="eta">
                </div>
                <div class="mb-3">
                    <label for="sesso" class="form-label">Sesso:</label>
                    <input type="text" class="form-control" id="sesso">
                </div>
                <div class="mb-3">
                    <label for="colore" class="form-label">Colore:</label>
                    <input type="text" class="form-control" id="colore">
                </div>
                <div class="mb-3">
                    <label for="peso" class="form-label">Peso (kg):</label>
                    <input type="number" class="form-control" id="peso">
                </div>
                <div class="mb-3">
                    <label for="altezza" class="form-label">Altezza (cm):</label>
                    <input type="number" class="form-control" id="altezza">
                </div>
                <div class="mb-3">
                    <label for="note" class="form-label">Note:</label>
                    <input type="text" class="form-control" id="note">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
