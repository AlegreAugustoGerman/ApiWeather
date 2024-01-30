<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/',[Controller::class, 'prueba'])
->name('welcome');
/* Route::get('/', function () {
    $response=Http::get('https://');
    $data=$response->json();
    dd($response);
    return view('welcome');
});
 */
