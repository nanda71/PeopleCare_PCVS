<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vaccine extends Model{
    protected $table = "vaccines";
    protected $guarded = ['vaccineID'];
    protected $fillable = ['vaccineName'.'manufacturer'];

    public function batch(){
        return $this->belongsTo('Models\Batch');
    }

    public static function addVaccine($validatedData){
        $newVaccine = self::create($validatedData);
        if($newVaccine){
            return (object)["success"=>true,"data"=>$newVaccine];
        }
        return (object)["success"=>false,"message"=>"Failed to add new vaccine"];
    }
}