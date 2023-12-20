<?php
    require_once __DIR__ . '/vendor/autoload.php';
    $m = new MongoDB\Client ("mongodb+srv://edu:mono123456@cluster0.dyzwxbt.mongodb.net/NOMBREBASEDEDATOS?retryWrites=true&w=majority");
    echo "Connection to database Ok";

    $collection = $m->test->users;

    $insertOneResult = $collection->insertOne([
    'username' => 'admin',
    'email' => 'admin@example.com',
    'name' => 'Admin User',
]);
?>