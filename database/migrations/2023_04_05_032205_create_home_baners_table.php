<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_baners', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable();
            $table->string('extract')->nullable();
            $table->integer('cursos')->nullable();
            $table->integer('articulos')->nullable();
            $table->integer('users')->nullable();
            $table->integer('coins')->nullable();
            $table->unsignedBigInteger('user_id'); // Agregar el campo para el usuario creador
            $table->dateTime('fecha_inicio')->nullable(); // Agregar campo para la fecha de inicio
            $table->dateTime('fecha_fin')->nullable(); // Agregar campo para la fecha de fin
            $table->boolean('activo')->default(true); // Agregar campo para indicar si el banner está activo o no
            $table->string('posicion')->nullable(); // Agregar campo para la posición del banner
            $table->string('tipo')->nullable(); // Agregar campo para el tipo de banner
            $table->string('enlace')->nullable(); // Agregar campo para el enlace del banner
            $table->timestamps();
    
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Agregar la llave foránea para la relación con la tabla users
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_baners');
    }
};
