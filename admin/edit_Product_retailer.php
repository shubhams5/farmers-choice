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


if (isset($_POST['submit'])) {

    extract($_POST);
    session_start();
    $mcategory = $_POST['mcategory'];
    $productName = $_POST['product_name'];
    $productDesc = $_POST['product_desc'];
    $sku = $_POST['sku_number'];
    $retailer_price = $_POST['retailer_price'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $isNew = $_POST['isNew'];
    $isTop = $_POST['isTop'];

    $s1 = "SELECT * FROM product where id='$id' ";
    $q1 = mysqli_query($connect, $s1);
    $r1 = mysqli_fetch_assoc($q1);



    $targetdir = "uploads/";
    $filename = basename($_FILES['file']['name']);
    $targetFiledir = $targetdir . $filename;
    $filetype = pathinfo($targetFiledir, PATHINFO_EXTENSION);

    #upload to file to server
    if (move_uploaded_file($_FILES["file"]['tmp_name'], $targetFiledir)) {
        $filename = basename($_FILES['file']['name']);
    } else {
        $filename = $r1['image'];
    }

    $filename1 = basename($_FILES['file1']['name']);
    $targetFiledir1 = $targetdir . $filename1;
    $filetype1 = pathinfo($targetFiledir1, PATHINFO_EXTENSION);

    #upload to file to server
    if (move_uploaded_file($_FILES["file1"]['tmp_name'], $targetFiledir1)) {
        $filename1 = basename($_FILES['file1']['name']);
    } else {
        $filename1 = $r1['image1'];
    }

    $filename2 = basename($_FILES['file2']['name']);
    $targetFiledir2 = $targetdir . $filename2;
    $filetype1 = pathinfo($targetFiledir2, PATHINFO_EXTENSION);

    #upload to file to server
    if (move_uploaded_file($_FILES["file2"]['tmp_name'], $targetFiledir2)) {
        $filename2 = basename($_FILES['file2']['name']);
    } else {
        $filename2 = $r1['image2'];
    }


    $filename3 = basename($_FILES['file3']['name']);
    $targetFiledir3 = $targetdir . $filename3;
    $filetype1 = pathinfo($targetFiledir3, PATHINFO_EXTENSION);

    #upload to file to server
    if (move_uploaded_file($_FILES["file3"]['tmp_name'], $targetFiledir3)) {
        $filename3 = basename($_FILES['file3']['name']);
    } else {
        $filename3 = $r1['image3'];
    }


    $sql = "update product set product_name='$productName', product_description='$productDesc', consumer_price='$price',retailer_price='$retailer_price',sku='$sku', image='$filename',  image1='$filename1', image2='$filename2',  image3='$filename3', is_new='$isNew', is_topselling='$isTop', category_id='$mcategory', scat_id='$subcat' where id='$id'";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        $_SESSION['id'] = $id;
        $_SESSION['prod'] = $product_name;
        header("Location: view_product_retailer.php");
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
                <h2>Update Product</h2>
            </div>

            <?php $id = $_GET['id'];
            $sql = "SELECT * FROM product where id='$id'";
            $qp = mysqli_query($connect, $sql);
            $rp = mysqli_fetch_assoc($qp);
            ?>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Update Product
                            </h2>
                        </div>
                        <div class="body">
                            <form action="#" method="post" enctype="multipart/form-data">
                                <label for="mcategory">Add Parent Category</label>
                                <div class="form-group">
                                    <?php
                                    $cat = $rp['category_id'];
                                    $sc = "SELECT * FROM category where id='$cat'";
                                    $qc = mysqli_query($connect, $sc);
                                    $rc = mysqli_fetch_assoc($qc);

                                    ?>
                                    <select id="mcategory" name="mcategory">
                                        <option value="<?php echo $rc['id']; ?><"><?php echo $rc['category']; ?></option>
                                        <?php

                                        $s = "SELECT * FROM category";
                                        $q = mysqli_query($connect, $s);
                                        while ($r = mysqli_fetch_assoc($q)) {
                                        ?>
                                            <option value="<?php echo $r['id']; ?>"><?php echo $r['category']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <label for="mcategory">Add Sub Category</label>
                                <div class="form-group">
                                    <?php
                                    $scat = $rp['scat_id'];
                                    $sc = "SELECT * FROM subcategory where id='$scat'";
                                    $qc = mysqli_query($connect, $sc);
                                    $rc = mysqli_fetch_assoc($qc);

                                    ?>
                                    <select id="subcat" name="subcat">
                                        <option value="<?php echo $rc['id']; ?><"><?php echo $rc['subcategory']; ?></option>
                                        <?php

                                        $s = "SELECT * FROM subcategory";
                                        $q = mysqli_query($connect, $s);
                                        while ($r = mysqli_fetch_assoc($q)) {
                                        ?>
                                            <option value="<?php echo $r['id']; ?>"><?php echo $r['subcategory']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <label for="product_name">Product Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="hidden" name="id" value="<?php echo $rp['id']; ?>" id="id" class="form-control">
                                        <input type="text" name="product_name" value="<?php echo $rp['product_name']; ?>" id="product_name" class="form-control" placeholder="Enter product Name">
                                    </div>
                                </div>
                                <label for="product_desc">Product Descriptation</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" name="product_desc" class="form-control no-resize" placeholder="Please enter some information about product..."><?php echo $rp['product_description']; ?></textarea>
                                    </div>
                                </div>
                                <label for="sku_number">SKU Number</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="sku_number" value="<?php echo $rp['sku']; ?>" id="sku_number" class="form-control" placeholder="Enter product Name">
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <label for="price">Consumer Price</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="price" id="price" value="<?php echo $rp['consumer_price']; ?>" class="form-control" placeholder="Enter price">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <label for="file">Enter Product Image</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <img src="uploads/<?php echo $rp['image']; ?>" width="100">
                                        <input type="file" name="file" id="file" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <img src="uploads/<?php echo $rp['image1']; ?>" width="100">
                                        <input type="file" name="file1" id="file1" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <img src="uploads/<?php echo $rp['image2']; ?>" width="100">
                                        <input type="file" name="file2" id="file2" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <img src="uploads/<?php echo $rp['image3']; ?>" width="100">
                                        <input type="file" name="file3" id="file3" class="form-control">
                                    </div>
                                </div>

                                <input type="checkbox" name="isNew" id="isNew" class="filled-in chk-col-green" value="1">
                                <label for="isNew">is Newest</label>

                                <br>
                                <input type="checkbox" name="isTop" id="isTop" class="filled-in chk-col-green" value="1">
                                <label for="isTop">is Top Selling</label><br>
                                <button type="submit" name="submit" class="btn btn-primary m-t-15 waves-effect">Update Product</button>
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