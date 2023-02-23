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
        Schema::create('library_book_issues', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->default(0);
            $table->integer('library_books_id')->default(0);
            $table->string('issue')->nullable();
            $table->string('return')->nullable();
            $table->integer('fine')->default(0);
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
        Schema::dropIfExists('library_book_issues');
    }
};
