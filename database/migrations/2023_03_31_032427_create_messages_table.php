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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('remitente');
            $table->string('destinatario');
            $table->string('asunto');
            $table->text('contenido');
            $table->boolean('leido')->default(false);
            $table->string('adjuntos')->nullable();
            $table->dateTime('fecha_envio')->nullable();
            $table->enum('prioridad', ['alta', 'media', 'baja'])->default('media');
            $table->enum('tipo', ['notificacion', 'confirmacion', 'error'])->default('notificacion');
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
        Schema::dropIfExists('messages');
    }
};
