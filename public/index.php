<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$app->add(
    new \Slim\Middleware\Session([
        'name' => 'helpdesk',
        'autorefresh' => true,
        'lifetime' => '1 hour',
    ])
);

$container = $app->getContainer();

$container['session'] = function ($c) {
    return new \SlimSession\Helper();
};

$container['view'] = function ($c) {
    return new \Slim\Views\PhpRenderer('../templates');
};

$container['db_config'] = require_once '../config/db.php';

$container['db'] = function ($c) {
    return new \Novokhatsky\DbConnect($c['db_config']);
};

$app->get('/', '\Helpdesk\Controllers\HomeController:index');
$app->post('/', '\Helpdesk\Controllers\HomeController:newbid');

$app->run();

