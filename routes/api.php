<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/getApiRadio',[App\Http\Controllers\RadioApiController::class,'index']);
Route::get('/getApiRadio2',[App\Http\Controllers\RadioApiController::class,'index2']);
Route::get('/getApiFo',[App\Http\Controllers\FoApiController::class,'index']);
Route::get('/getApiFo2',[App\Http\Controllers\FoApiController::class,'index2']);
Route::get('/getApiVm',[App\Http\Controllers\VmApiController::class,'index']);
Route::get('/getApiVm2',[App\Http\Controllers\VmApiController::class,'index2']);