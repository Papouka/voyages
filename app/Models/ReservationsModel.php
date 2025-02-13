<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservemodel extends Model
{
    use HasFactory;

    protected $table = 'reservations'; // Nom exact de la table

    protected $fillable = [
        'nom',
        'email',
        'destination',
        'date_depart',
        'nombre_billets'
    ];
}

