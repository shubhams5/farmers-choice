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
                <h2>Product List &nbsp; <a href="add_product.php" class="btn btn-danger">Add New Product</a> </h2>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Approve Product</h2>
                            <!-- <h2>
                               	<a href="view_product.php" class="btn btn-danger">All</a>
                                	<?php

                            $s = "SELECT * FROM category";
                            $q = mysqli_query($connect, $s);
							while($r = mysqli_fetch_assoc($q))
							{								
							?>
                        		<a href="view_product1.php?cat=<?php echo $r['id'];?>" class="btn btn-primary"><?php echo $r['category'];?></a>
                        	<?php } ?>
                            </h2> -->
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Consumer Price</th>
                                        <th>Retailer Price</th>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>Vendor Code</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                        $limit = 10;  
                                        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
                                        $start_from = ($page-1) * $limit;  
                                        
                                        $sql = "SELECT * FROM product WHERE `active` = '0' ORDER BY id ASC ";  
                                        $rs_result = mysqli_query($connect, $sql);  


                                        if ($rs_result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $rs_result->fetch_assoc()) {
                                                ?>

                                                <tr>

                                                    <th><?php echo $row['id']; ?></th>
                                                    <th><img src="<?php echo 'uploads/'.$row['image']; ?>" width="100" height="100">
                                                    <th><?php echo $row['product_name']; ?></th>
                                                    <th><?php echo $row['consumer_price']; ?></th>
                                                    <th><?php echo $row['retailer_price']; ?></th>
                                                    <th>	
													<?php
													$pid=$row['id'];
													$s1 = "SELECT * FROM prod_color where prod_id='$pid'";
													$q1 = mysqli_query($connect, $s1);
													while($r1 = mysqli_fetch_assoc($q1))
													{?>								
													    <?php echo $r1['color'];?><a href="delete_pc.php?id=<?php echo $r1['id'];?>&link=view_product.php">(-)</a><br>
												<?php	}?>
                                                  <a href="add_color_size.php?id=<?php echo $pid;?>&prod=<?php echo $row['product_name'];?>">Add</a>
                                                   </th>
                                                     <th>	
													<?php
													$s = "SELECT * FROM prod_size where prod_id='$pid'";
													$q = mysqli_query($connect, $s);
													while($r = mysqli_fetch_assoc($q))
													{	?>							
												  <?php echo $r['size'];?><a href="delete_ps.php?id=<?php echo $r['id'];?>&link=view_product.php">(-)</a><br>
												<?php	}?>
                                                  <a href="add_color_size.php?id=<?php echo $pid;?>&prod=<?php echo $row['product_name'];?>">Add</a>
                                                   </th>
                                                    <th><?php echo $row['vendor_code']; ?></th>
                                                    <th><a href="approvedProduct.php?id=<?php echo $row['id']; ?>">Click to Approve</a></th>
                                                    <th><a href="editProduct.php?id=<?php echo $row['id']; ?>">Edit</a></th>
                                                    <th><a href="deleteProduct_vendor.php?id=<?php echo $row['id']; ?>">Delete</a></th>
                                                <?php





                                            }
                                        } else {
                                            echo "0 results";
                                        }


                                    ?>
                                </tbody>
                            </table>
                            <?php  
                                    $sql = "SELECT COUNT(id) FROM product";  
                                    $rs_result = mysqli_query($connect, $sql);  
                                    $row = $rs_result->fetch_assoc();  
                                    $total_records = @$row[0];  
                                    $total_pages = ceil($total_records / $limit);  
                                    $pagLink = "<div class='pagination'>";  
                                    for ($i=1; $i<=$total_pages; $i++) {  
                                                $pagLink .= "<a href='view_product.php?page=".$i."'>".$i."</a>";  
                                    };  
                                    echo $pagLink . "</div>";  
                                    ?>
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
