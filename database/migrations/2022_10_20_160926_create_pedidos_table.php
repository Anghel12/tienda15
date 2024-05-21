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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->decimal('subtotal', 7,2)->default(0.00);
            $table->decimal('impuesto', 7,2)->default(0.00);
            $table->decimal('total', 7,2)->default(0.00);
            $table->string('entregado');
            $table->unsignedBigInteger('user_id');

            /* set null solo para que borre el comentario no todo lo almacenado  */
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
        Schema::dropIfExists('pedido');
    }
};
