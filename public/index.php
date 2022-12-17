<?php

require '../vendor/autoload.php';
require '../config/config.php';
require '../app/models/tasker.php';

$taskModel = new TaskModel();

var_dump($taskModel->getRecords());

// $request = new Request();

// $router = new Router();

// // $router->run($request);
