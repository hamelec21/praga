<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultadoController;
use App\Http\Controllers\ResultadoPrimeraAdultoController;
use App\Http\Controllers\ResultadoSegundaAdultoController;
use App\Http\Controllers\ResultadoTerceraAdultoController;
use App\Http\Controllers\ResultadoSeniorAdultoController;
use App\Http\Controllers\ResultadoSub45Controller;
use App\Http\Controllers\ResultadoPrimeraInfantilController;
use App\Http\Controllers\ResultadoSegundaInfantilController;
use App\Http\Controllers\ResultadoTerceraInfantilController;
use App\Http\Controllers\ResultadoFemeninasController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//Resultados adultos
Route::get('/resultados', [ResultadoController::class, 'index']);
Route::get('/resultado-primera-adulta', [ResultadoPrimeraAdultoController::class, 'index']);
Route::get('/resultado-segunda-adulta', [ResultadoSegundaAdultoController::class, 'index']);
Route::get('/resultado-tercera-adulta', [ResultadoTerceraAdultoController::class, 'index']);
Route::get('/resultado-senior', [ResultadoSeniorAdultoController::class, 'index']);
//Resultados sub45
Route::get('/resultado-sub45', [ResultadoSub45Controller::class, 'index']);
//Resultados infantiles
Route::get('/resultado-primera-infantil', [ResultadoPrimeraInfantilController::class, 'index']);
Route::get('/resultado-segunda-infantil', [ResultadoSegundaInfantilController::class, 'index']);
Route::get('/resultado-tercera-infantil', [ResultadoTerceraInfantilController::class, 'index']);
//Resultados Femeninas
Route::get('/resultado-femeninas', [ResultadoFemeninasController::class, 'index']);

