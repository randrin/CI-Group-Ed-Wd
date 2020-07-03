<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username')->nullable()->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('sex')->default('Male');
            $table->string('status_user')->nullable()->default('0');
            $table->string('avatar')->nullable()->default('/assets/images/default-avatar.png');
            $table->string('avatarcover')->nullable()->default('/assets/images/image_placeholder.jpg');
            $table->string('phone')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
