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
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('url');
            $table->float('precio')->nullable();
            $table->string('duracion')->nullable();
            $table->string('categoria')->nullable();
            $table->dateTime('disponible_desde')->nullable();
            $table->dateTime('disponible_hasta')->nullable();
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('servicios');
    }

};
