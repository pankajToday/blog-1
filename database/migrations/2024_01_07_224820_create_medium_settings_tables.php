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
        Schema::create('medium_settings', function (Blueprint $table) {
            $table->id();
            $table->string('author_id',100);
            $table->string('name',50);
            $table->string('username',50);
            $table->string('url');
            $table->string('integration_token');
            $table->string('imageUrl');
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medium_settings');
    }
};
