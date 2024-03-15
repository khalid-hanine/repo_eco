<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'total',
        'utilisateurs' // Ajoutez 'total' ici
        // Ajoutez d'autres champs que vous souhaitez autoriser pour l'attribution de masse, le cas échéant
    ];
}
