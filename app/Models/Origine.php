<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origine extends Model
{
    use HasFactory;

    public function films() : HasMany {
        return $this->hasMany('App\Film');
    }

}
