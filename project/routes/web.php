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
Route::get('/dashboard', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('dashboard')->middleware('RoleAdmin');

route::get('/error',function (){
  return view(error);
})->name('error');

Route::resource('dashboardpasien', 'DashboardPasienController');
Route::get('/dashboard2', [App\Http\Controllers\Backend\DashboardPasienController::class, 'index'])->name('dashboard2.index');
Route::get('/dashboard3', [App\Http\Controllers\Backend\Dashboard3Controller::class, 'index'])->name('dashboard3.index');
Route::get('/listdokter2', [App\Http\Controllers\Backend\DashboardListDokterController::class, 'index'])->name('listdokter2.index');
Route::get('/lokasi', [App\Http\Controllers\Backend\LokasiController::class, 'index'])->name('lokasi.index');

Route::get('/artikel', [App\Http\Controllers\Backend\ArtikelController::class, 'index'])->name('artikel');
Route::get('/biodatadokter', [App\Http\Controllers\Backend\BiodataDokterController::class, 'index'])->name('biodatadokter');
Route::get('/listdokter', [App\Http\Controllers\Backend\ListdokterController::class, 'index'])->name('listdokter');
Route::get('/listartikel', [App\Http\Controllers\Backend\ListArtikelController::class, 'index'])->name('listartikel');

Route::get('/profile', [App\Http\Controllers\Backend\ProfileController::class, 'index'])->name('profile');

Route::post('/profile3', [App\Http\Controllers\Backend\Profile3Controller::class, 'store'])->name('keluhan.store');
Route::delete('/profile3/{id}', [App\Http\Controllers\Backend\Profile3Controller::class, 'destroy'])->name('keluhan.destroy');
Route::get('/profile3/{id}', [App\Http\Controllers\Backend\Profile3Controller::class, 'edit'])->name('keluhan.edit');
Route::put('/profile3/{id}', [App\Http\Controllers\Backend\Profile3Controller::class, 'update'])->name('keluhan.update');
Route::get('/profile3', [App\Http\Controllers\Backend\Profile3Controller::class, 'index'])->name('profile3');

Route::get('/credits', [App\Http\Controllers\Backend\CreditsController::class, 'index'])->name('credits');
Route::get('/credits3', [App\Http\Controllers\Backend\Credits3Controller::class, 'index'])->name('credits3');

Route::post('/biodatadokter', [App\Http\Controllers\Backend\BiodataDokterController::class, 'store'])->name('biodatadokter.store');
Route::delete('/biodatadokter/{id}', [App\Http\Controllers\Backend\BiodataDokterController::class, 'destroy'])->name('biodatadokter.destroy');
Route::get('/biodatadokter/{id}', [App\Http\Controllers\Backend\BiodataDokterController::class, 'edit'])->name('biodatadokter.edit');
Route::put('/biodatadokter/{id}', [App\Http\Controllers\Backend\BiodataDokterController::class, 'update'])->name('biodatadokter.update');

Route::post('/listartikel', [App\Http\Controllers\Backend\ArtikelController::class, 'store'])->name('listartikel.store');
Route::delete('/listartikel/{id}', [App\Http\Controllers\Backend\ArtikelController::class, 'destroy'])->name('listartikel.destroy');
Route::get('/listartikel/{id}', [App\Http\Controllers\Backend\ArtikelController::class, 'edit'])->name('listartikel.edit');
Route::put('/listartikel/{id}', [App\Http\Controllers\Backend\ArtikelController::class, 'update'])->name('listartikel.update');

Route::get('/post/{id}', [App\Http\Controllers\Backend\PostArtikelController::class, 'index'])->name('post.index');
Route::get('/post3/{id}', [App\Http\Controllers\Backend\PostArtikel3Controller::class, 'index']);

Route::get('/listartikel',[App\Http\Controllers\Backend\ArtikelController::class,'search']);
Route::get('/listdokter',[App\Http\Controllers\Backend\BiodataDokterController::class,'search']);
Route::get('/dashboard2',[App\Http\Controllers\Backend\DashboardPasienController::class,'search']);
Route::get('/dashboard3',[App\Http\Controllers\Backend\Dashboard3Controller::class,'search']);
Route::get('/listdokter2',[App\Http\Controllers\Backend\DashboardListDokterController::class,'search']);

Route::get('/profile2', [App\Http\Controllers\Backend\Profile2Controller::class, 'index'])->name('profile2');
Route::post('/profile2', [App\Http\Controllers\Backend\Profile2Controller::class, 'store'])->name('keluhan2.store');
Route::delete('/profile2/{id}', [App\Http\Controllers\Backend\Profile2Controller::class, 'destroy'])->name('keluhan2.destroy');
Route::get('/profile2/{id}', [App\Http\Controllers\Backend\Profile2Controller::class, 'edit'])->name('keluhan2.edit');
Route::put('/profile2/{id}', [App\Http\Controllers\Backend\Profile2Controller::class, 'update'])->name('keluhan2.update');

