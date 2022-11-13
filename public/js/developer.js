
$("#get_weather_submit").click(function(){
    let city_name = $("#city_name").val();
    // Call an API from open weather map and get city data
    $.post("get_city_weather",
        {
            _token: $('input[name=\"_token\"]').val(),
            city: city_name
        },
        function(data, status){
        if(data.data.cod != "200"){
            $("#weather_table").addClass("hide");
            $("#weather_api_message").html(data.data.message);
            $("#weather_api_message").removeClass("hide");
        }else{
            let city_name = $("#city_name").val();
            let feels_like_v = (data.data.main.feels_like) ? data.data.main.feels_like+" °C" : '-';
            let humidity = (data.data.main.humidity) ? data.data.main.humidity+" %" : '-';
            let pressure = (data.data.main.pressure) ? data.data.main.pressure+" hPa" : '-';
            let sea_level = (data.data.main.sea_level) ? data.data.main.sea_level+" hPa" : '-';
            let temp = (data.data.main.temp) ? data.data.main.temp+" °C" : '-';
            let wind_speed = (data.data.wind.speed) ? data.data.wind.speed+" km/h" : '-';
            let weather_type = (data.data.weather[0].description) ? data.data.weather[0].description : '-';

            // Add data in table td
            $("#city_name_text").html(city_name);
            $("#feels_like").html(feels_like_v);
            $("#humidity").html(humidity);
            $("#pressure").html(pressure);
            $("#sea_level").html(sea_level);
            $("#temp").html(temp);
            $("#wind_speed").html(wind_speed);
            $("#weather_type").html(weather_type);
            $("#weather_api_message").addClass("hide");
            $("#weather_table").removeClass("hide");
        }
        });
});
