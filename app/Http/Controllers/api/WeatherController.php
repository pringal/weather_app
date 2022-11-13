<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\CityWeather;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    // Store city weather data from entered city name and return data
    public function store_return_city_data(Request $request){
        $input = $request->all();
        // get comma separated city name
        $cities = explode(",",$input['city']);
        $city_weather_list_result = [];
        foreach ($cities as $city){
        // get data from open weather api
            $weather_api_response = Http::get('https://api.openweathermap.org/data/2.5/forecast?q='.$city.'&appid='.env("WEATHER_API_KEY").'&units=metric');
            $jsonData = $weather_api_response->json();

            // if invalid city name entered
            if(!isset($jsonData["list"])){
                continue;
            }
            foreach($jsonData["list"] as $rows){
                // insert data in city_weather table
                $city_weather_model = CityWeather::where(["weather_date_time"=>$rows["dt"],"city_name"=>$weather_api_response["city"]["name"]])->count();
                $city_weather_list = [
                    "city_name"=>$weather_api_response["city"]["name"],
                    "weather_type"=>($rows["weather"]) ? $rows["weather"][0]["description"] : "-",
                    "feels_like"=>$rows["main"]["feels_like"],
                    "humidity"=>$rows["main"]["humidity"],
                    "pressure"=>$rows["main"]["pressure"],
                    "sea_level"=>$rows["main"]["sea_level"],
                    "temp"=>$rows["main"]["temp"],
                    "wind_speed"=>$rows["wind"]["speed"],
                    "weather_date_time"=>$rows["dt"],
                    "weather_date_time_text"=>$rows["dt_txt"]
                ];
                $city_weather_list_result[$city][] = $city_weather_list;
                if($city_weather_model == 0){
                    CityWeather::create($city_weather_list);
                }
            }
        }
        return response()->json(
            ['data' => $city_weather_list_result, 'message'=>"City Weather data!"]
            ,200);
    }
}
