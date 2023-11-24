<?php

use App\Http\Controllers\arduinoGateController;
use App\Http\Controllers\leituraSensorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::resource('leitura-sensor', App\Http\Controllers\leituraSensorController::class)->only('index', 'store', 'create');

Route::get('leitura-sensor',[leituraSensorController::class,'index'])->name('leitura-sensor.index');

Route::get('/leitura-sensor/create',[leituraSensorController::class,'create'])->name('leitura-sensor.create');

######### GATE DO ARDUINO ##########
Route::post('leitura-sensor/arduino-gate',[arduinoGateController::class,'insert'])->name('leitura-sensor.arduino-gate');
######### GATE DO ARDUINO ##########

Route::post('/leitura-sensor/store',[leituraSensorController::class,'store'])->name('leitura-sensor.store');

Route::get('leitura-sensor/{id}',[leituraSensorController::class,'delete'])->name('leitura-sensor.delete');