@extends('layouts.app')

@section('page-title')
Inserisci un animale
@endsection


@section('main-content')
    <div class="container">
        @if ($errors->any())
            <div class="row">
                <div class="col-12">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <div class="row justify-content-center">
            <form class="col-8" action="{{ route('animals.store')}}" method="POST">
                @csrf

                <h1 class="text-center m-3">Inserisci un nuovo animale</h1>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="mb-3">
                    <label for="specie" class="form-label">Specie:</label>
                    <input type="text" class="form-control" id="specie" name="specie">
                </div>
                <div class="mb-3">
                    <label for="razza" class="form-label">Razza:</label>
                    <input type="text" class="form-control" id="razza" name="razza">
                </div>
                <div class="mb-3">
                    <label for="eta" class="form-label">Età (anni):</label>
                    <input type="number" class="form-control" id="eta" name="eta">
                </div>
                <div class="mb-3">
                    <label for="sesso" class="form-label">Sesso:</label>
                    <input type="text" class="form-control" id="sesso" name="sesso">
                </div>
                <div class="mb-3">
                    <label for="colore" class="form-label">Colore:</label>
                    <input type="text" class="form-control" id="colore" name="colore">
                </div>
                <div class="mb-3">
                    <label for="peso" class="form-label">Peso (kg):</label>
                    <input type="number" class="form-control" id="peso" name="peso">
                </div>
                <div class="mb-3">
                    <label for="altezza" class="form-label">Altezza (cm):</label>
                    <input type="number" class="form-control" id="altezza" name="altezza">
                </div>
                <div class="mb-3">
                    <label for="note" class="form-label">Note:</label>
                    <input type="text" class="form-control" id="note" name="note">
                </div>
                <div class="mb-3">
                    <label for="url_img" class="form-label">Metti l'url di una foto:</label>
                    <input type="text" class="form-control" id="url_img" name="url_img">
                </div>
                <button type="submit" value="Inserisi un animale" class="btn btn-primary">Aggiungi animale alla lista</button>
            </form>
        </div>
    </div>
@endsection
