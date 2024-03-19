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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('role_id')->unsigned();
            $table->bigInteger('uid')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email',80)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('mobile',15);
            $table->string('address')->nullable();
            $table->string('user_img')->nullable()->default('https://www.pngitem.com/pimgs/m/581-5813504_avatar-dummy-png-transparent-png.png');
            $table->boolean('status');
            $table->text('notify_device_id')->nullable();
            $table->boolean('is_notify_allowed' )->default(0);
            $table->dateTime('last_login')->nullable();
            $table->ipAddress()->nullable();
            $table->boolean('is_social_login')->default(0)->nullable();
            $table->string('social',35)->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('role_id')->on('roles')->references('id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
