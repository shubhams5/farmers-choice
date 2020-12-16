<?php

include "include/connection.php";
error_reporting(0);

#post details get and transfer to the variable
session_start();

if (isset($_POST['submit_color'])) {

    $color = $_POST['color'];

    $pid = $_POST['pid'];
    $sql = "INSERT into `prod_color` (color,prod_id) values ('$color','$pid')";
    $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
    if ($query) {
        header("Location: add_color_size.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
}

// if (isset($_POST['submit_size'])) {

//     $stock = $_POST['stock'];
//     $label = $_POST['size'];
//     $size = $label*1000;
// $price = $_POST['price'];
//     $pid = $_POST['pid'];
//     $sql = "INSERT into `prod_size` (size,prod_id,stock,price,label) values ('$size','$pid','$stock','$price','$label')";
//     $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
//     if ($query) {
//         header("Location: add_color_size.php");
//     } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($connect);
//     }
// }





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
                <?php
                if ($_GET['id']) {
                    $_SESSION['id'] = $_GET['id'];
                    $_SESSION['prod'] = $_GET['prod'];
                }

                ?>
                <h2>Add Color & Size For <strong><?php echo  $_SESSION['prod']; ?></strong> &nbsp; OR &nbsp;
                    <a href="add_product.php" class="btn btn-danger">Add New Product</a> &nbsp;
                    <a href="view_product_wholesaler.php" class="btn btn-primary">View Wholesaler Product </a>
                    <a href="view_product_retailer.php" class="btn btn-primary">View Retailer Product </a>
                </h2>
            </div>


            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add Color
                            </h2>
                        </div>
                        <div class="body">
                            <form action="" method="post">

                                <label for="product_name">Color</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="hidden" name="pid" id="pid" value="<?php echo $_SESSION['id']; ?>" class="form-control" placeholder="Enter Color">

                                        <select name="color" id="color" class="form-control">
                                            <?php

                                            $s = "SELECT * FROM color";
                                            $q = mysqli_query($connect, $s);
                                            while ($r = mysqli_fetch_assoc($q)) {
                                            ?> <option><?php echo $r['color']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>


                                <br>

                                <button type="submit" name="submit_color" class="btn btn-primary m-t-15 waves-effect">Add Color</button>
                            </form>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <th>Color</th>
                                <th>Remove</th>
                            </tr>
                            <?php

                            $pid = $_SESSION['id'];
                            $s = "SELECT * FROM prod_color where prod_id='$pid'";
                            $q = mysqli_query($connect, $s);
                            while ($r = mysqli_fetch_assoc($q)) {
                            ?>
                                <tr>
                                    <th><?php echo $r['color']; ?></th>
                                    <th><a href="delete_pc.php?id=<?php echo $r['id']; ?>&link=add_color_size.php">Remove</a></th>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add Size
                            </h2>
                        </div>
                        <div class="body">
                            <form action="" id="submit1" method="post">

                                <label for="product_name">Size</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="hidden" name="pid" id="pid" value="<?php echo $_SESSION['id']; ?>" class="form-control" placeholder="Enter Size">
                                        <select name="size" id="size" class="form-control">
                                            <?php

                                            $s = "SELECT * FROM size";
                                            $q = mysqli_query($connect, $s);
                                            while ($r = mysqli_fetch_assoc($q)) {
                                            ?> <option value="<?php echo $r['label']; ?>" ><?php echo $r['size']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <label for="product_name">Stock</label>
                                <input type="text" name="stock" id="stock" value="" class="form-control" placeholder="Enter Selected Product Stock">

                                <br>
                                <label for="product_name">Price</label>
                                <input type="text" name="price" id="price" value="" class="form-control" placeholder="Enter Selected Product price">

                                <br>
                                <button type="submit" name="submit_size" class="btn btn-primary m-t-15 waves-effect">Add Size</button>
                            </form>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <th>Size</th>
                                <th>Remove</th>
                            </tr>
                            <?php
                            $pid = $_SESSION['id'];
                            $s1 = "SELECT * FROM prod_size where prod_id='$pid'";
                            $q1 = mysqli_query($connect, $s1);
                            while ($r1 = mysqli_fetch_assoc($q1)) {
                            ?>
                                <tr>
                                    <th><?php echo $r1['size']; ?></th>
                                    <th><a href="delete_ps.php?id=<?php echo $r1['id']; ?>&link=add_color_size.php">Remove</a></th>
                                </tr>
                            <?php } ?>
                        </table>
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
     <script type="text/javascript">
        $('#submit1').submit(function(e) {
            e.preventDefault();
            var label = $("#size option:selected").val();
            var size = $("#size option:selected").text();
            var stock = $("#stock").val();
            var pid = $("#pid").val();
            var price = $("#price").val();
console.log(label);
console.log(size)
            console.log(stock);
            console.log(size);
            $.ajax({
                url: 'add_color1.php',
                type: 'post',
                data: {
                    size: size,
                    stock: stock,
                    pid: pid,
                    label:label,
                    price:price,
                },
                success: function(response) {

                },
            });

        });
    </script>
</body>

</html>