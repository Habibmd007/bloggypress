<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('cat_id');
            $table->tinyInteger('tag_id')->nullable();
            $table->string('head');
            $table->text('media')->nullable();
            $table->tinyInteger('featured')->default(0)->nullable();
            $table->tinyInteger('picked')->default(0)->nullable();
            $table->text('post_short')->nullable();
            $table->text('photo_gallery_text')->nullable();
            $table->text('qoute')->nullable();
            $table->text('post_details')->nullable();
            $table->integer('status');
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
        Schema::dropIfExists('blog_posts');
    }
}
