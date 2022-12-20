<?php

class LoginController extends Controller
{
    public function go()
    {
        $model = new UsersModel();
        $user = $model->get_user_by_username($_POST['username']);

        if ($user) {
            if (password_verify($_POST['password'], $user['password'])) {
                $_SESSION['user'] = $user;
                echo 'Logged in';
            } else {
                echo 'Wrong password';
            }
        } else {
            echo 'User not found';
        }
    }
}
