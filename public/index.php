<?php

require '../vendor/autoload.php';
require '../config/config.php';

$request = new Request();
$router = new Router();

// Routes
// tasks routes
$router->get('/api/tasks', new GetTasksController());
$router->post('/api/tasks', new PostTasksController());
$router->put('/api/tasks/[0-9]+', new PutTasksController());
$router->delete('/api/tasks/[0-9]+', new DeleteTasksController());
// users routes
$router->get('/api/users', new GetUsersController());
$router->post('/api/users', new PostUsersController());
$router->put('/api/users/[0-9]+', new PutUsersController());
$router->delete('/api/users/[0-9]+', new DeleteUsersController());

// statuses routes
$router->get('/api/statuses', new GetStatusesController());
$router->post('/api/statuses', new PostStatusesController());
$router->put('/api/statuses/[0-9]+', new PutStatusesController());
$router->delete('/api/statuses/[0-9]+', new DeleteStatusesController());

// Run the router
$router->run($request);
