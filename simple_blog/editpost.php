<?php if(!isset($_GET['id'])):?>
<h1>Data tak di temukan ,Anda salah mencari mungkin?</h1>
    <?php else: ?>
<?php include "./Controllers/PostController.php"; $blogs = new Post(); $id=htmlentities(htmlspecialchars($_GET['id'])); $postingan = $blogs->get_by_id($id);?>
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
                        <h1 class="h3 mb-0 text-gray-800">Tambah Postingan Baru</h1>

                    </div>

                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="index.php">
                                <!-- <?php var_dump($postingan);?> -->
                                <div class="form-group">
                                    <label for="title">Title / Judul Postingan</label>
                                    <input type="text" name="title" class="form-control" id="title" required value="<?= $postingan['title'];?>">
                                    <small id="emailHelp" class="form-text text-muted">Judul Untuk Postingannya</small>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="creator">Creator</label>
                                    <input type="text" class="form-control" id="creator" required='required' value="<?= $postingan['creator'];?>">
                                    <small id="emailHelp" class="form-text text-muted">Siapa Untuk Postingannya</small>
                                </div>
                                <hr>
                                <div class="form-group">
                                <textarea id="summernote" name="content" required><?= $postingan['content'];?></textarea>
                                </div>
                                <button type="submit" name="updatepost" value="<?= $postingan['id'];?>" class="btn btn-primary">Submit</button>
                            </form>
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

<?php endif;?>