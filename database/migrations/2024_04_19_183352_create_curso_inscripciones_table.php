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
        Schema::create('curso_inscripciones', function (Blueprint $table) {
            $table->id("id_curso_inscripcion");
            $table->unsignedBigInteger("inscripcion_id")->nullable();
            $table->foreign("inscripcion_id")->references("id_inscripcion")->on("inscripciones")->onDelete("set null");
            $table->unsignedBigInteger("curso_id")->nullable();
            $table->foreign("curso_id")->references("id_curso")->on("cursos")->onDelete("set null");
            $table->integer("cantidad")->nullable();
            $table->string("item_descripcion", 250)->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curso_inscripciones');
    }
};
