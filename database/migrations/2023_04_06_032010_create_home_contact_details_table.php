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
        Schema::create('home_contact_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('home_contact_id');
            $table->foreign('home_contact_id')->references('id')->on('home_contacts')->onDelete('cascade');
            $table->string('phone')->nullable();
            $table->string('company')->nullable();
            $table->string('country')->nullable();
            $table->string('source')->nullable();
            $table->enum('status', ['unread', 'read', 'replied'])->default('unread');
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
        Schema::dropIfExists('home_contact_details');
    }
};
