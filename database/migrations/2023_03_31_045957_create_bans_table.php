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
        Schema::create('bans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('country_code')->nullable();
            $table->string('type');
            $table->text('reason')->nullable();
            $table->dateTime('expires_at')->nullable();
            $table->boolean('is_active')->default(true);
            $table->unsignedBigInteger('banned_by')->nullable();
            $table->foreign('banned_by')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bans');
    }
};
