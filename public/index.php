<?php

include './classes/request.php';
include './classes/controller.php';
include './classes/router.php';
include './controllers/users.php';
include './controllers/tasks.php';

$request = new Request();

$router = new Router();

$router->run($request);
