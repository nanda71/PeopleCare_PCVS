<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\tb_admin as Admin;
use App\Functions\uploadFunction as UploadImage;
use App\tb_users as User;
use App\tb_art_studio as Dancer;

class ProfileController extends Controller
{
    public function index(Request $req){
        $users = User::count();
        $dancers = Dancer::count();
        $admin = Admin::find(Session::get('id'));
        $idAdmin = Session::get('id');
        $path = 'images/admin/profile/'.$idAdmin.'/';
        return view('admin.profile',[
            "admin"=>$admin,
            "path"=>$path,
            "users"=>$users,
            "dancers"=>$dancers,
        ]);

    }
    public function PostUpdateProfile(Request $req){
        $idAdmin = Session::get("id");
        $fileName = UploadImage::uploadProfileImageAdmin($req,$idAdmin);
        if(!$fileName->success){
            return redirect()->back()->withErrors(["Upload failed"]);
        }
        $req->validate([
            'username'=>'required',
        ]);
        Admin::where('id',$idAdmin)->update([
            'username'=>$req->username,
            'admin_photo'=>$fileName->data,
        ]);
        $req->session()->put('username',$req->username);
        return redirect('/admin/home')->with('toast_success',"Update success");
    }
}
