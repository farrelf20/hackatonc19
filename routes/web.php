<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CovidController;
use App\Http\Controllers\RujukanController;
use App\Http\Controllers\VaksinController;

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
    return view('welcome');
});
Route::get('/home', [HomeController::class, 'index']);
Route::get('api/covid', [CovidController::class, 'index']);
Route::get('api/rujukan', [RujukanController::class, 'index']);
Route::get('/vaksin', [VaksinController::class, 'index']);
Route::get('vaksin/form', [VaksinController::class, 'create']);
Route::post('submit', [VaksinController::class, 'create']);