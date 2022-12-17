<?php

class TasksModel extends Model
{
    function get_all_records()
    {
        $sql = 'SELECT * FROM tasks';
        $results = mysqli_query($this->db, $sql);
        $tasks = mysqli_fetch_all($results, MYSQLI_ASSOC);
        return $tasks;
    }
}
