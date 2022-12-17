<?php

class StatusesView extends View
{
    function __construct($statuses)
    {
        $this->data['statuses'] = $statuses;
        $this->template = 'C:\xampp\htdocs\tasker\app\templates\statuses.php';
    }
}
