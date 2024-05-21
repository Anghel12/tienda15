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
        Schema::create('calculators', function (Blueprint $table) {
            $table->id();
            $table->double('numero1');
            $table->double('numero2');
            $table->string('operacion');
            $table->double('resultado');
            $table->string('tipo_operacion');
            $table->boolean('completa')->default(false);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('descripcion')->nullable();
            $table->date('fecha_operacion')->nullable();
            $table->string('unidad_medida')->nullable();
            $table->string('ubicacion')->nullable();
            $table->text('resultado_texto')->nullable();
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
        Schema::dropIfExists('calculators');
    }
};
