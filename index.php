<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';

$app = new \Slim\Slim(array(
    'debug' => true,
    'templates.path' => './templates'
));

$app->get('/', function () {
    echo "Hello pankaj";
});
$app->get('/books/:id', function ($id) use ($app) {
    $app->render('myTemplate.php', array('id' => $id));
});
$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

$app->run();

