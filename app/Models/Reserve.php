<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{

    protected $fillable =[
        'nom',
        'email',
        'destination',
        'date_depart',
        'nombre_billets'
    ];
}
