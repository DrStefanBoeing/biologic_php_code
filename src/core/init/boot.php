<?php

use Biologic\Core\Classes\Renderer;
use Biologic\Core\Classes\Settings;
use Biologic\Core\Classes\Session;
use Twig\Loader\FilesystemLoader;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Eloquent\Relations\Relation;

////////////////////////////////////////////////////////////////////////////////
//                                                                            //
//                     Session start                                          //
//                                                                            //
////////////////////////////////////////////////////////////////////////////////
Session::start();

////////////////////////////////////////////////////////////////////////////////
//                                                                            //
//                       Loading of default settings                          //
//                                                                            //
////////////////////////////////////////////////////////////////////////////////

Settings::load(__DIR__.'/../../../config/settings.php');
// e.g. passwords and other sensitive data that must be stored locally
Settings::load(__DIR__.'/../../../config/settings.local.php');


////////////////////////////////////////////////////////////////////////////////
//                                                                            //
//                     Loading of local error handler                         //
//                                                                            //
////////////////////////////////////////////////////////////////////////////////

if(setting('debug')) {
    $whoops = new \Whoops\Run;
    // stops warnings/notices for the legacy files
    $whoops->silenceErrorsInPaths('@src/legacy/@', E_NOTICE | E_WARNING);
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
}


////////////////////////////////////////////////////////////////////////////////
//                                                                            //
//                       Loading renderer core views                          //
//                                                                            //
////////////////////////////////////////////////////////////////////////////////

Renderer::pushLoader(new FilesystemLoader(__DIR__.'/../views'));


////////////////////////////////////////////////////////////////////////////////
//                                                                            //
//                       Loading of database package                          //
//                                                                            //
////////////////////////////////////////////////////////////////////////////////

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => setting('db.host'),
    'database'  => 'operational',
    'username'  => setting('db.user'),
    'password'  => setting('db.password'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
], 'operational');

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => setting('db.host'),
    'database'  => 'reference_categories_db_new',
    'username'  => setting('db.user'),
    'password'  => setting('db.password'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
], 'reference_categories');

// Set the event dispatcher used by Eloquent models... (optional)
// use Illuminate\Events\Dispatcher;
// use Illuminate\Container\Container;
// $capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

// setting up the polymorphic relationship for permissions to play well with Laravel
Relation::morphMap([
    'projects' => 'Biologic\Core\Models\Project',
    'experiments' => 'Biologic\Core\Models\Experiment',
]);

Settings::setCapsule($capsule);

