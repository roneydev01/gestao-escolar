<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    use HasFactory;

    public function turma()
    {
        return $this->hasMany(Turma::class, 'escola_id', 'id' );
    }
}
