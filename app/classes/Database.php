<?php
namespace App\classes;
use mysqli;

class Database
{
    public $dbHost = 'localhost';
    public $dbUser = 'root';
    public $dbPass = '';
    public $dbName = 'apple';

    public $link, $error;

    public function __construct()
    {
        $this->dbConnect();
    }

    public function dbConnect()
    {
        $this->link = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        if (!$this->link) {
            $this->error = "Database connection error" . mysqli_connect_error();
        } else {
            return true;
        }
    }

    // Useful query pass methods

    // Select or Read data
    public function select($query)
    {
        $result = $this->link->query($query) or
            die($this->link->error . __LINE__);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    // Insert data
    public function insert($query)
    {
        $insert_row = $this->link->query($query) or
            die($this->link->error . __LINE__);
        if ($insert_row) {
            return $insert_row;
        } else {
            return false;
        }
    }

    // Update data
    public function update($query)
    {
        $update_row = $this->link->query($query) or
            die($this->link->error . __LINE__);
        if ($update_row) {
            return $update_row;
        } else {
            return false;
        }
    }

    // Delete data
    public function delete($query)
    {
        $delete_row = $this->link->query($query) or
            die($this->link->error . __LINE__);
        if ($delete_row) {
            return $delete_row;
        } else {
            return false;
        }
    }
}






?>