<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vaccines extends Model
{
    use HasFactory;

    protected $fillable = [
        'vaccine_name',
        'manufacturer',
        'approved'
    ];

    public function batch(){
        return $this->hasMany('App\Models\batch',"vaccine_name");
    }

    public static function createVaccine($validatedData){
        $vaccine = self::create($validatedData);
        if($vaccineBatch){
            return (object)[
                "success"=>true,
                "data"=>$vaccine];}
        return (object)[
            "success"=>false,
            "message"=>"Failed to register Vaccine!"];
    }
    
    public static function getBatchById($vaccine_id){
        $data=self::where("vaccine_id",$vaccine_id)->get();
        if($data){
            return (object)[
                "success"=>true,
                "exist"=>count($data)>0,
                "data"=>$data
            ];
        }
        return (object)[
            "success"=>false,
            "exist"=>false,
            "message"=>"failed"
        ];
    }

    public static function getAllVaccine(){
        $data = self::all();
        if($data){
            return (object)[
                "success"=>true,
                "data"=>$data
            ];
        }
        return (object)[
            "success"=>false,
            "message"=>"Gagal menemukan user"
        ];
    }

    public static function updateVaccineInfo($id,$validatedData){
        $vaccine = self::where("vaccine_id",$id)->update($validatedData);
        if($vaccine){return (object)["success"=>true,"data"=>$vaccine];}
        return (object)["success"=>false,"message"=>"Update failed!"];
    }
}
