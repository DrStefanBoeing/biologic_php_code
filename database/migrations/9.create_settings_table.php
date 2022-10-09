<?php

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Schema\Blueprint;

DB::schema('operational')->create('settings', function(Blueprint $table) {
    $table->increments('id');
    $table->string('experiment_code', 255)->unique();
    $table->longText('experiment_settings');
    $table->timestamps();
});

