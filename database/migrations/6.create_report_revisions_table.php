<?php

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Schema\Blueprint;

DB::schema('operational')->create('report_revisions', function(Blueprint $table) {
    $table->increments('id');
    $table->integer('report_id')->unsigned();
    $table->longText('content');
    $table->timestamps();

    $table->foreign('report_id')->references('id')->on('reports')->onDelete('cascade');
});

