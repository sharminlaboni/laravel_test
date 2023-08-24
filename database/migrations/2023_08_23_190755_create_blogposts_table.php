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
        Schema::create('blogposts', function (Blueprint $table) {
            $table->id();
            $table->string('blog_img')->nullable();
            $table->string('blog_date')->nullable();
            $table->string('author_name')->nullable();

            $table->string('blog_comment')->nullable();
            $table->string('blog_title')->nullable();
            $table->longText('description')->nullable();
            $table->text('blog_detail')->nullable();
            $table->text('summary')->nullable();
            $table->string('logo')->nullable();
            $table->string('link')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id') ->references('id')->on('users')->onDelete('cascade');
            
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
        Schema::dropIfExists('blogposts');
    }
};
