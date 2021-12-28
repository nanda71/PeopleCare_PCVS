<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_relasiVaccineCentre extends Model
{
    protected $table = "t_relasiVaccineCentre";
    protected $fillable = [
        'vaccine_id',
        'centre_id',
    ];

    public function vaccine(){
        return $this->belongsTo('App\Models\t_vaccines');
    }

    public function centre(){
        return $this->belongsTo('App\Models\t_centre');
    }

    public static function CreateRelasi($data){
        $Relasi = self::create($data);
        if($Relasi){
            return (object)
            [
                "success"=>true,
                "data"=>$Relasi
            ];}
        return (object)[
            "success"=>false,
            "message"=>"Failed to add Batch!"
        ];
    }

}
