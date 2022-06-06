<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group([
    'middleware' => 'api'
], function ($router) {

    Route::get('autobusi', [\App\Http\Controllers\AutobusiController::class, 'index']);
    Route::get('autobusi/{id}', [\App\Http\Controllers\AutobusiController::class, 'show']);
    Route::post('autobusi', [\App\Http\Controllers\AutobusiController::class, 'store']);
    Route::put('autobusi/{id}', [\App\Http\Controllers\AutobusiController::class, 'update']);
    Route::delete('autobusi/{id}', [\App\Http\Controllers\AutobusiController::class, 'destroy']);

    Route::get('karte', [\App\Http\Controllers\KarteController::class, 'index']);
    Route::get('karte/{id}', [\App\Http\Controllers\KarteController::class, 'show']);
    Route::post('karte', [\App\Http\Controllers\KarteController::class, 'store']);
    Route::put('karte/{id}', [\App\Http\Controllers\KarteController::class, 'update']);
    Route::delete('karte/{id}', [\App\Http\Controllers\KarteController::class, 'destroy']);

    Route::get('putnici', [\App\Http\Controllers\PutniciController::class, 'index']);
    Route::get('putnici/{id}', [\App\Http\Controllers\PutniciController::class, 'show']);
    Route::post('putnici', [\App\Http\Controllers\PutniciController::class, 'store']);
    Route::put('putnici/{id}', [\App\Http\Controllers\PutniciController::class, 'update']);
    Route::delete('putnici/{id}', [\App\Http\Controllers\PutniciController::class, 'destroy']);

    Route::get('tura', [\App\Http\Controllers\TuraController::class, 'index']);
    Route::get('tura/{id}', [\App\Http\Controllers\TuraController::class, 'show']);
    Route::post('tura', [\App\Http\Controllers\TuraController::class, 'store']);
    Route::put('tura/{id}', [\App\Http\Controllers\TuraController::class, 'update']);
    Route::delete('tura/{id}', [\App\Http\Controllers\TuraController::class, 'destroy']);


});
