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

    public function get_user_by_username($username)
    {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $results = mysqli_query($this->db, $sql);
        $user = mysqli_fetch_assoc($results);
        return $user;
    }

    public function create_user($username, $password)
    {
        // Hash the password
        $hashed_pass = password_hash($password, PASSWORD_BCRYPT);
        // Insert the user into the database
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_pass')";
        $results = mysqli_query($this->db, $sql);
        return $results;
    }
}
