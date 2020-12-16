<?php

include "include/connection.php";
error_reporting(0);

#post details get and transfer to the variable
session_start();

if (isset($_POST['submit_color'])) {


    $id = $_GET['id'];
    $oid = $_GET['order'];
    $pid = $_POST['status'];



    $sql = "UPDATE `cart` SET `order_status` = '$pid' WHERE id='$id'";
    $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
    if ($query) {
        header("Location: view_invoice.php?id=" . $oid);
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
}



?>






<!DOCTYPE html>
<html>

<head>
    <?php include "include/linker.php"; ?>
</head>

<body class="theme-red">
    <!-- Page Loader -->

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

            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Update Status
                            </h2>
                        </div>
                        <div class="body">
                            <form action="" method="post">

                                <label for="product_name">Status</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <?php
                                        $id = $_GET['id'];
                                        $sql_invoice = "SELECT * FROM cart WHERE id = '$id'";
                                        $sql_invoice_query = mysqli_query($connect, $sql_invoice);
                                        $order_row1 = mysqli_fetch_assoc($sql_invoice_query);
                                        // $now_status = $order_row1['order_status'];
                                        ?>
                                        <select name="status" id="status" class="form-control">
                                            <option value="<?php echo $order_row1['id']; ?><"><?php echo $order_row1['order_status']; ?></option>

                                            <?php
                                            $s = "SELECT * FROM status";
                                            $q = mysqli_query($connect, $s);
                                            while ($r = mysqli_fetch_assoc($q)) {
                                            ?> <option><?php echo $r['status']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>


                                <br>
                                <button type="submit" name="submit_color" class="btn btn-primary m-t-15 waves-effect">Change Status</button>
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