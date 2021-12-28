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
        return view('admin.admin-menu',[
            "patient"=>$patient,
            "admin"=>$admin,
            "allBatch"=>$allBatch,
            "centre"=>$centre,
        ]);
    }

    public function ViewAllVaccines(Request $req){
        $all = Vaccine::all();
        $centre = Centre::find(Session::get('centre_id'));
        return view('admin.AllVaccine',[
            "centre"=>$centre,
            "all"=>$all,
        ]);
    }

    public function getFormVaccine(){
        return view('admin.form-input-vaccine');
    }

    public function PostNewVaccine(Request $req){
        $validatedData = $req->validate([
            'vaccine_name'=>"required|string",
            'manufacturer'=>"required|string",
            'centre_id'=>"required|exists:t_centre,id",
        ]);
        $newVaccine = Vaccine::createVaccine($validatedData);
        $newRelasi = Relasi::create([
            "vaccine_id"=>$newVaccine->data->id,
            "centre_id"=>$Session::get('centre_id')
        ]);
        if(!$newVaccine->success){
            return redirect()->back()->with('toast_error',["Failed to input information"]);
        }
        // if(!ifRelated->success){
        //     return redirect()->back()->with('toast_error',["Failed to input information, not related"]);
        // }
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
        return redirect('/admin/batch')->with('toast_success',["Input Information Success"]);
    }

    // public function getBatchDetail($batch_id){
    //     $batchDetail = self::find($batch_id);
    //     return view()
    // }
}
?>