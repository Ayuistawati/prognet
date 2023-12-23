<?php

use App\Http\Controllers\Api\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Http\Controllers\AccessTokenController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('auth', AuthController::class);

Route::group(['prefix' => 'auth'], function () {
    Route::post('/register', 'Api\Auth\AuthController@register');
    Route::post('/login', 'Api\Auth\AuthController@login');
    Route::post('/logout', 'Api\Auth\AuthController@logout')
        ->middleware('auth:sanctum');
});

Route::post('/token', [AccessTokenController::class, 'issueToken']);