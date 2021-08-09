<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="./components/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="./components/vendor/fontawesome-free/css/fontawesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <style>
        body{
            background: white;
        }
        *{
            margin: 0;
            padding: 0;
        }
        .fit-img {
            width: 100%;
            height: 20em;
            object-fit: contain;
        }
    </style>
    <!-- Custom styles for this template-->
    <link href="./components/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow pt-2 pb-2 pl-5 pr-5">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler border border-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <br>
        <hr>
        <div class="row mt-5">
            <?php for ($i = 0; $i <= 5; $i++) : ?>
                <div class="col-md-6 col-lg-4 col-12">
                    <!-- Dropdown Card Example -->
                    <div class="card shadow ml-2 mr-2 mt-4 mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-body py-3 d-flex flex-row align-items-center justify-content-between overflow-hidden">
                            <img src="https://www.wandah.org/images/post/tutorial/wandah-org-membuat-game-rpg-html5-js-2.jpg" class="img-responsive fit-img w-100" alt="...">
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            Dropdown menus can be placed in the card header in order to extend the functionality
                            of a basic card. In this dropdown card example, the Font Awesome vertical ellipsis
                            icon in the card header can be clicked on in order to toggle a dropdown menu.
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="./components/vendor/jquery/jquery.min.js"></script>
        <script src="./components/vendor/fontawesome-free//js/all.min.js"></script>
        <script src="./components/vendor/fontawesome-free/attribution.js"></script>
        <script src="./components/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="./components/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="./components/js/sb-admin-2.min.js"></script>
        <script>
  document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
  ':35729/livereload.js?snipver=1"></' + 'script>')
</script>



</body>

</html>