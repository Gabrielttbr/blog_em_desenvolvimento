<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/contents/{id}', function ( string $id) {
    return view('livewire.contents', ['id' => $id]);
})->name('contents.id');