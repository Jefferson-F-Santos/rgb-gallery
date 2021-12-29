<?php

require getcwd() . '/vendor/autoload.php';

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Src\Controllers\ImageController;

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
        'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'db_gallery',
            'username' => 'root',
            'password' => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]
    ],
];

$container = new \Slim\Container($configuration);

$app = new \Slim\App();

$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($container) use ($capsule) {
    return $capsule;
};

$app->get('/', function (Request $request, Response $response, array $args): Response {
    return $response
        ->withStatus(200);
});
$app->get('/images', ImageController::class . ':getImages');

$app->run();
