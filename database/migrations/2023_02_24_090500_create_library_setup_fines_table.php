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
        Schema::create('library_setup_fines', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('programs_id')->nullable();
            $table->string('return_days')->nullable();
            $table->string('fine')->nullable();
            $table->integer('library_setups_id')->default(0);
            $table->integer('created_by')->default(0);
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
        Schema::dropIfExists('library_setup_fines');
    }
};
