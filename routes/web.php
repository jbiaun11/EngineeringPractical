<?php

use Illuminate\Support\Facades\Route;

// display welcome blade using data pulled from ApiService
Route::get('/', function () {
    return view('welcome', ['data' => App\Livewire\CreateForm::getCity('Paris')]);
})->name('data.welcome');

