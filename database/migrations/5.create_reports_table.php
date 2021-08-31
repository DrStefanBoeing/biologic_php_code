<?php

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Schema\Blueprint;

DB::schema('operational')->create('reports', function(Blueprint $table) {
    $table->increments('id');
    $table->integer('experiment_id')->unsigned()->nullable();
    $table->longText('content');
    $table->timestamps();

    $table->foreign('experiment_id')->references('id')->on('experiments')->onDelete('cascade');
});

