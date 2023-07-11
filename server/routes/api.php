<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\VideoController;
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

Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    /*********************************
     * MEDIA
     *********************************/
    Route::prefix('media')->group(function () {
        Route::get('/show/{id}', [MediaController::class, 'show']);
        Route::get('/search', [MediaController::class, 'search']);
        Route::get('/latest', [MediaController::class, 'latest']);
        Route::get('/favorites', [MediaController::class, 'favorites']);
        Route::get('/watched', [MediaController::class, 'watched']);
        Route::get('/similar', [MediaController::class, 'similar']);
        Route::get('/hot', [MediaController::class, 'hot']);
        Route::get('/top', [MediaController::class, 'top']);
    });


    /*********************************
     * Video
     *********************************/
    Route::prefix('video')->group(function () {
        Route::get('/index/{id}', [VideoController::class, 'index']);
        Route::get('/show/{id}', [VideoController::class, 'show']);
        Route::get('/watch/{id}', [VideoController::class, 'watch']);
        Route::get('/watch/media/{id}', [VideoController::class, 'watchMedia']);
    });
});
