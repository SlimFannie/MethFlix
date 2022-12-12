<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acteur extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'img'];

    public function films() : HasMany {
        return $this->hasMany('App\Film');
    }
    
}
