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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id("id_feedback");
            $table->text('reaction')->nullable();
            $table->string("message", 250)->nullable();
            $table->dateTime('date', precision: 0);
            $table->time('time', precision: 0);
            $table->unsignedBigInteger("inscripciones_id")->nullable();
            $table->foreign("inscripciones_id")->references("id_inscripciones")->on("inscripciones")->onDelete("set null");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
