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
        Schema::create('loan_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('loan_id');
            $table->decimal('amount', 8, 2);
            $table->date('payment_date');
            $table->decimal('interest_rate', 8, 2)->nullable();
            $table->string('installment_period')->nullable();
            $table->date('due_date')->nullable();
            $table->decimal('late_fee', 8, 2)->nullable();
            $table->string('status')->nullable();
            $table->timestamps();

            $table->foreign('loan_id')->references('id')->on('loans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_details');
    }
};
