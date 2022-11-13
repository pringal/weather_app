<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    // Get city weather from entered city name
    public function get_city_weather(Request $request){
        $input = $request->all();
        $weather_api_response = Http::get('https://api.openweathermap.org/data/2.5/weather?q='.$input['city'].'&appid='.env("WEATHER_API_KEY").'&units=metric');
        $jsonData = $weather_api_response->json();
        return response()->json(
            ['data' => $jsonData]
            ,200);
    }
}
