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
        Schema::create('post_comments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('comment_post_ID')->default(0);
            $table->string('comment_content')->nullable();
            $table->string('comment_author')->nullable();
            $table->string('comment_author_email')->nullable();
            $table->string('comment_author_url')->nullable();
            $table->string('comment_author_IP')->nullable();
            $table->string('comment_date')->nullable();
            $table->integer('comment_approved')->default(0);
            $table->string('comment_type')->nullable();
            $table->bigInteger('user_id')->default(0);
            $table->bigInteger('comment_parent')->default(0);
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
        Schema::dropIfExists('post_comments');
    }
};
