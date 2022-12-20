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

        echo "Record with id $id was deleted";
    }
}
