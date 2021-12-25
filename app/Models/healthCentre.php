<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class healthCentre extends Model
{
    use HasFactory;

    protected $fillable = [
        'centreName',
        'address',
    ];
}
