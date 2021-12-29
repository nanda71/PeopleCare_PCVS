<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Str;
use Session;
// ==== USE MODELS ====
use App\Models\t_patients as Patient;
use App\Models\t_admins as Admin;
use App\Models\t_vaccines as Vaccine;
use App\Models\t_batch as Batch;
use App\Models\t_centre as Centre;
use App\Models\t_relasiVaccineCentre as Relasi;

class AdminController extends Controller
{
    public function Index(Request $req){
        $patient = Patient::count();
        $allBatch = Batch::all();
        $centre = Centre::find(Session::get('centre_id'));
        $admin = Admin::find(Session::get('id'));
        $relasi = Relasi::all();
        $vaccine = Vaccine::all();
        // $centresVaccine = Centre::where('id',$vaccine['centre_id'])->get();
        return view('admin.admin-menu',[
            "patient"=>$patient,
            "admin"=>$admin,
            "allBatch"=>$allBatch,
            "centre"=>$centre,
            "relasi"=>$relasi
        ]);
    }
// ==== VACCINE ====
    public function ViewAllVaccines(Request $req){
        $vaccine = Vaccine::all();
        $relasi = Relasi::all();
        $centre = Centre::find(Session::get('centre_id'));
        return view('admin.AllVaccine',[
            "centre"=>$centre,
            "vaccine"=>$vaccine,
            "relasi"=>$relasi
        ]);
    }

    public function getFormVaccine(){
        $vaccine = Vaccine::all();
        return view('admin.form-input-vaccine',[
            "vaccine"=>$vaccine,
        ]);
    }

    public function PostNewVaccine(Request $req){
        $validatedData = $req->validate([
            'vaccine_name'=>"required|string",
            'manufacturer'=>"required|string",
            'centre_id'=>"required|exists:t_centre,id",
        ]);
        $newVaccine = Vaccine::createVaccine($validatedData);
        $newRelasi = Relasi::CreateRelasi([
            "vaccine_id"=>$newVaccine->data->id,
            "centre_id"=>Session::get('centre_id')
        ]);
        if(!$newVaccine->success){
            return redirect()->back()->with('toast_error',["Failed to input information"]);
        }
        return redirect('/admin/AllVaccine')->with('toast_success',["Input Information Success"]);
    }
    // ==== VACCINE BATCH ====
    public function getFormBatch($id){
        $vaccine = Vaccine::find($id);
        $centre = Centre::find(Session::get('centre_id'));
        return view('admin.form-batch',[
            "vaccine"=>$vaccine,
            "centre"=>$centre,
        ]);
    }

    public function getFormBatchSelect(){
        $centre = Centre::find(Session::get('centre_id'));
        $vaccine = Vaccine::all();
        return view('admin.form-batch2',[
            "centre"=>$centre,
            "vaccine"=>$vaccine
        ]);
    }

    public function postFormBatchSelect(Request $req){
        $req->merge([
            "centre_name"=>$req->centre_name,
            "vaccine_name"=>$req->vaccine_name,
            "expiry_date"=>$req->expiry_date,
            "qty_available"=>$req->qty_available,
            "qty_administered"=>$req->qty_administered,
        ]);
        // dd($req->vaccine_name);
        $validatedData = $req->validate([
            'centre_name'=>"required",
            'vaccine_name'=>"required",
            'expiry_date'=>"required",
            'qty_available'=>"required",
            'qty_administered'=>"required",
        ]);
        $validated = Batch::CreateBatch($validatedData);
        $id = Vaccine::getIdByName($validated->data->vaccine_name); 
        $newRelasi = Relasi::CreateRelasi([
            "vaccine_id"=>$id,
            "centre_id"=>Session::get('centre_id')
        ]);

        if(!$validated->success){
            return redirect()->back()->with('toast_error',["Failed to input information"]);
        }
        return redirect('/admin/home')->with('toast_success',["Input Information Success"]);
    }

    public function postFormBatch(Request $req){
        $validatedData = $req->validate([
            'centre_name'=>"required",
            'vaccine_name'=>"required",
            'expiry_date'=>"required",
            'qty_available'=>"required",
            'qty_administered'=>"required",
        ]);
        $validated = Batch::CreateBatch($validatedData);
        if(!$validated->success){
            return redirect()->back()->with('toast_error',["Failed to input information"]);
        }
        return redirect('/admin/home')->with('toast_success',["Input Information Success"]);
    }

    // public function getBatchDetail($batch_id){
    //     $batchDetail = self::find($batch_id);
    //     return view()
    // }
}
?>