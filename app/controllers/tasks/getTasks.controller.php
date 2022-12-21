<?php

class GetTasksController extends Controller
{
    public function go()
    {
        $model = new TasksModel();
        $tasks = $model->get_all_records();
        header('Content-Type: application/json');
        echo json_encode($tasks);
    }
}
