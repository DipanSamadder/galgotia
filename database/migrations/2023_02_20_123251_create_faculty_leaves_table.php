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
        Schema::create('faculty_leaves', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('reason');
            $table->integer('days')->default(0);
            $table->integer('user_id')->default(0);
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
        Schema::dropIfExists('faculty_leaves');
    }
};
