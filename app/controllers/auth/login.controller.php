<?php

class LoginController extends Controller
{
    public function go()
    {
        $body = json_decode($this->request->body, true);

        if (!isset($body['username']) or !isset($body['password'])) {
            http_response_code(400);
            echo json_encode(['error' => 'Missing username or password']);
            exit();
        }

        $model = new UsersModel();
        $user = $model->get_user_by_username($body['username']);

        if ($user) {
            if (password_verify($body['password'], $user['password'])) {
                $_SESSION['user'] = $user;
                unset($user['password']);
                header('Content-Type: application/json');
                echo json_encode($user);
            } else {
                echo 'Wrong password';
            }
        } else {
            echo 'User not found';
        }
    }
}
