<?php

class UsersModel extends Model
{
    public function get_all_records()
    {
        $sql = 'SELECT * FROM users';
        $results = mysqli_query($this->db, $sql);
        $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
        return $users;
    }
}
