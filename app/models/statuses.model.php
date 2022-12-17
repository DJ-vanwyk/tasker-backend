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
}
