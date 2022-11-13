<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_weather', function (Blueprint $table) {
            $table->id();
            $table->string('city_name');
            $table->string('weather_type');
            $table->float('feels_like', 8, 2);
            $table->float('humidity', 8, 2);
            $table->float('pressure', 8, 2);
            $table->float('sea_level', 8, 2);
            $table->float('temp', 8, 2);
            $table->float('wind_speed');
            $table->string('weather_date_time');
            $table->dateTime('weather_date_time_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city_weather');
    }
};
