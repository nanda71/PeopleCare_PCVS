<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_vaccination_appointment extends Model
{
    use HasFactory;
    
    protected $table = "t_vaccination_appointment";
    protected $fillable = [
        'batch_id',
        'patient_id',
        'patient_name',
        'ic_passport',
        'vaccineName',
        'centre_name',
        'centre_address',
        'appointment_date',
        'status',
        'remarks',
    ];

    public function batch(){
        return $this->belongsTo('App\Models\t_batch');
    }

//         
// 
//  Hold dulu! perbaiki input batch 
//  baru diisi centre_name, untuk pencarian patient 

    public static function CreateAppointment($validatedData){
        $RequestVaccination = self::create($validatedData);
        if($RequestVaccination){
            return (object)
            [
                "success"=>true,
                "data"=>$RequestVaccination
            ];}
        return (object)[
            "success"=>false,
            "message"=>"Failed to add Batch!"
        ];
    }
   
}