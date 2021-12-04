<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use willvincent\Rateable\Rateable;
use App\Builder;
use DB;
use Illuminate\Http\Request;


class Batch extends Model
{
    use Rateable;
    protected $table = "vaccinebatch";
    protected $guarded = ["id"];
    protected $fillable = ['batchNo','expiryDate','quantityAvailable','quantityAdministered'];

    public function vaccines(){
        return $this->hasOne('Model/Vaccine',"batchID");
    }

    public static function CreateNewBatch($validatedData){
        $batch = self::create($validatedData);
        if($batch){return (object)["success"=>true,"data"=>$batch];}
        return (object)["success"=>false,"message"=>"Failed to create new batch!"];
    }

    public static function getBatchById($idBatch){
        $data = self::where("id",$idBatch)->first();
        if($data){
            return (object)[
                "success"=>true,
                "data"=>$data
            ];
        }
        return (object)[
            "success"=>false,
            "message"=>"Failed to find the batch"
        ];

}