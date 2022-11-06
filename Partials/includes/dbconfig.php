<?php

require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;


// $serviceAccount = ServiceAccount::fromJsonFile(__DIR__. 'react-ebe8e-firebase-adminsdk-edc3p-3832332702.json');
$firebase = (new Factory)
    ->withServiceAccount(__DIR__ . '/portfolio-4af42-firebase-adminsdk-zf5bz-0ffdcdb831.json')
    ->withDatabaseUri('https://portfolio-4af42-default-rtdb.firebaseio.com/');

$database = $firebase->createDatabase();
?>