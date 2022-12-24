<?php

class DeleteTasksController extends Controller
{
    public function go()
    {
        $model = new TasksModel();
        $id =
            $this->request->path_segments[
                count($this->request->path_segments) - 1
            ];
        $model->delete_record_by_id($id);
        $response = new Response(204, "No Content");
        $response->send_json();
    }
}
