<?php

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Schema\Blueprint;

DB::schema('operational')->table('users', function(Blueprint $table) {
    $table->string('password_reset_token');
    $table->timestamp('password_reset_timestamp');
});

