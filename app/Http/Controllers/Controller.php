<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Exception;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

/* public function prueba()
    {
    $url=env('URL_COPERNICUS_API','http://');//agregar host
    $response=Http::get($url.'/fecha o campo de tabla'); //agregar tabla o parametro de busqueda
    $data=$response->json();
    return view('welcome',compact('data'));
    }
}
 */

/*     public function prueba()    //https://api.copernicus.eu/api/v2
    {                           //https://cds.climate.copernicus.eu/api/v2
        $response = Http::get('https://catalogue.dataspace.copernicus.eu/stac/search?collections=SENTINEL-1,SENTINEL-2');
        $data = json_decode($response->getBody());
        return view('welcome', compact('data'));
    } */

/*     public function prueba() {
        $username = 'dev.back@poloticmisiones.com';
        $password = 'Dev.back2024';

        $response = Http::withHeaders([
          'Authorization' => 'Basic ' . base64_encode($username . ':' . $password),
        ])->get('https://api.copernicus.eu/api/v2/');

        $data = json_decode($response->getBody());

        return view('welcome', compact('data'));
      } */
/*
https://catalogue.dataspace.copernicus.eu/stac/search?collections=SENTINEL-1,SENTINEL-2
filtrado por enero 2024
https://catalogue.dataspace.copernicus.eu/stac/search?collections=SENTINEL-1&datetime=2024-01-01
*/
public function prueba()
{
    // Realizar la petición a la API STAC
    try {//https://api.open-meteo.com/v1/forecast?latitude=-27.3671&longitude=-55.8961&current=temperature_2m&hourly=temperature_2m
        $response = Http::get('https://api.open-meteo.com/v1/forecast?latitude=-27.3671&longitude=-55.8961&current=temperature_2m,relative_humidity_2m,apparent_temperature,is_day,precipitation,rain,showers,snowfall,weather_code,cloud_cover,pressure_msl,surface_pressure,wind_speed_10m,wind_direction_10m,wind_gusts_10m')
            ->throw(); // Lanzar excepción si la petición falla

        $data = $response->json(); // Decodificar la respuesta JSON directamente

        // Manejar los datos recibidos
        // ...

        return view('welcome', compact('data'));
    } catch (Exception $exception) {
        // Manejar errores de la petición
        return back()->withErrors(['error' => 'Ocurrió un error al acceder a la API']);
    }
}

}


