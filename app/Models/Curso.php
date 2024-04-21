<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TipoCurso;
use App\Models\Inscripcion;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';

    protected $primaryKey = 'id_cursos';

    public function tipo_cursos()
    {
        return $this->belongsTo(TipoCurso::class, 'tipo_curso_id', 'id_tipo_curso');
    }

    public function inscripcion()
    {
        return $this->belongsToMany(Inscripcion::class, 'curso_inscripcion', 'id_cursos', 'id_inscripcion');
    }
}
