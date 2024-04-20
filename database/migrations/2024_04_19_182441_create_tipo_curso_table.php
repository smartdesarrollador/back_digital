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
        Schema::create('tipo_curso', function (Blueprint $table) {
            $table->id();
            $table->string("nombre", 250)->nullable();
            $table->string("descripcion", 250)->nullable();
            $table->string("imagen", 250)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_curso');
    }
};
