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
                <h2>New Delivery Boy</h2>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add Delivery Boy Information
                            </h2>
                        </div>
                        <div class="body">
                            <form action="addboy.php" method="post" enctype="multipart/form-data">
                               
                                <label for="fname">First Name*</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="fname" name="fname" required>
                                    </div>
                                </div>
                                <label for="lname">Last Name*</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="lname" name="lname" required>
                                    </div>
                                </div>
                                <label for="emailAddress">Email*</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="emailAddress" name="emailAddress" required>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-sm-6">

                                        <label for="pincode">Password</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="password" name="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                        <label for="mobileno">Mobile No*</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="mobileno" name="mobileno" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-6">
                                        <label for="state">Enter State </label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="state" name="state">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="state">Enter city </label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="city" name="city">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-sm-6">
                                        <label for="state">Enter Address </label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="address" name="address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="state">Enter Pincode </label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="pincode" name="pincode">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" name="submit" class="btn btn-primary m-t-15 waves-effect">Add Boy</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </section>

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