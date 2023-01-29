<?php
require __DIR__.'/../vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('cs306-8e020-firebase-adminsdk-bdsb4-04f843040c.json')
    ->withDatabaseUri('https://cs306-8e020-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();

?>