<?php
include("../dbcon/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Projects</title>
    <link rel="shortcut icon" href="/admin/images/favicon.png" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <style>
        html {
            margin-top: 50px;
        }

        .row {
            margin-top: 30px;
            margin-bottom: 30px;

        }
    </style>
</head>


<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">
            <div class="logo">
                <h1><a href="index.html">IT - Repository</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <!--start of navbar-->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="../homepage.html">Home</a></li>
                    <!-- <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Contact</a></li>-->
                    <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="../admin/login.php">Admin</a></li>
                            <li><a href="../supervisor/login.php">supervisor</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- end of navbar -->
        </div>
    </header><!-- End Header -->


    <!--search-field-start-->
    <div id="search-bar" class="container">
        <div>
            <form action="" method="post" action="./projects.php">
                <div class="form-group">
                    <input class="form-control-lg" id="search-input" type="search" placeholder="" name="data">
                    <input type="submit" name="search" id="" class=" btn btn-search" value="search">
                    <!-- <button id="search-btn" class=" btn btn-search"> search</button> -->
                </div>
            </form>
        </div>
    </div>
    <!--search - field - end-->
    <!-- start of projects container-->
    <div class="container" id="projects">
        <div class="row">
            <?php
            $dir = "../uploads";

            if (isset($_POST["search"])) {
                $name = $_POST["data"];
                $sql = "SELECT * FROM `project_tbl` WHERE title = '$name'";
                $res = mysqli_query($con, $sql);
                $num = mysqli_num_rows($res);
                if ($num <= 0) {
                    echo "No record found";
                } else {
                    while ($data = mysqli_fetch_assoc($res)) {
                        $dir = "../uploads"
            ?>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 id="project-tittle" class="card-title"> <span><b>Tittle:</b> </span><?php echo $data["title"]; ?></h5>
                                    <p id="author-name" class="card-text"><span><b>Author:</b></span> <?php echo $data["student_name"]; ?></p>
                                    <p id="publishe-year" class="card-text"><span><b>year:</b></span>
                                        <date><?php echo $data["project_year"]; ?></date>
                                    </p>
                                    <a href="<?php echo $dir . "/" . $data["file"];  ?>" target="_blank"" class=" btn btn-primary">View project</a>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                }
            } else {
                $sql = "SELECT * FROM `project_tbl`";
                $res = mysqli_query($con, $sql);
                $num = mysqli_num_rows($res);
                if ($num <= 0) {
                    echo "No record found";
                } else {
                    while ($data = mysqli_fetch_assoc($res)) {
                        $dir = "../uploads"
                    ?>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 id="project-tittle" class="card-title"> <span><b>Tittle:</b> </span><?php echo $data["title"]; ?></h5>
                                    <p id="author-name" class="card-text"><span><b>Author:</b></span> <?php echo $data["student_name"]; ?></p>
                                    <p id="publishe-year" class="card-text"><span><b>year:</b></span>
                                        <date><?php echo $data["project_year"]; ?></date>
                                    </p>
                                    <a href="<?php echo $dir . "/" . $data["file"];  ?>" target="_blank" class=" btn btn-primary">View project</a>
                                </div>
                            </div>
                        </div>

            <?php
                    }
                }
            }

            ?>
           
        </div>
    </div><!-- end of pojects-container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>


</body>

</html>