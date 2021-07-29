<?php
//include proses
include('./app/process.php');

$Db = new Proses();
$data_warga = $Db->show();
// print_r($data_warga);
if (isset($_POST['daftar'])) {
    // echo "Tombol Daftar Telah Di klik";
    $noktp = htmlentities(htmlspecialchars($_POST['no_ktp']));
    $nama = htmlentities(htmlspecialchars($_POST['nama_lengkap']));
    $alamat = htmlentities(htmlspecialchars($_POST['alamat_lengkap']));
    $nohp = htmlentities(htmlspecialchars($_POST['no_hp']));
    $querysimpan = $Db->add_data($noktp, $nama, $alamat, $nohp);
    // print_r($_POST);
    var_dump($querysimpan);
    if ($querysimpan) {
        $pesansimpan = "Data Tersimpan Ke Database";
        echo "<script>
        setTimeout(function(){document.location.href = './index.php'; }, 1000);
        </script>";
    } else {
        $pesansimpan = "Data Gagal Simpan Ke Database";
        echo "<script>
        setTimeout(function(){document.location.href = './index.php'; }, 1000);
        </script>";
    }
}

if (isset($_GET['hapus'])) {
    //echo "Data dengan ID :".$_GET['hapus']."  Akan di hapus";
    $idwarga = $_GET['hapus'];
    $queryhapus = $Db->delete($idwarga);
    if ($queryhapus) {
        $pesanhapus = "Data Berhasil di hapus";
        echo "<script>
        setTimeout(function(){document.location.href = './index.php'; }, 1000);
        </script>";
    } else {
        echo "<script>
        setTimeout(function(){document.location.href = './index.php'; }, 1000);
        </script>";
        $pesanhapus = "Data Gagal Hapus";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Warga</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid">
        <div class="col-12">
            <div class="py-3">
                <h2>Data Warga</h2>
                <a href="form-daftar.php" class='btn btn-success'>Tambah Data Warga</a>
            </div>
            <?php
            if (isset($_POST['daftar'])) {
            ?>
                <div class="alert alert-success"><?= $pesansimpan; ?></div>
            <?php
            }
            ?>
            <?php
            if (isset($_GET['hapus'])) {
            ?>
                <div class="alert alert-danger"><?= $pesanhapus; ?></div>
            <?php
            }
            ?>
            <table class="table table-bordered" border=1>
                <tr>
                    <td>No</td>
                    <td>No KTP</td>
                    <td>Nama Lengkap</td>
                    <td>Alamat</td>
                    <td>No HP</td>
                    <td>Action</td>
                </tr>
                <?php
                $i = 0;
                foreach ($data_warga as $data) :

                ?>
                    <tr>
                        <td><?= $i += 1; ?></td>
                        <td><?= $data['no_ktp']; ?></td>
                        <td><?= $data['nama_lengkap']; ?></td>
                        <td><?= $data['alamat_lengkap']; ?></td>
                        <td><?= $data['no_hp']; ?></td>
                        <td><a class="btn btn-primary" href="detail-warga.php?id=<?= $data['id']; ?>">detail</a> <a class="btn btn-danger" href="index.php?hapus=<?php echo $data['id']; ?>">Hapus</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>


</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<script>
    var form = document.querySelector('form');

    function handleForm(event) {
        event.preventDefault();
    }
    form.addEventListener('submit', handleForm);
</script>

</html>