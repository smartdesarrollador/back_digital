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
        Schema::create('empleador', function (Blueprint $table) {
            $table->id("id_empleador");
            $table->string("nombre_empleador")->nullable();
            $table->string("ruc")->nullable();
            $table->string("id_ubigeo")->nullable();
            $table->string("id_sector")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleador');
    }
};
