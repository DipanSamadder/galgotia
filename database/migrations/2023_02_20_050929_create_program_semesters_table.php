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
        Schema::create('program_semesters', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('year')->default(0);
            $table->integer('order')->default(0);
            $table->integer('institutes_id')->default(0);
            $table->integer('user_id')->default(0);
            $table->integer('program_sessions_id')->default(0);
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
        Schema::dropIfExists('program_semesters');
    }
};
