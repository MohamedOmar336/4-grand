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

Route::group(['prefix' => 'tags'], function () {
    Route::get('', [\App\Http\Controllers\Api\TagController::class, 'index']);
    Route::post('/create', [\App\Http\Controllers\Api\TagController::class, 'store']);
    Route::post('/destroy', [\App\Http\Controllers\Api\TagController::class, 'destroy']);
    Route::post('/update', [\App\Http\Controllers\Api\TagController::class, 'update']);
});
Route::group(['prefix' => 'categories'], function () {
    Route::get('', [\App\Http\Controllers\Api\CategoryController::class, 'index']);
    Route::post('/create', [\App\Http\Controllers\Api\CategoryController::class, 'store']);
    Route::post('/destroy', [\App\Http\Controllers\Api\CategoryController::class, 'destroy']);
    Route::post('/update', [\App\Http\Controllers\Api\CategoryController::class, 'update']);
});
Route::group(['prefix' => 'ads'], function () {
    Route::get('', [\App\Http\Controllers\Api\AdvertisementController::class, 'index']);
    Route::post('/searchAds', [\App\Http\Controllers\Api\AdvertisementController::class, 'searchAds']);
});
