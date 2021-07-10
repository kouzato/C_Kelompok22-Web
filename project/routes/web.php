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

route::get('/error',function (){
  return view(error);
})->name('error');

Route::resource('dashboardpasien', 'DashboardPasienController');
Route::get('/dashboard2', [App\Http\Controllers\backend\DashboardPasienController::class, 'index'])->name('index');
Route::get('/dashboard3', [App\Http\Controllers\backend\Dashboard3Controller::class, 'index'])->name('index');
Route::get('/listdokter2', [App\Http\Controllers\backend\DashboardListDokterController::class, 'index'])->name('index');

Route::get('/artikel', [App\Http\Controllers\backend\ArtikelController::class, 'index'])->name('artikel');
Route::get('/biodatadokter', [App\Http\Controllers\backend\BiodataDokterController::class, 'index'])->name('biodatadokter');
Route::get('/listdokter', [App\Http\Controllers\backend\ListdokterController::class, 'index'])->name('listdokter');
Route::get('/listartikel', [App\Http\Controllers\backend\ListArtikelController::class, 'index'])->name('listartikel');

Route::get('/profile', [App\Http\Controllers\backend\ProfileController::class, 'index'])->name('profile');
Route::get('/profile3', [App\Http\Controllers\backend\Profile3Controller::class, 'index'])->name('profile');

Route::get('/credits', [App\Http\Controllers\backend\CreditsController::class, 'index'])->name('credits');
Route::get('/credits3', [App\Http\Controllers\backend\Credits3Controller::class, 'index'])->name('credits');

Route::post('/biodatadokter', [App\Http\Controllers\backend\BiodataDokterController::class, 'store'])->name('biodatadokter.store');
Route::delete('/biodatadokter/{id}', [App\Http\Controllers\backend\BiodataDokterController::class, 'destroy'])->name('biodatadokter.destroy');
Route::get('/biodatadokter/{id}', [App\Http\Controllers\backend\BiodataDokterController::class, 'edit'])->name('biodatadokter.edit');
Route::put('/biodatadokter/{id}', [App\Http\Controllers\backend\BiodataDokterController::class, 'update'])->name('biodatadokter.update');

Route::post('/listartikel', [App\Http\Controllers\backend\ArtikelController::class, 'store'])->name('listartikel.store');
Route::delete('/listartikel/{id}', [App\Http\Controllers\backend\ArtikelController::class, 'destroy'])->name('listartikel.destroy');
Route::get('/listartikel/{id}', [App\Http\Controllers\backend\ArtikelController::class, 'edit'])->name('listartikel.edit');
Route::put('/listartikel/{id}', [App\Http\Controllers\backend\ArtikelController::class, 'update'])->name('listartikel.update');

Route::get('/post/{id}', [App\Http\Controllers\backend\PostArtikelController::class, 'index'])->name('index');
Route::get('/post3/{id}', [App\Http\Controllers\backend\PostArtikel3Controller::class, 'index']);

Route::get('/listartikel',[App\Http\Controllers\backend\ArtikelController::class,'search']);