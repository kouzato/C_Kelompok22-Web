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
    return view('pages.home2');
});


//Route::get('/dashboard', [DashboardController::class, 'index'] );

 //Route::get('/login', function () {
   // return view('cobalogin');
 //});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\backend\DashboardController::class, 'index'])->name('dashboard')->middleware('RoleAdmin');



Route::resource('dashboardpasien', 'DashboardPasienController');
Route::get('/dashboard2', [App\Http\Controllers\backend\DashboardPasienController::class, 'index'])->name('index');
Route::get('/artikel', [App\Http\Controllers\backend\ArtikelController::class, 'index'])->name('artikel');
Route::get('/biodatadokter', [App\Http\Controllers\backend\BiodataDokterController::class, 'index'])->name('biodatadokter');
Route::get('/listdokter', [App\Http\Controllers\backend\ListdokterController::class, 'index'])->name('listdokter');
Route::get('/profile', [App\Http\Controllers\backend\ProfileController::class, 'index'])->name('profile');
Route::get('/credits', [App\Http\Controllers\backend\CreditsController::class, 'index'])->name('credits');
Route::POST('/biodatadokter', [App\Http\Controllers\backend\BiodataDokterController::class, 'store'])->name('biodatadokter.store');
Route::DELETE('/biodatadokter', [App\Http\Controllers\backend\BiodataDokterController::class, 'destroy'])->name('biodatadokter.destroy');
Route::get('/biodatadokter/{id}', [App\Http\Controllers\backend\BiodataDokterController::class, 'edit'])->name('biodatadokter.edit');
//Route::group(['namespace' => 'backend'], function()
//{
//Route::resource('biodata', 'BiodataController');
//});
