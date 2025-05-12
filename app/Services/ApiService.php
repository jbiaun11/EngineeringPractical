<?php
namespace App\Services;

use JsonException;
use Illuminate\Support\Facades\Http;

class ApiService
{
    // method declaration
    static public function getWeatherDetails($latitude, $longitude) {

        // use free forecast api
        $baseUrl = 'https://api.open-meteo.com/v1/forecast?latitude=' . $latitude . '&longitude=' . $longitude . '&current=temperature_2m,relative_humidity_2m,wind_speed_10m';

        /*
        TO-DO:
        - Preferably would be https://api.open-meteo.com/v1/forecast and let @params (lat and long) be able to be passed in
        - Find a better way to parse the data that is more OOP
        - Handle error more gracefully
        - Go through a controller
        */

        try {
            $response = Http::get($baseUrl);
            $data = $response->collect('current');

            return $data;

        } catch (JsonException $e) {
            echo "Couldn't retrieve data: " . $e;
        }


    }
}
?>
