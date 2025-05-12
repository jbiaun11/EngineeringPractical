<?php

use Illuminate\Support\Facades\Route;

// display welcome blade using data pulled from ApiService
Route::get('/', function () {
    return view('welcome', ['current' => App\Services\ApiService::getWeatherDetails()]);
})->name('curent.welcome');

