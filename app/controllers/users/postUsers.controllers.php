<?php

class PostUsersController extends Controller
{
    public function go()
    {
        // Get the request body
        $body = json_decode($this->request->body, true);
        // Validate the request body
        if (!isset($body['username'])) {
            http_response_code(400);
            echo 'Username is required';
            exit();
        }

        if (!isset($body['password'])) {
            http_response_code(400);
            echo 'Password is required';
            exit();
        }
        // Create a new user
        $model = new UsersModel();

        try {
            $model->create_user($body['username'], $body['password']);
        } catch (Exception $e) {
            http_response_code(500);
            echo $e->getMessage();
            exit();
        }

        echo 'User created';
    }
}
