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

}
