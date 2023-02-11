<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    use HasFactory;

    public function modalidad()
    {
        return $this->belongsTo(Modalidad::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
