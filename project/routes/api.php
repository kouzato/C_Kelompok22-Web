<?php

use App\Http\Controllers\Api\Dashboard3ApiController;
use App\Http\Controllers\Api\LoginApiController;
use App\Http\Controllers\Api\RegisterApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\HttpCache\Store;
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

Route::group(['namespace' => 'Api'] ,function(){
Route::get('/dashboard3',[App\Http\Controllers\Api\Dashboard3ApiController::class, 'index']);
Route::get('/listdokter2',[App\Http\Controllers\Api\ListDokterApiController::class, 'index']);
Route::post('/profile3',[App\Http\Controllers\Api\Profile3ApiController::class, 'store']);
Route::post('/profile2',[App\Http\Controllers\Api\Profile2ApiController::class, 'store']);
Route::post('/register', [App\Http\Controllers\Api\RegisterApiController::class, 'store']);
Route::post('/login', [App\Http\Controllers\Api\LoginApiController::class, 'store']);
});

//Route::get('/dashboard3/{id}','Dashboard3ApiController@show')->name('dashboard3api.show');
//Route::post('/login', 'LoginApiController@store')->name('login.store');
//Route::post('/register', 'RegisterApiController@store')->name('register.store');
//Route::get('/dashboard3', [App\Http\Controllers\backend\Dashboard3ApiController::class, 'index']);