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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id("id_evento");
            $table->string("titulo", 250)->nullable();
            $table->date('fecha')->nullable();
            $table->text("codigo")->nullable();
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
        Schema::dropIfExists('eventos');
    }
};
