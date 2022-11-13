<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Weather API Data</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        {{-- Developer css--}}
        <link rel="stylesheet" href="{{ asset('css/developer.css') }}"></link>

    </head>
    <body>
        <div class="container container-fluid table-structure">
            <div class="row">
                @csrf
                <div class="pt-10 mt-10">
                    <div class="col-md-6">
                        <input type="text" class="form-control" value="" placeholder="Enter City Name" id="city_name" name="city">
                    </div>
                    <div class="col-md-6">
                        <input type="button" class="form-control btn btn-primary" id="get_weather_submit" value="submit" name="Submit">
                    </div>
                </div>

                <div class="weather_data">
                    <table class="table hide" id="weather_table">
                        <tbody>
                        <tr>
                            <th>City Name</th>
                            <td id="city_name_text">-</td>
                        </tr>
                        <tr>
                            <th>Weather Type</th>
                            <td id="weather_type">-</td>
                        </tr>
                        <tr>
                            <th>Feels Like</th>
                            <td id="feels_like">-</td>
                        </tr>
                        <tr>
                            <th>Humidity</th>
                            <td id="humidity">-</td>
                        </tr>
                        <tr>
                            <th>Pressure</th>
                            <td id="pressure">-</td>
                        </tr>
                        <tr>
                            <th>Sea Level</th>
                            <td id="sea_level">-</td>
                        </tr>
                        <tr>
                            <th>Temperature</th>
                            <td id="temp">-</td>
                        </tr>
                        <tr>
                            <th>Wind Speed</th>
                            <td id="wind_speed">-</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div id="weather_api_message" class="text-center hide pt-5">-</div>
            </div>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{ asset('js/developer.js') }}"></script>
</html>
