<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;

    protected $fillable = [
        'produit_id', // Ajoutez 'produit_id' à la liste des colonnes fillable
        'quantite',
        'total',
        'user_id'
        // ... autres colonnes fillable si nécessaire
    ];

    public function produit(){
        return $this->belongsTo(related: Produit ::class);
    }
}
