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
        Schema::create('other_pages', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 60)->nullable();
            $table->string('url', 230)->nullable();
            $table->string('icono', 400)->nullable();
            //agregar activo o desactivo
            $table->morphs('other_pageable'); //{commentable}_type => app\model\post, {commentable}_id
            /*   $table->unsignedBigInteger('commentable_id');
              $table->string('commentable_type'); */
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
        Schema::dropIfExists('other_pages');
    }
};
