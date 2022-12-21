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

    function update_task($id, $description, $status, $assigned_to, $due_date)
    {
        $timestamp = new DateTime();
        $timestamp = $timestamp->format('Y-m-d H:i:s');
        $sql = "UPDATE tasks SET description = '$description', status = '$status', assigned_to = '$assigned_to', due_date = '$due_date', updated_at = '$timestamp' WHERE task_id = $id";
        mysqli_query($this->db, $sql);
    }

    function get_record_by_id($id)
    {
        $sql = "SELECT * FROM tasks WHERE task_id = $id";
        $results = mysqli_query($this->db, $sql);
        $task = mysqli_fetch_assoc($results);
        return $task;
    }
}
