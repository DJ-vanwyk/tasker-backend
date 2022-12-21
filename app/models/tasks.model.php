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

    function create_task($description, $status, $assigned_to, $due_date)
    {
        $sql = "INSERT INTO tasks (description, status, assigned_to, due_date) VALUES ('$description', '$status', '$assigned_to', '$due_date')";
        mysqli_query($this->db, $sql);

        $id = mysqli_insert_id($this->db);
        return $id;
    }
}
