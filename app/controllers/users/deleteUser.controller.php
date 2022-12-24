<?php

class DeleteUserController extends Controller {
    
    public function go() {
        $model = new UsersModel();
        $model->delete_user($this->request->path_segments[count($this->request->path_segments) - 1]);
        $response = new Response(204,"No Content");
        $response->send_json();
    }
}