<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_patient as Patient;
use App\Models\tb_admin as Admin;
use App\Models\vaccines as Vaccine;
use File;
use Illuminate\Support\Str;
use Session;

class AdminController extends Controller
{
    public function Index(Request $req){
        $patient = Patient::count();
        
        $admin = Admin::find(Session::get('id'));
        return view('admin.admin-menu',[
            "patient"=>$patient,
            "admin"=>$admin,
        ]);
    }
    
}