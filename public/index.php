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

$user = new \Helpdesk\Models\User($container['session']);

$app->get('/', '\Helpdesk\Controllers\HomeController:index');
$app->post('/', '\Helpdesk\Controllers\HomeController:newbid');

$app->get('/login', '\Helpdesk\Controllers\LoginController:index');
$app->get('/logout', '\Helpdesk\Controllers\LoginController:logout');
$app->post('/login', '\Helpdesk\Controllers\LoginController:checkLogin');

$app->group('', function () {
    $this->get('/admin', '\Helpdesk\Controllers\AdminController:index');
    $this->get('/admin/{id_bid}', '\Helpdesk\Controllers\AdminController:detal');
    $this->post('/admin/{id_bid}', '\Helpdesk\Controllers\AdminController:changeStatus');
    $this->get('/admin/{id_bid}/status', '\Helpdesk\Controllers\AdminController:status');
})->add(new \Helpdesk\Models\Auth($user));

$app->run();
