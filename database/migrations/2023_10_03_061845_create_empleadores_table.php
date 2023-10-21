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
        Schema::create('empleadores', function (Blueprint $table) {
            $table->id("id_empleador");
            $table->string("empleador", 100)->nullable();
            $table->string("ruc", 100)->nullable();
            $table->string("domicilio", 100)->nullable();
            /* $table->unsignedBigInteger("id_ubigeo")->nullable(); */
            /* $table->foreign("id_ubigeo")->references("id_ubigeo")->on("ubigeos")->onDelete("set null"); */
            /* $table->unsignedBigInteger("id_sector")->nullable(); */
            /* $table->foreign("id_sector")->references("id_sector")->on("sectores")->onDelete("set null"); */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleadores');
    }
};
