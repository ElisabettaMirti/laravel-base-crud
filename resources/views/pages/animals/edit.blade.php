@extends('layouts.app')

@section('page-title')
Modifica il profilo di {{ $animal->nome }}
@endsection


@section('main-content')
    <div class="container">
        <h1 class="text-center m-3">Modifica il profilo di {{ $animal->nome }}</h1>
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
            <form class="col-8" action="{{ route('animals.update', $animal)}}" method="POST">
                @method("PUT")
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $animal->nome) }}">
                </div>
                <div class="mb-3">
                    <label for="specie" class="form-label">Specie:</label>
                    <input type="text" class="form-control" id="specie" name="specie" value="{{ old('specie', $animal->specie) }}">
                </div>
                <div class="mb-3">
                    <label for="razza" class="form-label">Razza:</label>
                    <input type="text" class="form-control" id="razza" name="razza"  value="{{ old('razza', $animal->razza) }}">
                </div>
                <div class="mb-3">
                    <label for="eta" class="form-label">Età (anni):</label>
                    <input type="number" class="form-control" id="eta" name="eta" value="{{ old('eta', $animal->eta) }}">
                </div>
                <div class="mb-3">
                    <label for="sesso" class="form-label">Sesso:</label>
                    <input type="text" class="form-control" id="sesso" name="sesso" value="{{ old('sesso', $animal->sesso) }}">
                </div>
                <div class="mb-3">
                    <label for="colore" class="form-label">Colore:</label>
                    <input type="text" class="form-control" id="colore" name="colore"  value="{{ old('colore', $animal->colore) }}">
                </div>
                <div class="mb-3">
                    <label for="peso" class="form-label">Peso (kg):</label>
                    <input type="number" class="form-control" id="peso" name="peso"  value="{{ old('peso', $animal->peso) }}">
                </div>
                <div class="mb-3">
                    <label for="altezza" class="form-label">Altezza (cm):</label>
                    <input type="number" class="form-control" id="altezza" name="altezza"  value="{{ old('altezza', $animal->altezza) }}">
                </div>
                <div class="mb-3">
                    <label for="note" class="form-label">Note:</label>
                    <input type="text" class="form-control" id="note" name="note"  value="{{ old('note', $animal->note) }}">
                </div>
                <div class="mb-3">
                    <label for="url_img" class="form-label">Metti l'url di una foto:</label>
                    <input type="text" class="form-control" id="url_img" name="url_img"  value="{{ old('url_img', $animal->url_img) }}">
                </div>
                <button type="submit" value="Modifica animale" class="btn btn-primary">Modifica animale</button>
            </form>
        </div>
    </div>
@endsection
