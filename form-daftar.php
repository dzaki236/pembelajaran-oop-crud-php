<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Data Siswa</h3>
            </div>
            <div class="card-body">
                <form method="post" action="index.php">
                    <div class="form-group row">
                        <label for="no_ktp" class="col-sm-2 col-form-label">No ktp :</label>
                        <div class="col-sm-10">
                            <input type="number" name="no_ktp" class="form-control" id="no_ktp" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama lengkap :</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="alamat_lengkap" class="col-sm-2 col-form-label">Alamat :</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="alamat_lengkap" id="alamat_lengkap" cols="30" rows="10" required></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="no_hp" class="col-sm-2 col-form-label">No Hp :</label>
                        <div class="col-sm-10">
                            <input type="number" name="no_hp" class="form-control" id="no_hp" required>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="d-grid gap-2">
                            <button class="btn btn-success btn-block" name="daftar" value="daftar" type="submit">Daftar </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- <script>
        var form = document.querySelector('form');

        function handleForm(event) {
            event.preventDefault();
        }
        form.addEventListener('submit', handleForm);
    </script> -->
</body>

</html>