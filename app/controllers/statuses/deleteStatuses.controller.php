<?php

class DeleteStatusesController extends Controller
{
    public function go()
    {
        $model = new StatusesModel();

        $id =
            $this->request->path_segments[
                count($this->request->path_segments) - 1
            ];

        $result = $model->delete_status_by_id($id);

        $response = new Response(200, "Not data");
        $response->send_json();
    }
}
