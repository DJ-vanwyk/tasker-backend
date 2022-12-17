<?php

class StatusesController
{
    public function go()
    {
        $statuses_model = new StatusesModel();

        $statuses = $statuses_model->get_all_statuses();

        $status_view = new StatusesView($statuses);

        $status_view->render();
    }
}
