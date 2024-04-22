<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Curso;

class TipoCurso extends Model
{
    use HasFactory;

    protected $table = 'tipo_cursos';

    protected $primaryKey = 'id_tipo_curso';


    public function cursos()
    {
        return $this->hasMany(Curso::class, 'curso_id', 'id_curso');
    }
}
