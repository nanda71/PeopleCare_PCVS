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
        'approved'];
}
