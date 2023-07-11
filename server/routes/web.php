<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\VideoController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('login', [AuthController::class, 'login']);
Route::prefix('video')->group(function () {
    Route::get('/index/{id}', [VideoController::class, 'index']);
    Route::get('/show/{id}', [VideoController::class, 'show']);
    Route::get('/watch/{id}', [VideoController::class, 'watch']);
});
