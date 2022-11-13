## Technical Assessment - FE & BE

Weather API 

##Steps to Setup
- `git clone https://github.com/pringal/weather_app.git`
- Open .env file and add Open Weather API key for name "WEATHER_API_KEY" also add database credentials
- `composer install`
- `php artisan migrate`
- `php artisan storage:link`
- `php artisan serve`

##How to Use
- Enter City name in the input box
- click submit
- You will get the weather report of the entered city

##Unit Test
- `php artisan test`

