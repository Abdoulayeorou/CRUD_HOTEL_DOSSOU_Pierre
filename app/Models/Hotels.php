<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'nom',
        'description',
        'nom_chambre',
        'prix',
        'nombre_lits',
        'max_adultes',
        'enfants_max',
        'attributs',
        'statut',
    ];
}
