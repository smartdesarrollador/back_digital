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
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id("id_inscripciones");
            $table->unsignedBigInteger("clientes_id")->nullable();
            $table->foreign("clientes_id")->references("id_clientes")->on("clientes")->onDelete("set null");
            $table->string("telefono", 250)->nullable();
            $table->date('fecha_inscripcion')->nullable();
            $table->float("precio_total")->nullable();
            $table->time('horario_inscripcion', precision: 0);
            /* $table->unsignedBigInteger("estado_inscripcion_id")->nullable();
            $table->foreign("id_estado_inscripcion")->references("estado_inscripcion_id")->on("estado_inscripcion")->onDelete("set null");
            $table->string("card_number", 250)->nullable();
            $table->string("inscripcion_observaciones", 250)->nullable();
             $table->date('date_time')->nullable();
             $table->unsignedBigInteger("locales_id")->nullable();
            $table->foreign("id_locales")->references("local_id")->on("locales")->onDelete("set null");
            $table->float("precio_con_descuento")->nullable();
            $table->string("codigo_cupon", 250)->nullable();
            $table->string("estado_descuento", 250)->nullable(); */
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscripciones');
    }
};
