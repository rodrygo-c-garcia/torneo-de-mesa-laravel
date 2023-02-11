<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function torneo()
    {
        return $this->hasMany(Torneo::class, 'categoria_id', 'id');
    }
}
