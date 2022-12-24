<?php

class PutUsersController extends Controller
{
    public function go()
    {
        $body = json_decode($this->request->body, true);
        // Validate the request body
        if (!isset($body['username'])) {
            http_response_code(400);
            echo 'Username is required';
            exit();
        }

        // Get the user id from the request path
        $user_id =
            $this->request->path_segments[
                count($this->request->path_segments) - 1
            ];

        // Update the user
        $model = new UsersModel();
        try {
            $model->update_user($user_id, $body['username']);
        } catch (Exception $e) {
            http_response_code(500);
            echo $e->getMessage();
            exit();
        }

        $response = new Response(201, "Not data");
        $response->send_json();
    }
}
