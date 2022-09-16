<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)->
withServiceAccount('firstfirebase-1f7fc-firebase-adminsdk-ynri8-2cfa627200.json')
->withDatabaseUri('https://firstfirebase-1f7fc-default-rtdb.firebaseio.com/');
$database = $factory->createDatabase();

?>