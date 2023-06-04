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
        Schema::create('propuestas', function (Blueprint $table) {
            //tipos de datos
            $table->integer('id')->autoIncrement(); //primary key
            $table->date('fecha');
            $table->string('documento',100);
            $table->tinyInteger('estado');
            $table->string('estudiante_rut',10); //foreign key
            $table->foreign('estudiante_rut')->references('rut')->on('estudiantes'); //foreign key
            //cuando fue creado y modificado por default
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propuestas');
    }
};
