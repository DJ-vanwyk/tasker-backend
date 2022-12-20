<?php

class GetTasksController extends Controller
{
    public function go()
    {
        echo 'GetTasksController';
        var_dump($_SESSION['user']);
    }
}
