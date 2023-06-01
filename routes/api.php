<?php

use App\Http\Controllers\Api\AuthController;
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

/**
 * AUTHENTICATION
 */
//Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

/**
 * PROTECTED ROUTES
 */
Route::group(['middleware' => ['auth:sanctum']], function () {

    /**
     * Route Slider Api
     */
    Route::get('serve/{id}',[\App\Http\Controllers\Api\ServeController::class,'show']);
    Route::patch('serve/{id}',[\App\Http\Controllers\Api\ServeController::class,'update']);
    Route::delete('serve/{id}',[\App\Http\Controllers\Api\ServeController::class,'delete']);
    Route::post('serve',[\App\Http\Controllers\Api\ServeController::class,'create']);
    Route::get('/serve',[\App\Http\Controllers\Api\ServeController::class,'index']);

    /**
     * Route Slider Api
     */
    Route::get('slider/{id}',[\App\Http\Controllers\Api\SliderController::class,'show']);
    Route::patch('slider/{id}',[\App\Http\Controllers\Api\SliderController::class,'update']);
    Route::delete('slider/{id}',[\App\Http\Controllers\Api\SliderController::class,'delete']);
    Route::post('slider',[\App\Http\Controllers\Api\SliderController::class,'create']);
    Route::get('/slider',[\App\Http\Controllers\Api\SliderController::class,'index']);

    /**
     * Route About Api
     */
    Route::get('about/{id}',[\App\Http\Controllers\Api\AboutController::class,'show']);
    Route::patch('about/{id}',[\App\Http\Controllers\Api\AboutController::class,'update']);
    Route::delete('about/{id}',[\App\Http\Controllers\Api\AboutController::class,'delete']);
    Route::post('about',[\App\Http\Controllers\Api\AboutController::class,'create']);
    Route::get('/about',[\App\Http\Controllers\Api\AboutController::class,'index']);

    /**
     * Route Screen Api
     */
    Route::get('screen/{id}',[\App\Http\Controllers\Api\ScreenController::class,'show']);
    Route::patch('screen/{id}',[\App\Http\Controllers\Api\ScreenController::class,'update']);
    Route::delete('screen/{id}',[\App\Http\Controllers\Api\ScreenController::class,'delete']);
    Route::post('screen',[\App\Http\Controllers\Api\ScreenController::class,'create']);
    Route::get('screen',[\App\Http\Controllers\Api\ScreenController::class,'index']);

    /**
     * Logout Function
     */
    Route::post('logout', [AuthController::class, 'logout']);
});
