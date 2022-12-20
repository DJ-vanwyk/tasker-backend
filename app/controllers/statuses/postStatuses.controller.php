<?php

class PostStatusesController extends Controller
{
    public function go()
    {
        // decode the request body
        $body = json_decode($this->request->body, true);

        // check if the request body is valid
        if (isset($body['name'])) {
            $name = $body['name'];
        } else {
            echo 'No name provided in request body';
            http_response_code(400);
            exit();
        }

        // create a new status
        $model = new StatusesModel();
        try {
            $result = $model->new_status($name);
        } catch (Exception $e) {
            // if there is an error, return the error message
            echo $e->getMessage();
            http_response_code(500);
            exit();
        }

        // return the new status id
        header('Content-Type: application/json');
        echo json_encode(['id' => $result]);
    }
}
