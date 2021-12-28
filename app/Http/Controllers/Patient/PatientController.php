<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\t_patients as Patient;
use App\Models\t_vaccines as Vaccine;
use App\Models\t_batch as Batch;
use App\Models\t_centre as Centre;
use App\Models\t_vaccination_appointment as Appointment;
use File;
use Illuminate\Support\Str;
use Session;

class PatientController extends Controller
{
    public function Index(Request $req){        
        $patient = Patient::find(Session::get('id'));
        $vaccine = Vaccine::all();
        $allBatch = Batch::all();
        return view('patient.patient-menu',[
            "patient"=>$patient,
            "allBatch"=>$allBatch,
            "vaccine"=>$vaccine,
        ]);
    }

    // ==== SELECT ALL VACCINES ====
    public function GetAllVaccines(Request $req){
        $all = Vaccine::all();
        return view('patient.AllVaccine',[
            "all"=>$all,
        ]);
    }

    // ==== SELECT A VACCINE ====
    public function getVaccineDetail($id){
        $patient = Patient::find(Session::get('id'));
        $vaccine = Vaccine::find($id);
        $AllVaccine = Vaccine::all();
        $centre = Centre::all(); 
        // foreach($centre as $c){
        $centresVaccine = Centre::where('id',$vaccine['centre_id'])->get();
        // }
        dd($centresVaccine);
        return view('patient.vaccine-detail',[
            "patient"=>$patient,
            "vaccine"=>$vaccine,
            "centre"=>$centre,
        ]);
    }   

    // ==== MAKE APPOINTMENT ==== 

    
    // public function RequestAppointment(){
    //     $req->merge([
    //         "status" => 'Waiting',
    //     ]);
    //     //validate order
    //     $validatedData = $req->validate([
    //         'batch_id'=>'required',
    //         'patient_id'=>'required',
    //         'patient_name'=>'required',
    //         'ic_passport'=>'required',
    //         'vaccineName'=>'required',
    //         'centre_name'=>'required',
    //         'centre_address'=>'required',
    //         'appointment_date'=>'required',
    //         'status'=>'required',
    //         'remarks'=>'required',
    //     ]);
    //     //create Request using Model
    //     $create = Appointment::CreateAppointment($validatedData);
    //     return view("Hello");
    //     // return redirect('/')->with('success','Vaccination Appointment Sent Successfully');
    // }

    // public function getRequestList(Request $req){
    //     $patient = Session::get('id');
    //     dd($customer);
    //     $orders = Order::getCustomerOrders($customer);
    //     $orders = $orders->data;
    //     $user = User::find(Session::get('id'));
    //     // dd($orders);
    //     return view('user.waiting-list',[
    //         'orders'=>$orders,
    //         "user"=>$user,
    //     ]);
    // }

}
?>