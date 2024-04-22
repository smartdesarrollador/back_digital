<?php

namespace App\Http\Controllers\Test;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rol;
use App\Models\Permiso;
use App\Models\TipoCurso;
use App\Models\Curso;
use App\Models\Inscripcion;
use App\Models\CursoInscripcion;


class TestConsultasController extends Controller
{
   public function consulta1(){

    
    /* $nombreTrabajador = Trabajador::pluck('primer_nombre');
    return $nombreTrabajador; */

    /* $Contratos1 = TipoContrato::where('id_tipo_contrato', 1)
            ->firstOrFail() 
            ->contratos;   
        return response()->json($Contratos1); */
   
   /* $num_trabajadores = Trabajador::count();
return $num_trabajadores; */

/* $todos_trabajadores = Trabajador::all();
return $todos_trabajadores; */

/* $ContratoById = Contrato::find(3);
return $ContratoById; */

/* $usuarios = User::find(1);
$roles = $usuarios->rol()->pluck('nombre')->toArray();
return $roles; */

/* $nombreTipoCurso = TipoCurso::pluck('nombre');
    return $nombreTipoCurso; */
   
/* $cursoConCategoria = DB::table('cursos')
    ->join('tipo_cursos', 'cursos.tipo_curso_id', '=', 'tipo_cursos.id_tipo_curso')
    ->select('cursos.nombre as nombre_curso', 'tipo_cursos.nombre as nombre_tipo_curso')
    ->where('cursos.id_curso', 1)
    ->first();
return $cursoConCategoria; */

$fechaPedido = DB::table('cursos')
    ->join('curso_inscripciones', 'cursos.id_curso', '=', 'curso_inscripciones.curso_id')
    ->join('inscripciones', 'curso_inscripciones.inscripcion_id', '=', 'inscripciones.id_inscripcion')
    ->where('cursos.id_curso', 1)
    ->select('inscripciones.fecha_inscripcion')
    ->first();
    return $fechaPedido;


    }

}
