<?php

class PutTasksController extends Controller
{
    public function go()
    {
        $body = json_decode($this->request->body, true);
        // Check if all required fields are present
        if (
            empty($body['description']) ||
            empty($body['status']) ||
            empty($body['assigned_to']) ||
            empty($body['due_date'])
        ) {
            http_response_code(400);
            echo 'Bad request';
            exit();
        }
        // Get the id from the path
        $id =
            $this->request->path_segments[
                count($this->request->path_segments) - 1
            ];
        // Update the task
        $model = new TasksModel();
        $model->update_task(
            $id,
            $body['description'],
            $body['status'],
            $body['assigned_to'],
            $body['due_date']
        );
        $response = new Response(204, "No Content");
        $response->send_json();
    }
}
