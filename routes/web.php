<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


Route::prefix('tasks')->group(function () {
    Route::get('/', [HomeController::class, 'getHello']);
    Route::get('/create', [HomeController::class, 'getCreate']);
    Route::post('/store', function(){});
    Route::get('{id}/edit}', function(){});
    Route::get('{id}/show}', function(){});
    Route::patch('{id}/update}', function(){});
    Route::delete('{id}', function(){});

});
