<?php

use Illuminate\Support\Facades\Route;

// GET request
Route::get('/', function () {
    return view('welcome', ['current' => App\Services\ApiService::getWeatherDetails()]);
})->name('curent.welcome');

