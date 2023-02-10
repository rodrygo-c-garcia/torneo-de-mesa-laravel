<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    use HasFactory;

    public function torneos()
    {
        return $this->hasMany(Torneo::class, 'modalidad_id', 'id');
    }
}
