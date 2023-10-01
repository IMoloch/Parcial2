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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->double('nota1',);
            $table->double('nota2',);
            $table->double('nota3',);
            $table->double('nota4',);
            $table->double('promedio');
            $table->double('parcial');
            $table->bigInteger('idalumno')->unsigned();
            $table->foreign('idalumno')
                ->references('id')
                ->on('alumnos');
            $table->bigInteger('idcurso')->unsigned();
            $table->foreign('idcurso')
                ->references('id')
                ->on('cursos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
