<?php

class GetUsersController extends Controller
{
    public function go()
    {
        $model = new UsersModel();

        $users = $model->get_all_users();
        header('Content-Type: application/json');
        echo json_encode($users);
    }
}
