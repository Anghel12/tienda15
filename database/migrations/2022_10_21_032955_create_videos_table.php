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
        Schema::create('videos', function (Blueprint $table) {

            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('url');
            $table->unsignedBigInteger('videoable_id')->nullable();
            $table->string('videoable_type')->nullable();

            $table->unsignedBigInteger('commentable_id')->nullable();
            $table->string('commentable_type')->nullable();
           
            $table->unsignedBigInteger('user_id')->nullable();

            /* set null solo para que borre el comentario no todo lo almacenado  */
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
 
            $table->index(['videoable_id', 'videoable_type']);

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
        Schema::dropIfExists('videos');
    }
};
