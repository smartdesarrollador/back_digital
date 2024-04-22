<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Cliente;
use App\Models\Feedback;
use App\Models\Curso;


class Inscripcion extends Model
{
    use HasFactory;

    protected $table = 'inscripciones';

    protected $primaryKey = 'id_inscripcion';

    public function clientes()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id', 'id_cliente');
    }

     public function feedback()
    {
        return $this->hasMany(Feedback::class, 'feedback_id', 'id_feedback');
    }

    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'curso_inscripciones', 'id_curso', 'id_inscripcion');
    }
}
