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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->string('order_number');

            /* envio shipping */
            $table->string('shipping_fullname');
            $table->string('shipping_address');
            $table->string('shipping_city');
            $table->string('shipping_state');
            $table->string('shipping_zipcode');
            $table->string('shipping_phone');
            
            $table->string('notes')->nullable();
             /* facturacion  */
            $table->string('billing_fullname')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_state')->nullable();
            $table->string('billing_zipcode')->nullable();
            $table->string('billing_phone')->nullable();

            $table->float('total');

            $table->integer('item_count');

            $table->boolean('is_paid')->default(false);

            $table->enum('status', ['pending', 'processing', 'completed', 'declined'])->default('pending');

            /* metodo de pagos */

            $table->enum('payment_method', ['cash_on_delivery', 'paypal', 'stripe', 'card'])->default('cash_on_delivery');


            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
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
        Schema::dropIfExists('orders');
    }
};
