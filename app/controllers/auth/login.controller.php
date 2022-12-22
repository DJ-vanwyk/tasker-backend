<?php

class LoginController extends Controller
{
    public function go()
    {
        $body = json_decode($this->request->body, true);

        if (!isset($body['username']) or !isset($body['password'])) {
            $response = new Response(400, 'Bad request');
            $response->send_json();
            exit();
        }

        $model = new UsersModel();
        $user = $model->get_user_by_username($body['username']);

        if ($user) {
            if (password_verify($body['password'], $user['password'])) {
                $_SESSION['user'] = $user;
                $response = new Response(200, 'Logged in', $user);
                $response->send_json();
            } else {
                $response = new Response(401, 'Unauthorized');
                $response->send_json();
            }
        } else {
            $response = new Response(404, 'User not found');
            $response->send_json();
        }
    }
}
