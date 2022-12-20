<?php

class PutStatusesController extends Controller
{
    public function go()
    {
        $body = json_decode($this->request->body, true);
        // check if the request body is valid
        if (isset($body['name'])) {
            $name = $body['name'];
        } else {
            echo 'No name provided in request body';
            http_response_code(400);
            exit();
        }

        $model = new StatusesModel();
        $id =
            $this->request->path_segments[
                count($this->request->path_segments) - 1
            ];
        try {
            $statuse = $model->update_status_by_id($id, $name);
        } catch (Exception $e) {
            // if there is an error, return the error message
            echo $e->getMessage();
            http_response_code(500);
            exit();
        }
        // Set the header to JSON
        echo "Record with id $id was updated to $name";
    }
}
