<?php

class GetStatusesController extends Controller
{
    public function go()
    {
        $model = new StatusesModel();
        $statuse = $model->get_all_statuses();

        // Set the header to JSON
        header('Content-Type: application/json');
        echo json_encode($statuse);
    }
}
