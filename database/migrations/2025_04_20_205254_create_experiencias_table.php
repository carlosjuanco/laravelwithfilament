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
        Schema::create('experiencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profesionista_id')->constrained('profesionistas')->cascadeOnDelete();
            $table->string('puesto', 50);
            $table->date('fecha_inicio', 50);
            $table->date('fecha_termino', 50);
            $table->string('empresa', 150);
            $table->string('descripcion_puesto', 250);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiencias');
    }
};
