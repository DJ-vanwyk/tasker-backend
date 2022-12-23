<?php

class GetStatusesController extends Controller
{
    public function go()
    {
        $model = new StatusesModel();
        $statuses = $model->get_all_statuses();

        $response = new Response(200, "Ok", $statuses);
        $response->send_json();
    }
}
