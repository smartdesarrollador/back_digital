<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Inscripcion;

class Feedback extends Model
{
    use HasFactory;

     protected $table = 'feedback';

    protected $primaryKey = 'id_feedback';

    public function inscripciones()
    {
        return $this->belongsTo(Inscripcion::class, 'inscripcion_id', 'id_inscripcion');
    }
}
