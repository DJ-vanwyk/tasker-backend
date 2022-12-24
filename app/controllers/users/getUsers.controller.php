<?php

class GetUsersController extends Controller
{
    public function go()
    {
        $model = new UsersModel();

        $users = $model->get_all_users();
        $response = new Response(200, "Ok", $users);
        $response->send_json();
    }
}
