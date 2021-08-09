<?php
include "./Controllers/PostController.php";
$db = new Post();
$blogs = $db->show();

// var_dump($_POST);
if (isset($_POST['archived'])) {
    # code...
    $id = htmlspecialchars(htmlentities($_POST['archived']));
    $arsip = $db->archives($id);
    if ($arsip) {
        $message = "Data Berhasil di arsipkan";
        echo "<script>
        setTimeout(function(){document.location.href = './index.php'; }, 1000);
        </script>";
    } else {
        $message = "Data Gagal Diarsipkan";
        echo "<script>
        setTimeout(function(){document.location.href = './index.php'; }, 1000);
        </script>";
    }
}
if (isset($_POST['unarchived'])) {
    # code...
    $id = htmlspecialchars(htmlentities($_POST['unarchived']));
    $unarsip = $db->unarchives($id);
    if ($unarsip) {
        $message = "Data Berhasil di kembalikan dari arsipkan";
        echo "<script>
        setTimeout(function(){document.location.href = './index.php'; }, 1000);
        </script>";
    } else {
        $message = "Data Gagal di kembalikan dari arsipkan";
        echo "<script>
        setTimeout(function(){document.location.href = './index.php'; }, 1000);
        </script>";
    }
}


if (isset($_POST['addpost'])) {
    # code...
    $title = htmlspecialchars(htmlentities($_POST['title']));
    $content = $_POST['content'];
    $creator = htmlentities(htmlspecialchars($_POST['creator']));
    $query = $db->add_data($title,$content, $creator);
    if ($query) {
        $message = "Data Berhasil di tambahkan ";
        echo "<script>
        setTimeout(function(){document.location.href = './index.php'; }, 1000);
        </script>";
    } else {
        $message = "Data Gagal di tambahkan";
        echo "<script>
        setTimeout(function(){document.location.href = './index.php'; }, 1000);
        </script>";
    }
}
if (isset($_POST['updatepost'])) {
    # code...
    $id = htmlspecialchars($_POST['updatepost']);
    $title = htmlspecialchars(htmlentities($_POST['title']));
    $content = $_POST['content'];
    $creator = htmlentities(htmlspecialchars($_POST['creator']));
    $query = $db->update($title,$content, $creator,$id);
    if ($query) {
        $message = "Data Berhasil di ubah ";
        echo "<script>
        setTimeout(function(){document.location.href = './index.php'; }, 1000);
        </script>";
    } else {
        $message = "Data Gagal di ubah";
        echo "<script>
        setTimeout(function(){document.location.href = './index.php'; }, 1000);
        </script>";
    }
}

if (isset($_GET['hapus'])) {
    # code...
    $idpost = htmlentities(htmlspecialchars($_GET['hapus']));
    $queryhapus = $db->delete($idpost);
    if ($queryhapus) {
        $message = "Data Berhasil di hapus";
        echo "<script>
        setTimeout(function(){document.location.href = './index.php'; }, 1000);
        </script>";
    } else {
        $message = "Data Gagal Hapus";
        echo "<script>
        setTimeout(function(){document.location.href = './index.php'; }, 1000);
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>
    <?php include "./Public/Partials/custom-css.php" ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "./Public/Partials/sidebar.php"; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "./Public/Partials/navbar.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <?php if (isset($_POST['archived'])) : ?>
                        <div class="alert alert-success"><?= $message; ?></div>
                    <?php endif; ?>

                    <?php if (isset($_POST['unarchived'])) : ?>
                        <div class="alert alert-success"><?= $message; ?></div>
                    <?php endif; ?>
                    <?php if (isset($_POST['addpost'])) : ?>
                        <div class="alert alert-success"><?= $message; ?></div>
                    <?php endif; ?>
                    <?php if (isset($_POST['updatepost'])) : ?>
                        <div class="alert alert-success"><?= $message; ?></div>
                    <?php endif; ?>
                    <?php if (isset($_GET['hapus'])) : ?>
                        <div class="alert alert-success"><?= $message; ?></div>
                    <?php endif; ?>
                    <div class="card">
                        <div class="card-body">
                            <table class="table display" id="blog">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Last update</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($blogs as $no => $postingan) : ?>
                                        <tr>
                                            <!-- <?php var_dump($postingan); ?> -->
                                            <td><?= $no += 1; ?></td>
                                            <td><a href="blog.php?id=<?= htmlspecialchars($postingan['id']); ?>" class="text-decoration-none"><?= '"'.htmlspecialchars($postingan['title']).'"'; ?> <i class="fas fa-eye"></i></a></td>
                                            <td><?= $postingan['date_post']; ?></td>
                                            <td><?= ($postingan['archive'] == null) ? '<p class="text-success">Available</p>' : '<p class="text-danger">Archived</p>' ?></td>
                                            <?php if ($postingan['archive'] == null) : ?>
                                                <td>
                                                    <form class="form-inline" method="post" action="">
                                                        <button type="submit" name="archived" value="<?= $postingan['id']; ?>" class="btn mr-3 btn-danger" data-toggle="popover" title="Archive" data-content="Hanya mengarsipkan postingan, tanpa menghapus secara permanent dengan database,Klik untuk arsip">Archive post</button>
                                                        <a href="editpost.php?id=<?= htmlspecialchars($postingan['id']); ?>" class="btn btn-warning">Edit</a>
                                                    </form>
                                                </td>
                                            <?php else : ?>
                                                <td>
                                                    <form class="form-inline" method="post" action="">
                                                        <button type="submit" name="unarchived" value="<?= $postingan['id']; ?>" class="btn mr-3 btn-success" data-toggle="popover" title="Unarchived" data-content="Hanya mengembalikan postingan yang di arsip,Klik untuk batal arsip">Unarchive post</button>
                                                        <a href="editpost.php?id=<?= htmlspecialchars($postingan['id']); ?>" class="btn btn-warning">Edit</a>
                                                        <a class="btn btn-outline-danger ml-3" href="index.php?hapus=<?= htmlspecialchars($postingan['id']); ?>" data-toggle="popover" title="Delete" data-content="Menghapus postingan secara permanent">Delete</a>
                                                    </form>
                                                </td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include "./Public/Partials/footer.php"; ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php include "./Public/Partials/logout-modal.php"; ?>

    <?php
    include "./Public/Partials/custom-script.php";
    ?>
</body>

</html>