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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('about')->nullable();
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('dob')->nullable();
            $table->string('blood')->nullable();
            $table->string('registration')->nullable();
            $table->string('roll')->nullable();
            $table->longText('education')->nullable();
            $table->longText('social_links')->nullable();
            $table->integer('user_id')->default(0);
            $table->integer('programs_id')->default(0);
            $table->integer('program_sessions_id')->default(0);
            $table->integer('created_by')->default(0);
            $table->integer('institutes_id')->default(0);
            $table->integer('order')->default(0);
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
        Schema::dropIfExists('students');
    }
};
