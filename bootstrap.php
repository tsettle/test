<?php
require __DIR__.'/vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
   'driver'     => 'pgsql',
   'host'       => '127.0.0.1',
   'port'       => '5432',
   'database'   => 'scanner',
   'username'   => 'scanner',
   'password'   => 'scanner',
   'charset'    => 'utf8',
   'prefix'     => '',
   'schema'     => 'public',
   'sslmode'    => 'prefer'
]);

//Make this Capsule instance available globally.
$capsule->setAsGlobal();

// Setup the Eloquent ORM.
$capsule->bootEloquent();
