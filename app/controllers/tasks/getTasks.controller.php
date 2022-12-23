<?php

class GetTasksController extends Controller
{
    public function go()
    {
        $model = new TasksModel();
        $tasks = $model->get_all_records();
        $response = new Response(200, "Tasks retrieved", $tasks);
        $response->send_json();
    }
}
