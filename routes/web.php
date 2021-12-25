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

Route::get('logout',"Authentication@logout");

Route::prefix('patient')->group(function(){
    Route::get('/login',"Authentication@IndexLoginPatient");
    Route::post('/login',"Authentication@loginPatient");
    Route::get('/register',"Authentication@IndexRegisterPatient");
    Route::post('/register',"Authentication@RegisterPatient");
    //after login
    Route::get('/home',"PatientController@index");
    //profile
    Route::get('/profile',"Patient\ProfileController@index");
    Route::post('/profile/update',"Patient\ProfileController@PostUpdateProfile");
    //Request Appointment
    Route::post('/RequestAppointment',"PatientController@RequestAppointmen");;
});
Route::group(['prefix' => 'admin','middleware'=>['admin']], function () {
    Route::get('/login',"Authentication@IndexLoginAdmin");
    Route::post('/login',"Authentication@loginAdmin");
    Route::get('/register',"Authentication@IndexRegisterAdmin");
    Route::post('/register',"Authentication@registerAdmin");
    //after login
    Route::get('/home',"Admin\AdminController@index");
    //profile
    Route::get('/profile',"Admin\ProfileController@index");
    Route::post('/profile/update',"Admin\ProfileController@PostUpdateProfile");
    //Vaccine Batch
    Route::post('/NewVaccineBatch',"Admin\AdminController@registerBatch");;
    Route::get('/VaccineAllBatch',"Admin\AdminController@ViewBatches");;
    Route::get('/VaccineBatchDetail',"Admin\AdminController@ViewBatchDetail");;
    //Vaccination Appointment
    Route::get('/AppointmentDetail/{id}',"Admin\AdminController@getAppointmentDetail");;
    Route::post('/ConfirmAppointment/{id}',"Admin\AdminController@ConfirmAppointment");;
    Route::post('/AdministerAppointment/{id}',"Admin\AdminController@AdministerAppointment");;
});

