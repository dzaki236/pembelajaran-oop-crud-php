<?php
use api\app\Database;
class Proses
{
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
    public function add_data($no_ktp, $nama_lengkap, $alamat_lengkap, $no_hp)
    {
        # code...
        $data = $this->db->prepare('INSERT INTO data_warga (no_ktp,nama_lengkap,alamat_lengkap,no_hp) VALUES(?, ?, ?, ?);');
        $data->bindParam(1, $no_ktp);
        $data->bindParam(2, $nama_lengkap);
        $data->bindParam(3, $alamat_lengkap);
        $data->bindParam(4, $no_hp);
        $data->execute();
        $results = $data->rowCount();
        $message=[];
        if($results){
                $message['message']="Data berhasil di ubah";
            }else{
                $message['message']="Data gagal di ubah";
            }
        return json_encode($message);
    }
    public function show()
    {
        # code...
        $query = $this->db->prepare('SELECT * FROM data_warga');
        $query->execute();
        $data = $query->fetchAll();
        return json_encode($data);
    }
    public function get_by_id($id)
    {
        # code...
        $query = $this->db->prepare('SELECT * FROM data_warga where id = ?');
        $query->bindParam(1, $id);
        $query->execute();
        $data = $query->fetch();
        return json_encode($data);
    }
    public function update_data($id, $no_ktp, $nama_lengkap, $alamat_lengkap, $no_hp)
    {
        # code...
        $query = $this->db->prepare('UPDATE data_warga SET no_ktp = ?, nama_lengkap = ?, alamat_lengkap = ?, no_hp = ? WHERE id = ?');
        $query->bindParam(1, $no_ktp);
        $query->bindParam(2, $nama_lengkap);
        $query->bindParam(3, $alamat_lengkap);
        $query->bindParam(4, $no_hp);
        $query->execute();
        $results=$query->rowCount();
        $message=[];
        if($results){
                $message['message']="Data berhasil di ubah";
            }else{
                $message['message']="Data gagal di ubah";
            }
        return json_encode($message);
    }
    public function delete($id)
    {
        #code...
        $query = $this->db->prepare("DELETE FROM data_warga where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        $results=$query->rowCount();
        $message=[];
        if($results){
                $message['message']="Data berhasil di hapus";
            }else{
                $message['message']="Data gagal di hapus";
            }
        return json_encode($message);
    }
}
?>