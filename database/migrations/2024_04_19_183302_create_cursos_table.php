<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id("id_cursos");
            $table->string("nombre_curso", 250)->nullable();
            $table->string("descripcion_curso")->nullable();
            $table->string("duracion", 250)->nullable();
            $table->string("imagen_curso", 250)->nullable();
            $table->string("maestro", 250)->nullable();
            $table->string("curso_observaciones", 250)->nullable();
            $table->float("precio")->nullable();
            $table->unsignedBigInteger("tipo_curso_id")->nullable();
            $table->foreign("tipo_curso_id")->references("id_tipo_curso")->on("tipo_curso")->onDelete("set null");
            /* $table->float("precio_tachado")->nullable();
            $table->float("precio_descuento")->nullable();
            $table->string("stock", 250)->nullable();
            $table->string("estado", 250)->nullable();
            $table->integer("posicion")->nullable();
            $table->integer("acumulaNPuntos")->nullable();
            $table->float("store_id")->nullable(); */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
