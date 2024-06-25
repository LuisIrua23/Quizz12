<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('libros/listar', [BookController::class, 'listar'])->name('book.listar');
Route::get('libros/create', [BookController::class, 'create'])->name('book.create');
// Route::post('libros/show', [BookController::class, 'show'])->name('book.show');
Route::post('libros/store', [BookController::class, 'store'])->name('book.store');
Route::post('libros/{book}', [BookController::class, 'show'])->name('book.show');
Route::put('libros/{book}', [BookController::class, 'update'])->name('book.update');
Route::delete('libros/{book}', [BookController::class, 'destroy'])->name('book.destroy');
Route::get('libros/{book}/edit', [BookController::class, 'edit'])->name('book.edit');