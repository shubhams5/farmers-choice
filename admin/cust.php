<?php
include('include/connection.php');
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($connect, "select username from admin where username = '$user_check' ");

$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

$login_session = $row['username'];

if (!isset($_SESSION['login_user'])) {
    header("location:index.php");
    die();
}
?>



<!DOCTYPE html>
<html>

<head>
    <?php include "include/linker.php"; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <!-- Top Bar -->
    <?php include "include/header.php"; ?>
    <!-- #Top Bar -->
    <section>

        <?php include "include/sidebar.php"; ?>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
              <div class="block-header">
                <h2>Customer List &nbsp; <a href="add_vendor.php" class="btn btn-danger">Add New Partner</a> </h2>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">

                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>UserID</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                        <th>Mobile No</th>
                                        <th>Shop Category</th>
                                        <th>Address</th>
                                        <!--<th>View Docs</th>-->
                                        <th>Purchase History</th>
                                        <th>Status</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    $sql = "SELECT * FROM users where user_level = 3";
                                    $rs_result = mysqli_query($connect, $sql);


                                    if ($rs_result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $rs_result->fetch_assoc()) {
                                    ?>

                                            <tr>

                                                <th><?php echo $row['id']; ?></th>
                                                <th><?php echo $row['fname']; ?></th>
                                                <th><?php echo $row['lname']; ?></th>
                                                <th><?php echo $row['email']; ?></th>
                                                <th><?php echo $row['mobileno']; ?></th>
                                                <th><?php echo $row['shop_cat']; ?></th>
                                                <th><?php echo $row['address']; ?></th>
                                                <!--<th><button type="button" class="btn btn-default waves-effect m-r-20 userinfo" data-id="<?php echo $row['id']; ?>">View Docs</button></th>-->
                                                <th><a  class="btn btn-default waves-effect m-r-20" href="purchase_history.php?id=<?php echo $row['id']; ?>">View</a>
                                                </th>
                                                <?php

                                                if ($row['active'] == 0) {


                                                ?>
                                                    <th><a href="active_vendor.php?id=<?php echo $row['id']; ?>">Active</a></th>
                                                <?php } else { ?>
                                                    <th><a href="#">Already Active</a></th>

                                                <?php } ?>
                                                <th><a href="delete_cust.php?id=<?php echo $row['id']; ?>">Delete</a></th>
                                        <?php





                                        }
                                    } else {
                                        echo "0 results";
                                    }


                                        ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

    </section>

    <script>
        $(document).ready(function() {

            $('.userinfo').click(function() {

                var userid = $(this).data('id');

                // AJAX request
                $.ajax({
                    url: 'ajaxfile.php',
                    type: 'post',
                    data: {
                        userid: userid
                    },
                    success: function(response) {
                        // Add response in Modal body
                        $('.modal-body').html(response);
                        // Display Modal
                        $('#largeModal').modal('show');
                    }
                });
            });
        });
    </script>
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>

</body>

</html>