<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExchangeController;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function() {
    /**
     * Home Routes
     */
    Route::get('/', [ExchangeController::class, 'index']);


    Route::group([
        'prefix' => 'exchange',
        'middleware' => ['guest']
    ], function() {

        Route::get('/{id}', [ExchangeController::class, 'downloadEUR']);
    });
});
