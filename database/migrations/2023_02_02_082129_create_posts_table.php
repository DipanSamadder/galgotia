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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('title');
            $table->string('slug');
            $table->longText('content')->nullable();
            $table->string('excerpt')->nullable();
            $table->integer('banner')->default(0);
            $table->integer('catalogue')->default(0);
            $table->integer('thumbnail')->default(0);
            $table->string('category_id')->nullable();
            $table->string('author')->nullable();
            $table->integer('visitor')->default(0);
            $table->integer('comment_status')->default(0);
            $table->integer('comment_count')->default(0);
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('keywords')->nullable();
            $table->string('visibility')->default(1);
            $table->integer('order')->default(0);
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
        Schema::dropIfExists('posts');
    }
};
