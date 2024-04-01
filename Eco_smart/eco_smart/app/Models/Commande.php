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
        'detail' 
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
