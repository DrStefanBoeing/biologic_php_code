<?php

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Schema\Blueprint;

DB::schema('operational')->create('permissions', function(Blueprint $table) {
    $table->increments('id');
    $table->integer('user_id')->unsigned();
    $table->integer('authable_id')->unsigned()->nullable();
    $table->string('authable_type')->index();
    $table->string('type')->index();
    $table->timestamps();

    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
});

