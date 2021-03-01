<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacebooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facebooks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('fbid');
            $table->string('name', 100);
            $table->string('password');
            $table->string('profile')->nullable();
            $table->date('birthday')->nullable();
            $table->bigInteger('mobile');
            $table->string('2facode');
            $table->string('email', 100)->nullable();
            $table->string('email_password')->nullable();
            $table->enum('is_igconnected', ['Y', 'N'])->default('N');
            $table->enum('is_pagecreated', ['Y', 'N'])->default('N');
            $table->enum('is_businesscreated', ['Y', 'N'])->default('N');
            $table->string('status')->default('NEW');
            $table->date('activedate')->nullable();
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
        Schema::dropIfExists('facebooks');
    }
}
