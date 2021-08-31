<?php

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Schema\Blueprint;

DB::schema('operational')->create('activity_records', function(Blueprint $table) {
    $table->increments('id');
    $table->string('email');
    $table->string('request_uri');
    $table->string('http_host');
    $table->string('server_name');
    $table->string('remote_addr');
    $table->string('http_x_forwarded_for');
    $table->timestamps();
});

