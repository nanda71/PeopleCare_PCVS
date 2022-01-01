<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Session;
use App\Functions\Validator\patientValidator as pa_val;
use App\Functions\Validator\adminValidator as ad_val;
use App\Models\t_patients as Patient;
use App\Models\t_admins as Admin;
use App\Models\t_centre as Centre;
use App\create_code_verifications as Code;
use Illuminate\Support\Facades\Mail;


class Authentication extends Controller
{
    /**
     * Role
     * 0 = User
     * 1 = Patient
     * 2 = Admin
     */
    
     // === Admin
    private function setSessionAdmin($admin){
        $sessionData = [
            "login"=>true,
            "role"=>2,
            "id"=>$admin->id,
            "username"=>$admin->username,
            "email"=>$admin->email,
            "fullName"=>$admin->fullName,
            "centre_id"=>$admin->centre_id,
        ];
        Session::put($sessionData);
    }

    // === Patient
    private function setSessionPatient($patient){
        $sessionData = [
            "login"=>true,
            "role"=>1,
            "id"=>$patient->id,
            "username"=>$patient->username,
            "email"=>$patient->email,
            "ic_passport"=>$patient->ic_passport,
        ];
        Session::put($sessionData);
    }

    //====== route function =========//
    // 
    // === ADMIN ====
    public function IndexLoginAdmin(){
        return view("auth.login-admin");
    }
    public function loginAdmin(Request $req){
        $post=(object)$req->validate([
            "email"=>"required",
            "password"=>"required"
        ]);
        $result = Admin::login($post->email,$post->password);
        if($result->success){

            if($result->login){
                $this->setSessionAdmin($result->data);
                // return redirect('/admin/home')->alert()->success('Login Success','Congrats!');;
                return redirect('/admin/home')->with("toast_success","Login success");
            }
            else{
                return redirect('/admin/login')->with('toast_error',"email or password incorrect");
            }
        }return redirect('/admin/login')->with('toast_error',"Your data isn't match with our cridential,register first!");
    }

    public function getRegFormAdmin(){
        $Centres = Centre::all();
        return view('auth.register-admin',[
            "Centres"=> $Centres,
        ]);
    }

    public function RegisterAdmin(Request $req){
        $req->merge([
            "username"=>$req->username,
            "full_name"=>$req->full_name,
            "email"=>$req->email,
            "centre_id"=>$req->centre_id,
            "password"=>$req->password,
        ]);
        $validatedInput = $req->validate(ad_val::getValidationRules());
        $admin = Admin::registerAdmin($validatedInput);
        if($admin->success){
            return redirect("/admin/login")->with('toast_success',"Registration Success, Please Check Email to Verify!");
        }else{
            return redirect('/admin/register');
        }
    }

    // === PATIENT ====
    public function IndexLoginPatient(){
        return view("auth.login-patient");
    }
    public function loginPatient(Request $req){
        $post=(object)$req->validate([
            "email"=>"required",
            "password"=>"required"
        ]);
        $result = Patient::login($post->email,$post->password);
        if($result->success){
            if($result->login){
                $this->setSessionPatient($result->data);
                return redirect('/patient/home')->with('toast_success',"Login success");
            }
            else{
                return redirect('/patient/login')->with('toast_error',"email or password incorrect");
            }
        }return redirect('/patient/login')->with('toast_error',"Your data isn't match with our cridential,register first!");
    }

    public function getPatientRegForm(){
        return view("auth.register-patient");
    }

    public function RegisterPatient(Request $req){
        $req->merge([
            "username"=>$req->username,
            "fullName"=>$req->fullName,
            "ic_passport"=>$req->ic_passport,
            "email"=>$req->email,
            "password"=>$req->password,
        ]);
        $validatedInput = $req->validate(pa_val::getValidationRules());
        $patient=Patient::registerPatient($validatedInput);
        if($patient->success){
            return redirect("/patient/login")->with('toastr.success',"Registration Success!");
        }else{
            return redirect('/patient/register')->with(toastr.success("Registration Failed"));
        }
        
    }

    // === General
    public function logout(){
        Session::flush();
        return redirect("/");
    }
}
