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
        Schema::create('referrals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); //usuario id
            $table->unsignedBigInteger('referred_user_id')->nullable(); //identifica al usuario referido por el código de referencia
            $table->unsignedBigInteger('parent_id')->nullable(); //usuario padre que refirio
            $table->unsignedBigInteger('referring_user_id')->nullable(); //identifica al usuario que proporcionó el código de referencia
           
            $table->string('referral_code')->nullable();
            $table->boolean('is_used')->default(false);
            $table->unsignedInteger('points')->default(0);
            $table->string('status')->default('pending');
            $table->decimal('amount', 10, 2)->default(0.00);
            $table->timestamps();
            
            $table->foreign('parent_id')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('referred_user_id')->references('id')->on('users');
            $table->foreign('referring_user_id')->references('id')->on('users');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('referrals');
    }
};
