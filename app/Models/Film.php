<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'resume', 'annee', 'origine_id', 'minutes', 'img'];

    public function genres() : HasMany {
        return $this->belongsToMany('App\Models\Genre');
    }

    public function origine()
    {
        return $this->hasOne(Origine::class);
    }

    public function acteurs() : HasMany {
        return $this->hasMany('App\Models\Acteur');
    }

}
