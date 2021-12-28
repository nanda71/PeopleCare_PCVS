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
// ===== Patient =====
Route::prefix('patient')->group(function(){
    Route::get('/login',"Authentication@IndexLoginPatient");
    Route::post('/login',"Authentication@loginPatient");
    Route::get('/register',"Authentication@getPatientRegForm"); 
    Route::post('/register',"Authentication@RegisterPatient"); 
    // 
    //---- home ----- 
    Route::get('/home',"Patient\PatientController@index");
    // 
    //----- profile -----
    // Route::get('/profile',"Patient\ProfileController@index");
    // Route::post('/profile/update',"Patient\ProfileController@PostUpdateProfile");
    // 
    //----- Vaccinations & Vaccines -----
    Route::get('/AllVaccines',"Patient\PatientController@GetAllVaccines");
    Route::get('/getAppointmentForm',"Patient\PatientController@getRequestForm");
    Route::post('/NewAppointment',"Patient\PatientController@RequestAppointment");;

    Route::get('detail/{id}',"Patient\PatientController@getVaccineDetail");;
});

// ===== Admin =====
Route::prefix('admin')->group(function (){
        Route::get('/login',"Authentication@IndexLoginAdmin");
        Route::post('/login',"Authentication@loginAdmin");
        Route::get('/register',"Authentication@getRegFormAdmin");
        Route::post('/register',"Authentication@RegisterAdmin");
        // 
        //---- Home -----
        Route::get('/home',"Admin\AdminController@index");
        // 
        //---- profile -----
        // Route::get('/profile',"Admin\ProfileController@index");
        // Route::post('/profile/update',"Admin\ProfileController@PostUpdateProfile");
        // 
        //---- Vaccine ----- 
        Route::get('/AllVaccine',"Admin\AdminController@ViewAllVaccines");;
        Route::get('/getFormVaccine',"Admin\AdminController@getFormVaccine");;
        Route::post('/NewVaccine',"Admin\AdminController@PostNewVaccine");;
        // 
        //----- Vaccine Batch ----
        Route::post('/PostNewBatch',"Admin\AdminController@postFormBatch");;
        Route::get('/NewBatch/{id}',"Admin\AdminController@getFormBatch");;
        Route::get('/BatchDetail/{id}',"Admin\AdminController@getBatchDetail");;
        // 
        //---- Vaccination Appointment ----
        // 
        // 
        
        
    }
);

