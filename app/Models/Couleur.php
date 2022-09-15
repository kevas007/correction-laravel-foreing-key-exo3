<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Couleur extends Model
{
    use HasFactory;
    public function voiture(){
        return $this->hasOne(Voiture::class, 'couleur_id', 'id');
    }
}
