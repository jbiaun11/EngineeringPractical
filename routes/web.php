<?php

use Illuminate\Support\Facades\Route;

// display welcome blade using data pulled from ApiService
Route::get('/', function () {
    return view('welcome', ['data' => App\Services\ApiService::getWeatherDetails(52.52, 13.41)]);
})->name('data.welcome');

