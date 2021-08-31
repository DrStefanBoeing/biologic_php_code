<?php

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Schema\Blueprint;

DB::schema('operational')->create('experiments', function(Blueprint $table) {
    $table->increments('id');
    $table->string('name');
    $table->integer('project_id')->unsigned()->nullable();
    $table->string('experiment_code')->unique(); // this is the main id we are using to match things up
    $table->mediumText('main_question');
    $table->longText('description');
    $table->string('lab');
    $table->string('lead_scientist');
    $table->timestamps();

    $table->foreign('project_id')->references('id')->on('projects')->onDelete('SET NULL');
});
