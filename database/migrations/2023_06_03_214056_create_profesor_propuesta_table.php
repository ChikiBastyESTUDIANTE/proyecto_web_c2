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
        Schema::create('profesor_propuesta', function (Blueprint $table) {
            //tipos de datos
            $table->integer('propuesta_id'); //primary key
            $table->ingeter('profesor_id'); //primary key
            $table->primary(['propuesta_id','profesor_id']); 
            $table->date('fecha');
            $table->time('hora');
            $table->text('comentario');
            $table->foreing('propuesta_id')->references('id')->on('propuestas'); //foreing key
            $table->foreing('profesor_id')->references('id')->on('profesores'); //foreing key
            //cuando fue creado y modificado por default
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesor_propuesta');
    }
};
