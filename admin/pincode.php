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
                <h2>Pincode List</h2>
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
                                        <th>SN</th>
                                        <th>Pincode</th>
                                        <th>COD</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Active</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
									$i=1;
									session_start();
									$state=$_SESSION['state'];
  
                                        $sql = "SELECT * FROM pincode where state='$state'";  
                                        $rs_result = mysqli_query($connect, $sql);  


                                        if ($rs_result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $rs_result->fetch_assoc()) {
                                                ?>

                                                <tr>

                                                    <th><?php echo $i; $i++; ?></th>
                                                    <th><?php echo $row['pin']; ?></th>
                                                    <th><?php echo $row['cod']; ?></th>
                                                   
                                                    <th><?php echo $row['city']; ?></th>
                                                    <th><?php echo $row['state']; ?></th>
 <td align="left" valign="top">
                                 <?php
								if($row['active'] == '1')
								{
								?>
                                <a href="active_pin.php?id=<?php echo $row['id'];?>&action=deact" title="Deactivate"><img SRC="active.jpg" alt="Active" height="15" width="15" /></a>
                                <?php
								}
								else
								{
								?>
                                <a href="active_pin.php?id=<?php echo $row['id'];?>&action=act" title="Activate"><img SRC="inactive.jpg" alt="Deactive" height="15" width="15" /></a>
                                <?php 
								}
								
								?>
                                </td>                                                   
                                                    <th><a href="edit_pin.php?id=<?php echo $row['id']; ?>">Edit</a></th>
                                                    <th><a href="delete_pin.php?id=<?php echo $row['id']; ?>">Delete</a></th>
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
