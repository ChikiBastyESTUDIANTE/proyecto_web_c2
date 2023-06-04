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
        Schema::create('profesores', function (Blueprint $table) {
            //tipos de datos
            $table->integer('id_rut')->autoIncrement(); //primary key
            $table->string('email',50);
            $table->string('nombre',20);
            $table->string('apellido',20);
            //cuando fue creado y modificado por default
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesores');
    }
};
