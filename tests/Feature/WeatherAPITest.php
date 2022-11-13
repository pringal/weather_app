<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WeatherAPITest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_home_page()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_weather_api()
    {
        $response = $this->post('/get_city_weather',['city' => 'Rajkot']);
        $response->assertStatus(200);
    }
}
