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
        Schema::create('prices', function (Blueprint $table) {
            $table->id();

            $table->decimal('price_anterior', 7,2)->default(0.00)->nullable();
            $table->float('price_reciente')->nullable();
            //convertir el free en un array como abgotado gratis 
            $table->string('free')->nullable();
            $table->morphs('priceable'); //{commentable}_type => app\model\post, {commentable}_id
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
        Schema::dropIfExists('prices');
    }
};
