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
        Schema::create('navbar_configs', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 10);
            $table->string('boton1', 10);
            $table->string('boton2', 10);

            $table->string('boton3', 10)->nullable();
            $table->string('boton4', 10)->nullable();
            $table->string('boton5', 10)->nullable();

            $table->string('principalboton1', 10)->nullable();
            
            $table->string('subboton1', 10)->nullable();
            $table->string('subboton2', 10)->nullable();
            $table->string('subboton3', 10)->nullable();

            $table->string('buscarboton1', 10)->nullable();
            $table->string('buscarboton2', 10)->nullable();
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('navbar_configs');
    }
};
