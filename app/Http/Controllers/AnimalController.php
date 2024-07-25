<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = Animal::all();

        return view('pages.animals.index', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.animals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnimalRequest $request)
    {
        $data = $request->validated();

        $newAnimal = Animal::create($data);
        return redirect()->route('animals.show', $newAnimal);
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        return view('pages.animals.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        return view('pages.animals.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        $data = $request->all();

        $animal->nome = $data['nome'];
        $animal->specie = $data['specie'];
        $animal->razza = $data['razza'];
        $animal->eta = $data['eta'];
        $animal->sesso = $data['sesso'];
        $animal->colore = $data['colore'];
        $animal->peso = $data['peso'];
        $animal->altezza = $data['altezza'];
        $animal->url_img = $data['url_img'];
        $animal->note = $data['note'];
        $animal->update();

        return redirect()->route('animals.show', $animal);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect()->route('animals.index');
    }
}
