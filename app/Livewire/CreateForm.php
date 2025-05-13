<?php

namespace App\Livewire;

use Livewire\Component;
use app\Services\ApiService;
use Illuminate\Support\Facades\Http;
use JsonException;

class CreateForm extends Component
{
    public function getCity($city){
        // incorporate city into url
        $cityUrl = 'https://geocoding-api.open-meteo.com/v1/search?name=' . $city . '&count=1&language=en&format=json';

        try {
            // fetch json
            $cityResponse = Http::get($cityUrl);
            $latitude = $cityResponse->collect('latitude');
            $longitude = $cityResponse->collect('longitude');
            echo 'lat: ' . $latitude . ' long: ' . $longitude;

            // call for Api Service
            // return ApiService::getWeatherDetails($$latitude, $longitude);

        } catch (JsonException $e) {
            echo "Couldn't retrieve data: " . $e;
        }
    }

    public function render()
    {
        return view('livewire.create-form');
    }
}
