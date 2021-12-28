<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_centre extends Model
{
    use HasFactory;

    protected $table = "t_centre";
    protected $fillable = [
        'centre_name',
        'address',
    ];

    public function admins(){
        return $this->hasMany('App\Models\t_admins',"centre_id");
    }

    public static function getCentreById($idCentre){
        $data=self::where("id",$idCentre)->get();
        if($data){
            return (object)[
                "success"=>true,
                // "exist"=>count($data)>0,
                "data"=>$data
            ];
        }
        return (object)[
            "success"=>false,
            "exist"=>false,
            "message"=>"failed"
        ];
    }
}
