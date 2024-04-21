<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoInscripcion extends Model
{
    use HasFactory;

     protected $table = 'estado_inscripcion';

    protected $primaryKey = 'id_estado_inscripcion';
}
