<?php

class GetTaskController extends Controller
{
    public function go()
    {
        $model = new TasksModel();
        // Get the task
        $task = $model->get_record_by_id(
            $this->request->path_segments[
                count($this->request->path_segments) - 1
            ]
        );
        // Check if the task exists
        if (empty($task)) {
            http_response_code(404);
            echo 'Not found';
            exit();
        }
        // Return the task
        header('Content-Type: application/json');
        echo json_encode($task);
    }
}
