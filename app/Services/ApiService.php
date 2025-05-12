<?php
namespace App\Services;
use JsonException;


class ApiService
{
    // method declaration
    static public function getWeatherDetails() {

        // use free forecast api
        $url = 'https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&current=temperature_2m,relative_humidity_2m,wind_speed_10m';

        /*
        TO-DO:
        - Preferably would be https://api.open-meteo.com/v1/forecast and let @params (lat and long) be able to be passed in
        - Find a better way to parse the data that is more OOP
        - Handle error more gracefully
        - Go through a controller
        */

        try {
            $data = file_get_contents($url);    // read content
            $object = json_decode($data);     // convert JSON object to PHP object
            $current = $object->{'current'};  // get current info

            return $current;

        } catch (JsonException $e) {
            echo "Couldn't retrieve data: " . $e;
        }


    }
}
?>
