<?php

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Schema\Blueprint;

DB::schema('operational')->create('users', function(Blueprint $table) {
    $table->increments('id');
    $table->string('email')->unique();
    $table->string('name');
    $table->string('password');
    $table->boolean('local_auth')->default(0);
    $table->boolean('superuser')->default(0);
    $table->timestamps();
});

