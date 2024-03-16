<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'total',
        'user_id',
        'detail' // Ajoutez 'total' ici
        // Ajoutez d'autres champs que vous souhaitez autoriser pour l'attribution de masse, le cas échéant
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
