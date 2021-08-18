<?php
namespace app;
use PDO;
class Database{
    public $host,$username,$password,$db_name,$port;
public function __construct()
{
    $this->host = 'localhost';
    $this->username = 'root';
    $this->password='root';
    $this->db_name = 'dbwarga';
    $this->port = '3306';
    $this->db = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
}
}
?>