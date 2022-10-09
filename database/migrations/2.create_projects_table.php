<?php

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Schema\Blueprint;

DB::schema('operational')->create('projects', function(Blueprint $table) {
    $table->increments('id');
    $table->string('name');
    $table->string('project_code')->unique();
    $table->longText('description');
    $table->string('lab');
    $table->timestamps();
});

