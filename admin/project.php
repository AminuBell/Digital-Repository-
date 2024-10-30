<?php
include("./helpers/checkLogin.php");
include("../dbcon/conn.php");
include("./helpers/upload.php");
checklogin();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Review Logs</title>
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
  <!-- <link rel="shortcut icon" href="images/favicon.png" />-->

  <style>
    .head {
      text-align: center;
    }

    #tittle {
      word-wrap: break-word;
      width: 30ch;
      text-size-adjust: 10px;

    }

    /* /#delete-button, #edit-button, #view-button {
     
      width: 100px;
      height: 50px;
      
    } */
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include("./include/nav.php"); ?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <?php include("./include/sideBar.php"); ?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
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


                <h4 class="card-title">projects</h4>
                <!--table start-->
                <div class="table-responsive">
                  <?php
                  $sql = "SELECT * FROM `project_tbl`";
                  $res = mysqli_query($con, $sql);
                  $num = mysqli_num_rows($res);
                  if ($num <= 0) {
                    echo "No record found";
                  } else {
                  ?>
                    <table class="table table-striped">
                      <!--table head start-->
                      <thead>
                        <tr class="head">
                          <th>
                            S/N
                          </th>
                          <th>
                            PROJECT TITTLE
                          </th>
                          <th>
                            STUDENT NAME
                          </th>
                          <th>
                            YEAR
                          </th>
                          <th>
                            ACTIONS
                          </th>

                        </tr>
                      </thead>

                      <tbody>
                        <?php

                        $dir = "../uploads";
                        $i = 1;
                        while ($data = mysqli_fetch_assoc($res)) {
                        ?>
                          <tr>
                            <td>
                              <?php echo $i; ?>
                            </td>
                            <td>
                              <?php echo $data["title"]; ?>
                            </td>
                            <td>

                              <?php echo $data["student_name"]; ?>
                            </td>
                            <td>
                              <?php echo $data["project_year"]; ?>
                            </td>
                            <td>
                              <a href="./update_upload.php?id=<?php echo $data["id"]; ?>" class="btn btn-primary">edit</a>
                              <a href="<?php echo $dir . "/" . $data["file"];  ?>" target="_blank" class="btn btn-success">view</a>
                              <a href="./helpers/upload.php?del=<?php echo $data["id"];  ?>" class="btn btn-danger">delete</a>

                            </td>


                          </tr>
                        <?php
                          $i++;
                        }



                        ?>

                      </tbody>
                    </table>


                  <?php
                  }
                  ?>


                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="" target="_blank"><ITprrojects class="com"></ITprrojects></a> 2023 </span>
           <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a> templates</span>-->
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

  <!-- End custom js for this page-->
</body>

</html>