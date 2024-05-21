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
        Schema::create('user_coins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('coin_id');
            $table->decimal('balance', 20, 8)->default(0);
            $table->decimal('ct_balance', 20, 8)->default(0);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('coin_id')->references('id')->on('coins');
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
        Schema::dropIfExists('user_coins');
    }
};
