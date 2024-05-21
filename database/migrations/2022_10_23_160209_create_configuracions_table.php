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
        Schema::create('configuracions', function (Blueprint $table) {
            $table->id();

            $table->string('title', 200);

            $table->string('title1', 200)->nullable();
            $table->string('title2', 200)->nullable();
            $table->string('title3', 200)->nullable();
            $table->string('title4', 200)->nullable();
            $table->string('title5', 200)->nullable();

            $table->string('descripcion')->nullable();

            $table->string('copyright', 200)->nullable();

            $table->string('colorPrimario', 200)->nullable();

            $table->string('slogan', 200)->nullable();

            $table->string('razonsocial')->nullable();
            $table->string('direccion', 60)->nullable();
            $table->string('celular', 200)->nullable();


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
        Schema::dropIfExists('configuracions');
    }
};
