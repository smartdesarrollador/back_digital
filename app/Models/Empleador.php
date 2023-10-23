<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Contrato;
use App\Models\Trabajador;
use App\Models\Documento;
use App\Models\Ubigeo;
use App\Models\Sector;

class Empleador extends Model
{
    use HasFactory;

    protected $table = 'empleadores';

    protected $primaryKey = 'id_empleador';

    public function contrato()
    {
        return $this->hasMany(Contrato::class, 'id_empleador', 'id_empleador');
    }

    public function trabajador()
    {
        return $this->hasMany(Trabajador::class, 'id_empleador', 'id_empleador');
    }

    public function documento()
    {
        return $this->hasMany(Documento::class, 'id_empleador', 'id_empleador');
    }

    

 /*   public function ubigeo()
    {
        return $this->belongsTo(Ubigeo::class, 'id_ubigeo', 'id_ubigeo');
    } */

    /* public function sector()
    {
        return $this->belongsTo(Sector::class, 'id_sector', 'id_sector');
    } */

    



}
