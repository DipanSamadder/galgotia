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
        Schema::create('institutes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('institute_types_id')->default(0);
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->longText('owner_details')->nullable();
            $table->longText('social_link')->nullable();
            $table->string('map')->nullable();
            $table->string('year')->nullable();
            $table->integer('logo')->nullable()->default(0);
            $table->string('address')->nullable();
            $table->integer('city')->default(0);
            $table->integer('state')->default(0);
            $table->integer('country')->default(0);
            $table->integer('order')->default(0);
            $table->integer('user_id')->default(0);
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('institutes');
    }
};
