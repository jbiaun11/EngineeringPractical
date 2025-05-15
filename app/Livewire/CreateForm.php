<?php

namespace app\Livewire;

use Livewire\Component;
use App\Services\ApiService;
use Illuminate\Support\Facades\Http;
use JsonException;

class CreateForm extends Component
{
    static public function getCity($city){
        // incorporate city into url
        $cityUrl = 'https://geocoding-api.open-meteo.com/v1/search?name=' . $city . '&count=1&language=en&format=json';

        try {
            // fetch json
            $cityResponse = Http::get($cityUrl);
            $results = $cityResponse['results'];

            $latitude = $results[0]['latitude'];
            $longitude = $results[0]['longitude'];

            // call for Api Service
            $data = ApiService::getWeatherDetails($latitude, $longitude);

            return $data;

        } catch (JsonException $e) {
            echo "Couldn't retrieve data: " . $e;
        }
    }

    public function render()
    {
        return view('livewire.create-form');
    }
}
