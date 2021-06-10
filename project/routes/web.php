<?php

use App\Http\controllers\Backend\DashboardController;
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
Route::group(['namespace' => 'Frontend'], function() {
	Route::resource('home', 'HomeController');
});

// Route::group(['namespace' => 'Backend'], function()
// {
//     Route::resource('dashboard', 'DashboardControler');
// });


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [DashboardController::class, 'index'] );

Route::get('/login', function () {
    return view('cobalogin');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
