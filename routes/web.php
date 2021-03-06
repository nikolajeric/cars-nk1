<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $name = 'Nikola';
    $age = 20;
    return view('welcome' , compact('name', 'age'));
});

Route::get('/about', function() {
    return ('about us');
});

Route::get('/cars', [CarsController::class,'index']);

Route::get('/cars/{car}', [CarsController::class, 'show']);