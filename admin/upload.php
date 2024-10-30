<?php
include("./helpers/checkLogin.php");
include("./helpers/upload.php");
checklogin();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Uploads</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include("./include/nav.php"); ?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <?php include("./include/sideBar.php"); ?>

      <!-- partial:../../partials/_sidebar.html -->
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body dashboard-tabs p-0">
                <ul class="nav nav-tabs px-4" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="overview-tab" data-bs-toggle="tab" href="#upload" role="tab" aria-controls="overview" aria-selected="true"> <i class="fa-sharp fa-solid fa-plus"></i>add new project</a>
                  </li>
                  <!--<li class="nav-item">
                    <a class="nav-link" id="sales-tab" data-bs-toggle="tab" href="#logs" role="tab"
                      aria-controls="sales" aria-selected="false">Upload Logs</a>
                  </li>-->

                </ul>
                <div class="tab-content py-0 px-0">
                  <div class="tab-pane fade show active " id="upload" role="tabpanel" aria-labelledby="overview-tab">
                    <div class="d-flex flex-wrap justify-content-xl-between">
                      <div class="d-flex py-3 flex-grow-1  p-3 item">
                        <div class="col-12 grid-margin stretch-card">

                          <div class="card">

                            <div class="card-body">
                              <!-- message -->
                              <?php
                              if ($_SESSION["msg"]) {
                                echo $_SESSION["msg"];
                              }
                              unset($_SESSION["msg"]);

                              ?>
                              <h4 class="card-title">Upload Form</h4>

                              <form class="forms-sample" enctype="multipart/form-data" action="./helpers/upload.php" method="post">
                                <div class="form-group">
                                  <label for="full name"> Project Tittle</label>
                                  <input type="text" class=" form-control" name="title" placeholder="project Tittle">
                                </div>
                                <div class="form-group">
                                  <label for="name">Students' Full name</label>
                                  <input type="text" class="form-control" name="student_name" placeholder="Student name">
                                </div>
                                <div class="form-group">
                                  <label for="name">Supervisor's name</label>
                                  <input type="text" class="form-control" name="supervisor_name" placeholder="supervisors name">
                                </div>
                                <div class="form-group">
                                  <label for="date">Project Year</label>
                                  <input type="date" class="form-control" name="project_year" placeholder="Year">
                                </div>

                                <div class="form-group">
                                  <label>File upload</label>
                                  <input type="file" name="file" class="file-upload-default" accept=".pdf" required>
                                  <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Document" required>
                                    <span class="input-group-append">
                                      <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                  </div>
                                </div>
                                <input type="submit" class="btn btn-primary me-2" value="Upload" name="upload">
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">It-Repository.com </a>20233</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a> templates</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->

  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="./js/file-upload.js"></script>
</body>

</html>