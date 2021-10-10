<?php
include "./Models/Post.php";
use PDOException;
use PDO;
class Post extends database{
    // public function __construct()
    // {
    //     try {
    //         //code...
    //         $host = "localhost";
    //         $dbname = "simple-blogs";
    //         $username = "root";
    //         $password = "root";
    //         $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    //     } catch (PDOException $msg) {
    //         //throw $th;
    //         return 'failed to connect'.$msg->getMessage();
    //     }
    //     // parent::__construct();
    // }
    public function add_data($title,$content, $creator)
    {
        $data = $this->db->prepare("INSERT INTO simplepost (title,content,date_post,creator) VALUES (?, ?, now(), ?)");
        
        $data->bindParam(1, $title);
        $data->bindParam(2, $content);
        $data->bindParam(3, $creator);
        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM simplepost");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function get_by_id($id_post){
        $query = $this->db->prepare("SELECT * FROM simplepost where id=?");
        $query->bindParam(1, $id_post);
        $query->execute();
        return $query->fetch();
    }

    public function update($title,$content,$creator,$id_post){
        $query = $this->db->prepare('UPDATE simplepost set title=?, content=?, date_post=now(), creator=? where id=?');
        
        $query->bindParam(1, $title);
        $query->bindParam(2, $content);
        $query->bindParam(3, $creator);
        $query->bindParam(4, $id_post);
        $query->execute();
        return $query->rowCount();
    }

    public function delete($id_post)
    {
        $query = $this->db->prepare("DELETE FROM simplepost where id=?");

        $query->bindParam(1, $id_post);

        $query->execute();
        return $query->rowCount();
    }

    public function archives($id_post){
        $query = $this->db->prepare('UPDATE simplepost set `archive` = 1 where id=?');
        
        $query->bindParam(1, $id_post);
        $query->execute();
        return $query->rowCount();
    }
    public function unarchives($id_post){
        $query = $this->db->prepare('UPDATE simplepost set `archive` = NULL  where id=?');
        
        $query->bindParam(1, $id_post);
        $query->execute();
        return $query->rowCount();
    }

}
?>