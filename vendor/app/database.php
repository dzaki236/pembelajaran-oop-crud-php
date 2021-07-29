<?php
namespace vendor\app;
use PDO;
class Database{
    public $host,$username,$password,$database,$port;
public function __construct()
{
    $this->host = 'localhost';
    $this->username = 'root';
    $this->password='abcd5dasar';
    $this->db_name = 'warga';
    $this->port = '3306';
    $this->db = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
}
}
?>