<?php
//include proses
include('../app/process.php');
$Db = new Proses();
// $data_warga = $Db->get_by_id($_GET['id']);
$data_warga = $Db->show();
print_r($data_warga);
?>
