<?php
   include('include/connection.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($connect,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
      die();
   }
?>



<!DOCTYPE html>
<html>

<head>
    <?php include "include/linker.php";?>
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
                <h2>New Product</h2>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add Product
                            </h2>
                        </div>
                        <div class="body">
                            <form action="addProduct.php" method="post" enctype="multipart/form-data">
                                <label for="mcategory">Add Parent Category</label>
                                <div class="form-group">
                                        <select id="mcategory" name="mcategory">
                                        <?php

                                            $s = "SELECT * FROM category";
                                            $q = mysqli_query($connect, $s);
                                            while($r = mysqli_fetch_assoc($q))
                                            {								
                                            ?>
                                            <option value="<?php echo $r['id'];?>"><?php echo $r['category'];?></option>
                                            <?php } ?>
                                        </select>
                                </div>
                               
                                <label for="product_name">Product Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Enter product Name">
                                    </div>
                                </div>
                                <label for="product_desc">Product Descriptation</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" name="product_desc" class="form-control no-resize" placeholder="Please enter some information about product..."></textarea>
                                    </div>
                                </div>
                                <label for="sku_number">Design Number</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="sku_number" id="sku_number" class="form-control" placeholder="Enter Design Number">
                                    </div>
                                </div>
                                
                         
								
                                <br><br>
                            <label for="file">Enter Product Image</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" name="file" id="file" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" name="file1" id="file1" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" name="file2" id="file2" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" name="file3" id="file3" class="form-control">
                                    </div>
                                </div>
                                
                                <input type="checkbox" name="isNew" id="isNew" class="filled-in chk-col-green" value="1">
                                <label for="isNew">is Newest</label>

                                <br>
                                <input type="checkbox" name="isTop" id="isTop" class="filled-in chk-col-green" value="1">
                                <label for="isTop">is Top Selling</label><br>
                                <button type="submit" name="submit" class="btn btn-primary m-t-15 waves-effect">Continue to Add Color</button>
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
