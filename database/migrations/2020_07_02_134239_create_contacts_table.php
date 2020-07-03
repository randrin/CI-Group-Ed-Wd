<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('subject')->nullable();
            $table->longText('msg')->nullable();
            $table->string('slug')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->integer('status')->nullable()->default('0');
            $table->string('ip')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('contacts');
    }
}
