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
        Schema::create('detalles', function (Blueprint $table) {
            $table->id();
            $table->decimal('cantidad', 7,2)->default(0.00);
            $table->decimal('preciototal', 7,2)->default(0.00);

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('producto_id');

            /* set null solo para que borre el comentario no todo lo almacenado  */
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('producto_id')->references('id')->on('posts')->onDelete('cascade');

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
        Schema::dropIfExists('detalle');
    }
};
