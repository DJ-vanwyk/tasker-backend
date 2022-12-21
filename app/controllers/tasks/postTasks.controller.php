<?php

class PostTasksController extends Controller
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
        $model = new TasksModel();
        $id = $model->create_task(
            $body['description'],
            $body['status'],
            $body['assigned_to'],
            $body['due_date']
        );

        echo 'Task created with id: ' . $id;
    }
}
