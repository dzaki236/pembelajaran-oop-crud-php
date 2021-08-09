<?php
include "./Controllers/PostController.php";
$db = new Post();
$id = htmlspecialchars(htmlentities($_GET['id']));
$blogs = $db->get_by_id($id);
if (!isset($id)) :
?>
    <div class="alert alert-danger" role="alert">
        <strong>Data tidak di temukan,munkin anda salah mencari?</strong>
    </div>
<?php else : ?>
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
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent">
                                <li class="breadcrumb-item"><a href="index.php">Post</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?= $blogs['title']; ?></li>

                            </ol>
                        </nav>
                        <div class="card">
                            <div class="card-body m-4">
                                <h1><?= htmlspecialchars($blogs['title']); ?></h1><sub>Creator : <?= htmlspecialchars($blogs['creator']); ?></sub>
                                <hr>
                                <div><?= $blogs['content']; ?></div>
                                <div>Update : <?= date('j - F, Y', strtotime($blogs['date_post'])); ?></div>
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
<?php endif; ?>