<?php
include "./vendor/app/process.php";
$datas = new Proses();
if (isset($_GET['id'])) {
    $id = htmlentities(htmlspecialchars($_GET['id']));
    $data_warga = $datas->get_by_id($id);
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data warga</title>
</head>

<body>
<div class="container">
        <div class="card">
            <div class="card-header">
                <h3><span id="txt">Detail</span> Data Warga</h3> <div class="btn btn-outline-warning" id="edit">Edit</div> <a href="index.php" class="btn">Kembali</a>
            </div>
            <div class="card-body" style="text-align: right;">
                <form method="post" action="index.php">
                    <div class="form-group row">
                        <label for="no_ktp" class="col-sm-2 col-form-label">No ktp :</label>
                        <div class="col-sm-9">
                        <input type="number" name="id" class="form-control" style="display: none;" id="no_ktp" value="<?=  $data_warga['id'];?>" required>
                        <input type="number" name="no_ktp" class="form-control" id="no_ktp" value="<?=  $data_warga['no_ktp'];?>" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama lengkap :</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="<?=  $data_warga['nama_lengkap'];?>" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="alamat_lengkap" class="col-sm-2 col-form-label">Alamat :</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="alamat_lengkap" id="alamat_lengkap" cols="30" rows="10" value="<?= $data_warga['alamat_lengkap'];?>" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="no_hp" class="col-sm-2 col-form-label">No Hp :</label>
                        <div class="col-sm-9">
                            <input type="number" name="no_hp" class="form-control" id="no_hp" value="<?=  $data_warga['no_hp'];?>" required>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="d-grid gap-2">
                            <button class="btn btn-success btn-block" name="update" value="update" type="submit">Ubah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
        $(document).ready(function() {  
            a=0;
            $("#txt").text('Detail');
            $('.btn-block').hide();
            $('input,textarea').prop("disabled", true); 
            $('input,textarea').addClass('bg-white border-white');
    $("#edit").click(function() {
        a++;
        if(a%2==0){
            $("#txt").text('Detail')
            $('input,textarea').prop("disabled", true);
            $('.btn-block').hide();
            $('input,textarea').addClass('bg-white border-white');
            $("#edit").text('Edit')
        }else{
            $("#txt").text('Ubah')
            $('input,textarea').prop("disabled", false);
            $('.btn-block').show();
            $('input,textarea').removeClass('bg-white border-white');
            $("#edit").text('Batal Edit')
        }
  });  
});
    </script>
</body>

</html>