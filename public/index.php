<?php

session_start();

require '../vendor/autoload.php';
require '../config/config.php';
require '../app/scripts/cors.php';

cors();

$request = new Request();
$router = new Router();

// Auth middleware
if (!isset($_SESSION['user']) and $request->path != ROOT . '/login') {
    http_response_code(401);
    echo 'Unauthorized';
    exit();
}

// Routes
// tasks routes
$router->get('/tasks', new GetTasksController());
$router->get('/tasks/[0-9]+', new GetTaskController());
$router->post('/tasks', new PostTasksController());
$router->put('/tasks/[0-9]+', new PutTasksController());
$router->delete('/tasks/[0-9]+', new DeleteTasksController());

// // users routes
$router->get('/users', new GetUsersController());
$router->get('/users/[0-9]+', new GetUserController());
$router->post('/users', new PostUsersController());
$router->put('/users/[0-9]+', new PutUsersController());
$router->delete('/users/[0-9]+', new DeleteUserController());

// statuses routes
$router->get('/statuses', new GetStatusesController());
$router->get('/statuses/[0-9]+', new GetStatusController());
$router->post('/statuses', new PostStatusesController());
$router->put('/statuses/[0-9]+', new PutStatusesController());
$router->delete('/statuses/[0-9]+', new DeleteStatusesController());

// Auth routes
$router->post('/login', new LoginController());
$router->post('/logout', new LogoutController());

// Run the router
$router->run($request);
