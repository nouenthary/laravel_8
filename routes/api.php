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
Route::get('upload', [\App\Http\Controllers\UploadController::class, 'index']);
Route::post('upload', [\App\Http\Controllers\UploadController::class, 'store']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function () {
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index']);
    Route::apiResource('categories', \App\Http\Controllers\CategoryController::class);
});

Route::group(['middleware' => ['cors', 'json.response']], function () {
    Route::post('register', [\App\Http\Controllers\AuthController::class, 'register']);
    Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);
    Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
});
