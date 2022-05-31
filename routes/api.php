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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/empresas','App\Http\Controllers\EmpresasController@index');
Route::post('/empresas','App\Http\Controllers\EmpresasController@store');
Route::put('/empresas/{id}','App\Http\Controllers\EmpresasController@update');
Route::delete('/empresas/{id}','App\Http\Controllers\EmpresasController@destroy');