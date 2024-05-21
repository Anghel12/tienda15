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
        Schema::create('places', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('address')->nullable();
        $table->string('category')->nullable();
        $table->integer('rating')->nullable();
        $table->text('reviews')->nullable();
        $table->string('phone')->nullable();
        $table->string('website')->nullable();
        $table->string('open_hours')->nullable();
        $table->unsignedBigInteger('created_by')->nullable();
        $table->unsignedBigInteger('updated_by')->nullable();
        $table->unsignedBigInteger('map_id')->nullable();
        $table->softDeletes();
        $table->timestamps();

        $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
        $table->foreign('map_id')->references('id')->on('maps')->onDelete('set null');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places');
    }
};
