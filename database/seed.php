<?php

use Biologic\Core\Models\Experiment;
use Biologic\Core\Models\User;

$admin1 = User::create([
    'email' => 'nightil'
]);
$admin1['superuser'] = 1;
$admin1->save();

$admin2 = User::create([
    'email' => 'boeings'
]);
$admin2['superuser'] = 1;
$admin2->save();

$experiment1 = Experiment::create([
    'name' => 'Experiment one',
    'slug' => 'exp-one',
    'project_id' => null,
    'experiment_code' => 'bio01',
    'main_question' => 'main question 1',
    'description' => 'description 1',
    'lead_scientist' => 'John Doe'
]);

