<?php

class GetUserController extends Controller {
    
    public function go() {
        $model = new UsersModel();
        $user = $model->get_user_by_id($this->request->path_segments[count($this->request->path_segments) - 1]);
        unset($user['password']);
        $response = new Response(200,"OK", $user);
        $response->send_json();
    }
}