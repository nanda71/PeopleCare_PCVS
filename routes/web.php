<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/posts', PostController::class);
Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin');
Route::resource('/vaccines', VaccineController::class);
Route::resource('/centre', HealthCareCentreController::class);
Route::resource('/batch', VaccineBatchController::class);
Route::resource('/vaccination', VaccinationController::class);
//Route::resource('/???', UserController::class);

