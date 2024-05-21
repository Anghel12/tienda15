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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('coin_id');
            $table->unsignedBigInteger('payment_id')->nullable();
            $table->integer('amount');
            $table->string('type');
            /* status agregado recien falta el modelo */
            $table->enum('status', ['pending', 'completed', 'cancelled'])->default('pending')->nullable();
            
            $table->decimal('price', 20, 8);
            $table->string('ip_address');
            $table->timestamps();
        
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('coin_id')->references('id')->on('coins')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('set null');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
