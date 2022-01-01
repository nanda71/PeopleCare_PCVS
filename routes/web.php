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
    return view('Home');
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
    //----- Vaccinations -----
    Route::get('/AllVaccines',"Patient\PatientController@GetAllVaccines");
    Route::get('/detailVaccine/{id}',"Patient\PatientController@getVaccineDetail");;
    Route::get('/getAppointmentForm',"Patient\PatientController@getRequestForm");
    Route::post('/NewAppointment',"Patient\PatientController@RequestAppointment");;
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
        //---- Profile -----
        // Route::get('/profile',"Admin\ProfileController@index");
        // Route::post('/profile/update',"Admin\ProfileController@PostUpdateProfile");
        // 
        //---- Vaccine -----  (tidak dipakai)
        Route::get('/getFormVaccine',"Admin\AdminController@getFormVaccine");;
        Route::post('/NewVaccine',"Admin\AdminController@PostNewVaccine");;
        // 
        //----- Vaccine Batch ----
        Route::get('/AllVaccine',"Admin\AdminController@ViewAllVaccines");;
        Route::get('/NewBatch/{id}',"Admin\AdminController@getFormBatch");;
        Route::post('/PostNewBatch',"Admin\AdminController@postFormBatch");;
        // (yg baru)
        Route::get('/NewBatch',"Admin\AdminController@getFormBatchSelect");;
        Route::post('/PostNewBatch2',"Admin\AdminController@postFormBatchSelect");;
        Route::get('/BatchDetail/{id}',"Admin\AdminController@getBatchDetail");;
        // 
        //---- Confirm/Reject Appointment ----
        // 
        // 
        
        
    }
);

