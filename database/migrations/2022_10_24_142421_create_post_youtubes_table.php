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
        Schema::create('post_youtubes', function (Blueprint $table) {
            $table->id();
            
            $table->string('name')->nullable();
            $table->string('slug')->nullable();

            $table->text('extract')->nullable();
            $table->longText('body')->nullable();
            $table->longText('iframe')->nullable();

            $table->enum('status', [1, 2])->default(1)->nullable();

            $table->decimal('price_anterior', 7,2)->default(0.00)->nullable();
            $table->float('price')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

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
        Schema::dropIfExists('post_youtubes');
    }
};
