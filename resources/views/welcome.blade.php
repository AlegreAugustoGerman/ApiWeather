<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
{{--

  "latitude" => -27.375
  "longitude" => -55.875
  "generationtime_ms" => 0.082015991210938
  "utc_offset_seconds" => 0
  "timezone" => "GMT"
  "timezone_abbreviation" => "GMT"
  "elevation" => 124.0
  "current_units" => array:17 [▼
    "time" => "iso8601"
    "interval" => "seconds"
    "temperature_2m" => "°C"
    "relative_humidity_2m" => "%"
    "apparent_temperature" => "°C"
    "is_day" => ""
    "precipitation" => "mm"
    "rain" => "mm"
    "showers" => "mm"
    "snowfall" => "cm"
    "weather_code" => "wmo code"
    "cloud_cover" => "%"
    "pressure_msl" => "hPa"
    "surface_pressure" => "hPa"
    "wind_speed_10m" => "km/h"
    "wind_direction_10m" => "°"
    "wind_gusts_10m" => "km/h"
  ]
  "current" => array:17 [▼
    "time" => "2024-01-30T13:15"
    "interval" => 900
    "temperature_2m" => 30.8
    "relative_humidity_2m" => 54
    "apparent_temperature" => 35.1
    "is_day" => 1
    "precipitation" => 0.0
    "rain" => 0.0
    "showers" => 0.0
    "snowfall" => 0.0
    "weather_code" => 1
    "cloud_cover" => 17
    "pressure_msl" => 1012.3
    "surface_pressure" => 998.3
    "wind_speed_10m" => 7.1
    "wind_direction_10m" => 105
    "wind_gusts_10m" => 17.6
  ]
]

--}}

    </head>
    <body class="antialiased">
        <div>
              {{ dd($data)}}

            {{-- Accede a los datos actuales --}}
            <?php $currentData = $data['current']; ?>

            {{-- Accede directamente a la temperatura --}}
            <?php $temperature = $currentData['temperature_2m']; ?>

            {{-- Muestra el dato --}}
             {{-- <li>{{ $currentData['temperature_2m']; }}</li> --}}
           {{--  {{dd( $currentData)}} --}}

        </div>
    </body>
</html>
