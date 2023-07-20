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
        Schema::create('post_seo_contents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('post_id')->unsigned();
            $table->bigInteger('uid')->unsigned();
            $table->string('page_section')->default('head');
            $table->string('content');
            $table->text('description');
            $table->string('type',15)->nullable();
            $table->string('extra_info')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('post_id')->on('posts')->references('id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_seo_contents');
    }
};
