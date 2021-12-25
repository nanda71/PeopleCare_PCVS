<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Session;
use App\Functions\Validator\patientValidator;
use App\Functions\Validator\adminValidator;
use App\Models\tb_patient as Patient;
use App\Models\tb_admin as Admin;
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
            "centre_name"=>$admin->centre_name,
        ];
        Session::put($sessionData);
    }

    // === User
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

    // //Support function
    // private static function isAlreadyLogin(){
    //     if(Session::get("login")){
    //         return true;
    //     }
    //     return false;
    // }

    //====== route function =========//
    // === Admin
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
                return redirect('/admin/home')->with('toast_success',"Login success");
            }
            else{
                return redirect('/admin/login')->with('toast_error',"email or password incorrect");
            }
        }return redirect('/admin/login')->with('toast_error',"Your data isn't match with our cridential,register first!");
    }

    public function IndexRegisterAdmin(Request $req){
        return view("auth.register-admin");
    }

    public function registerAdmin(Request $req){
        $validatedInput = $req->validate(adminValidator::getValidationRules());
        $admin=Admin::registerAdmin($validatedInput);
        if($admin->success){
            // Session::flush();
            return redirect("/admin/login")->with('toast_success',"Registration Success");
        }else{
            return redirect('/admin/login');
        }
    }
    // === Patient
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
                $this->setSessionUser($result->data);
                return redirect('/')->with('toast_success',"Login success");
            }
            else{
                return redirect('/login')->with('toast_error',"email or password incorrect");
            }
        }return redirect('/login')->with('toast_error',"Your data isn't match with our cridential,register first!");
    }

    public function IndexRegisterPatient(Request $req){
        return view("auth.register");
    }

    public function RegisterPatient(Request $req){
        $req->merge([
            "email"=>$req->email,
            "user_photo"=>""
        ]);
        $validatedInput = $req->validate(userValidator::getValidationRules());
        $patient=Patient::registerUser($validatedInput);
        if($patient->success){
            $patient=$patient->data;
            // Session::flush();
            /*$code = substr(str_shuffle("0123456789"), 0, 5);
            Code::create([
                'id'=>$patient->id,
                'verification_code'=>$code,
            ]);
            
            $to_name = $patient->username;
            $to_email = $patient->email;
            $data = array("name"=>$patient->username,"verification_code"=>$code, "link"=> "http://127.0.0.1:8000/verify/");
            $mail = Mail::send("emailBody", $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject("Verify Your Email");
            $message->from('onlineartperformance@gmail.com',"OnlineArtPerformance");
            });*/
            return redirect("/")->with('toast_success',"Registration Success, Please Log in to your account!");
        }else{
            return redirect('/login');
        }
    }

    // === General
    public function logout(){
        Session::flush();
        return redirect("/");
    }
}
