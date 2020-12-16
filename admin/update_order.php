<?php

include "include/connection.php";


#post details get and transfer to the variable


if (isset($_POST['update_qty'])) {
    extract($_POST);
    // print_r($_POST);

    $id = $_GET['id'];
    $orderid = $_GET['orderid'];
    $oid = $_GET['oid'];
    $sql_invoice = "SELECT * FROM oders WHERE orderid = '$orderid'";
    $sql_invoice_query = mysqli_query($connect, $sql_invoice);
    $order_row = mysqli_fetch_assoc($sql_invoice_query);

    $sql_order = $order_row['orderid'];
    $sql_userid = $order_row['userid'];
    $total_invoice = $order_row['total_invoice'];
    // $sql_cart = "SELECT * FROM cart WHERE orderid = '$sql_order' AND userid = '$sql_userid'";
    // $sql_cart_query = mysqli_query($connect, $sql_cart);


    $p_price = $_POST['p_price'];
    $p_qty = $_POST['p_qty'];
    $price_cart = $p_price * $p_qty;



    $sql = " UPDATE `cart` SET `qty` = '$p_qty' where id = '$id'";
    $sql1 = " UPDATE  `oders` SET  `total_invoice`= '$price_cart'  WHERE orderid='$orderid' ";


    $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
    $query1 = mysqli_query($connect, $sql1) or die(mysqli_error($connect));
    if ($query && $query1) {
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
            <div class="block-header">
                <h2>Change Invoice Details</h2>
            </div>


            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Update Invoice
                            </h2>
                        </div>
                        <?php
                        $id = $_GET['id'];
                        $sql_invoice = "SELECT * FROM cart WHERE id = '$id'";
                        $sql_invoice_query = mysqli_query($connect, $sql_invoice);
                        $order_row1 = mysqli_fetch_assoc($sql_invoice_query);




                        ?>

                        <div class="body">
                            <form action="#" method="post">

                                <label for="product_name">Price</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" disabled name="p_price" value="<?php echo $order_row1['product_price']; ?>" id="p_price" class="form-control">
                                    </div>
                                </div>
                                <label for="product_name">Quantity</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="p_qty" value="<?php echo $order_row1['qty']; ?>" id="p_qty" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <input type="hidden" name="id" value="<?php echo $order_row1['id']; ?>" />
                                <button type="submit" name="update_qty" class="btn btn-primary m-t-15 waves-effect">Update quantity</button>
                            </form>
                        </div>

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