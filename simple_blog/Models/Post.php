<?php
// namespace db;
use PDO;
use PDOException;
class database{
    public function __construct()
    {
        try {
            //code...
            $host = "localhost";
            $dbname = "simple-blogs";
            $username = "root";
            $password = "root";
            $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
        } catch (PDOException $msg) {
            //throw $th;
            return 'failed to connect'.$msg->getMessage();
        }
    }
}
?>