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
        Schema::create('library_setups', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('message')->nullable();
            $table->longText('about')->nullable();
            $table->string('open_close')->nullable();
            $table->string('lunch_time')->nullable();
            $table->string('holiday')->nullable();
            $table->integer('logo')->default(0);
            $table->integer('created_by')->default(0);
            $table->integer('status')->default(0);
            $table->integer('institutes_id')->default(0);
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
        Schema::dropIfExists('library_setups');
    }
};
