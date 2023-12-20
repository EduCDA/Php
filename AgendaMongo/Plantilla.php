<?php
    require_once __DIR__ . '/vendor/autoload.php';
    $m = new MongoDB\Client("mongodb://localhost:27017");
    echo "Connection to database Ok";

    $collection = $m->test->users;

    $insertOneResult = $collection->insertOne([
    'username' => 'admin',
    'email' => 'admin@example.com',
    'name' => 'Admin User',
]);
?>