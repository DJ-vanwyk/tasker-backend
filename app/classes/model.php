<?php

class Model
{
    protected $db = null;

    function __construct()
    {
        $this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if (!$this->db) {
            echo 'Connection error: ' . mysqli_connect_errno();
        }
    }

    function __destruct()
    {
        mysqli_close($this->db);
    }
}
