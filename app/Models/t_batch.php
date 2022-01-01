<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_batch extends Model
{
    use HasFactory;
    
    protected $table = "t_batch";
    protected $fillable = [
        'centre_name',
        'vaccine_name',
        'expiry_date',
        'qty_available',
        'qty_administered',
    ];

    public function vaccines(){
        return $this->belongsTo('App\Models\vaccines');
    }

    public static function CreateBatch($validatedData){
        $Batch = self::create($validatedData);
        if($Batch){
            return (object)
            [
                "success"=>true,
                "data"=>$Batch
            ];}
        return (object)[
            "success"=>false,
            "message"=>"Failed to add Batch!"
        ];
    }

    public static function getAllBatch(){
        $data = self::all();
        if($data){
            return (object)[
                "success"=>true,
                "data"=>$data
            ];
        }
        return (object)[
            "success"=>false,
            "message"=>"Failed finding batches"
        ];
    }

    
}