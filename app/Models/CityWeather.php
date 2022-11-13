<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityWeather extends Model
{
    use HasFactory;

    protected $fillable = ["city_name","weather_type","feels_like","humidity","pressure","sea_level","temp","wind_speed","weather_date_time","weather_date_time_text"];
}
