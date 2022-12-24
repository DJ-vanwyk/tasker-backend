<?php

session_start();

require '../vendor/autoload.php';
require '../config/config.php';
require '../app/scripts/cors.php';

cors();

$request = new Request();
$router = new Router();

// Auth middleware
if (!isset($_SESSION['user']) and $request->path != ROOT . '/api/login') {
    http_response_code(401);
    echo 'Unauthorized';
    exit();
}

// Routes
// tasks routes
$router->get('/api/tasks', new GetTasksController());
$router->get('/api/tasks/[0-9]+', new GetTaskController());
$router->post('/api/tasks', new PostTasksController());
$router->put('/api/tasks/[0-9]+', new PutTasksController());
$router->delete('/api/tasks/[0-9]+', new DeleteTasksController());

// // users routes
$router->get('/api/users', new GetUsersController());
$router->post('/api/users', new PostUsersController());
$router->put('/api/users/[0-9]+', new PutUsersController());
// $router->delete('/api/users/[0-9]+', new DeleteUsersController());

// statuses routes
$router->get('/api/statuses', new GetStatusesController());
$router->get('/api/statuses/[0-9]+', new GetStatusController());
$router->post('/api/statuses', new PostStatusesController());
$router->put('/api/statuses/[0-9]+', new PutStatusesController());
$router->delete('/api/statuses/[0-9]+', new DeleteStatusesController());

// Auth routes
$router->post('/api/login', new LoginController());
$router->post('/api/logout', new LogoutController());

// Run the router
$router->run($request);
