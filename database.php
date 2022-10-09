<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__."/src/core/init/boot.php";

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Schema\Blueprint;

function make_migration_table() {
    DB::schema('operational')->create('migrations', function(Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->integer('order')->unsigned();
        $table->timestamps();
    });
    echo "\nCreated migration table.\n";
}

function update_migration_table($order, $name) {
    $datetime = date('Y-m-d H:i:s');

    DB::connection('operational')->table('migrations')->insert([
        'order' => $order,
        'name'  => $name,
        'updated_at' => $datetime,
        'created_at' => $datetime
    ]);
}

function get_ordered_migration_files($dir=__DIR__.'/database/migrations/') {
    $files = array_diff(scandir($dir, SCANDIR_SORT_ASCENDING), array('.', '..'));

    uasort($files, function($a, $b) {
        return explode('.', $a, 2)[0] > explode('.', $b, 2)[0];
    });

    return $files;
}

function run_migrations($existing=[], $dir=__DIR__.'/database/migrations/') {
    foreach(get_ordered_migration_files($dir) as $migration_file) {
        $parts = explode('.', $migration_file, 3);
        if(count($parts) == 3 && !in_array($parts[0], $existing)) {
            try {
                require $dir . $migration_file;
            } catch(Exception $e) {
                var_dump("Exiting because migration failed with message: ".$e->getMessage());
                exit;
            }
            update_migration_table($parts[0], $parts[1]);
            echo "Ran migration $parts[1].\n";
        }
    }
}

function check_migration_table_exists() {
    return DB::schema('operational')->hasTable('migrations');
}

function get_existing_migrations() {
    $rows = DB::connection('operational')->select('SELECT `order` from migrations;');

    $existing = [];
    foreach($rows as $row) {
        array_push($existing, $row->order);
    }

    return $existing;
}

function drop_all_tables() {
    $tables = array_map('reset', DB::connection('operational')->select('SHOW TABLES'));

    DB::schema('operational')->disableForeignKeyConstraints();
    foreach($tables as $table) {
        DB::schema('operational')->dropIfExists($table);
        echo "Dropped table $table.\n";
    }
    DB::schema('operational')->enableForeignKeyConstraints();
}

function migrate() {
    if(!check_migration_table_exists()) {
        make_migration_table();
    }

    run_migrations(get_existing_migrations());
}

function refresh() {
    drop_all_tables();
    migrate();
    seed();
}

function seed() {
    require __DIR__."/database/seed.php";
    echo "\nSeeded the database.\n";
}

if($argc != 2 || in_array($argv[1], array('--help', '-help', '-h'))) {
    echo "Usage: php $argv[0] <option>\n\n";
    echo "Note that this script affects only the operational database.\n\n";
    echo "<option> list\n";
    echo "\t migrate - runs any migrations which have not yet been executed\n";
    echo "\t seed - plants some seed data inside the database\n";
    echo "\t refresh - resets the database and seeds it\n";
    echo "\n";
    exit;
}

switch($argv[1]) {
    case 'migrate':
        migrate();
        break;
    case 'seed':
        seed();
        break;
    case 'refresh':
        if(setting('db_refreshable') !== true) {
            echo "The database must be explicitly set as refreshable inside the settings file (to prevent accidental data loss).\n";
            exit;
        }

        refresh();
        break;
    default:
        echo "Unknown <option> $argv[1]; use --help for a list of options.\n";
        break;
}

