@extends('layouts.app')

@section('page-title')
Inserisci un animale
@endsection


@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <form class="col-8" action="{{ route('animals.store')}}" method="POST">
                <h1 class="text-center">Inserisci un nuovo animale</h1>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome">
                </div>
                <div class="mb-3">
                    <label for="specie" class="form-label">Specie:</label>
                    <input type="text" class="form-control" id="specoe">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
