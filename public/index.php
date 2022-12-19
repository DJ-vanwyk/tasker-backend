<?php

require '../vendor/autoload.php';
require '../config/config.php';

$request = new Request();
$router = new Router();

$router->get('/statuses/*[0-9]+', new StatusesController());
$router->get('/statuses/car/*[0-9]+', new StatusesController());

$router->run($request);
