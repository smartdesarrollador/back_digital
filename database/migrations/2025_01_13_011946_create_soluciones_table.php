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
        Schema::create('soluciones', function (Blueprint $table) {
            $table->id("id_solucion");
            $table->string("titulo", 250)->nullable();
            $table->text("descripcion")->nullable();
            $table->string("url", 250)->nullable();
            $table->string("imagen", 250)->nullable();
            $table->string("ruta_imagen", 250)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soluciones');
    }
};
