<?php

class StatusesModel extends Model
{
    public function get_all_statuses()
    {
        $sql_query = 'SELECT * FROM statuses';
        $results = mysqli_query($this->db, $sql_query);
        $statuses = mysqli_fetch_all($results, MYSQLI_ASSOC);
        return $statuses;
    }

    public function new_status($status_name)
    {
        $sql_query = "INSERT INTO statuses (name) VALUES ('$status_name')";
        $results = mysqli_query($this->db, $sql_query);

        if ($results) {
            $results = mysqli_insert_id($this->db);
        }

        return $results;
    }

    public function delete_status_by_id($status_id)
    {
        $sql_query = "DELETE FROM statuses WHERE status_id = $status_id";
        $results = mysqli_query($this->db, $sql_query);
        return $results;
    }

    public function update_status_by_id($status_id, $status_name)
    {
        $sql_query = "UPDATE statuses SET name = '$status_name' WHERE status_id = $status_id";
        $results = mysqli_query($this->db, $sql_query);
        return $results;
    }
}
