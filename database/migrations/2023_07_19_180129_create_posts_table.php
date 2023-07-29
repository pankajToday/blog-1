<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('uid')->unsigned();
            $table->string('title');
            $table->string('caption')->nullable();
            $table->string('slug');
            $table->text('seo_url');
            $table->string('post_image')->nullable();
            $table->string('feature_image')->nullable();
            $table->text('post_url')->nullable();
            $table->longText('article_content');
            $table->boolean('status')->default(1);
            $table->bigInteger('posted_by')->unsigned()->nullable();
            $table->enum('publish_status',['published','draft','unpublished','scheduled']);
            $table->dateTime('published_at');
            $table->bigInteger('published_by')->unsigned()->nullable();

            $table->timestamps();
            $table->bigInteger('updated_by')->unsigned()->nullable();
            $table->softDeletes();

            $table->foreign('category_id')->on('categories')->references('id')->cascadeOnDelete();
            $table->foreign('published_by')->on('users')->references('id')->cascadeOnDelete();
            $table->foreign('updated_by')->on('users')->references('id')->cascadeOnDelete();
            $table->foreign('posted_by')->on('users')->references('id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
