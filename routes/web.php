<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/animals', [AnimalController::class, 'index'])->name('animals.index');
Route::post('/animals', [AnimalController::class, 'store'])->name('animals.store');
Route::get('/animals/create', [AnimalController::class, 'create'])->name('animals.create');
Route::get('/animals/{animal}', [AnimalController::class, 'show'])->name('animals.show');
Route::get('/animals/{animal}/edit', [AnimalController::class, 'edit'])->name('animals.edit');
Route::put('/animals/{animal}', [AnimalController::class, 'update'])->name('animals.update');
Route::delete('/animals/{animal}', [AnimalController::class, 'destroy'])->name('animals.destroy');
