<?php
require ("./vendor/app/database.php");
use app\Database as DB;
// namespace app;
class Proses extends DB
{
    public function add_data($no_ktp, $nama_lengkap, $alamat_lengkap, $no_hp)
    {
        # code...
        $data = $this->db->prepare('INSERT INTO data_warga (no_ktp,nama_lengkap,alamat_lengkap,no_hp) VALUES(?, ?, ?, ?);');
        $data->bindParam(1, $no_ktp);
        $data->bindParam(2, $nama_lengkap);
        $data->bindParam(3, $alamat_lengkap);
        $data->bindParam(4, $no_hp);
        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        # code...
        $query = $this->db->prepare('SELECT * FROM data_warga');
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
    public function get_by_id($id)
    {
        # code...
        $query = $this->db->prepare('SELECT * FROM data_warga where id = ?');
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }
    public function update_data($no_ktp, $nama_lengkap, $alamat_lengkap, $no_hp,$id)
    {
        # code...
        $query = $this->db->prepare('UPDATE data_warga set no_ktp=?,nama_lengkap=?,alamat_lengkap=?,no_hp=? where id=?');
        $query->bindParam(1, $no_ktp);
        $query->bindParam(2, $nama_lengkap);
        $query->bindParam(3, $alamat_lengkap);
        $query->bindParam(4, $no_hp);
        $query->bindParam(5, $id);
        $query->execute();
        return $query->rowCount();
    }
    public function delete($id)
    {
        #code...
        $query = $this->db->prepare("DELETE FROM data_warga where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->rowCount();
    }
}
