<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solucion extends Model
{
    use HasFactory;

    protected $table = 'soluciones';

    protected $fillable = ['titulo',  'descripcion','url','imagen','ruta_imagen'];

    protected $primaryKey = 'id_solucion';
}
