<?php 

include "include/connection.php";
error_reporting(0);

#post details get and transfer to the variable
session_start();

if(isset($_POST['submit_size']))
{

            $state = $_POST['state'];
            $city = $_POST['city'];
            
            $sql = "INSERT into `city` (name,state_id) values ('$city', '$state')";
            $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
            if($query)
            {
                header("Location: city.php");
            }
        else{
                echo "Error: " . $sql . "<br>" . mysqli_error($connect);
            }
 }



    

?>    
<!DOCTYPE html>
<html>

<head>
    <?php include "include/linker.php";?>
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
               
            </div>


            <div class="row clearfix">
                                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add City
                            </h2>
                        </div>
                        <div class="body">
                            <form action="" method="post">

                            <label for="state">Select Sate</label>
                                <div class="form-group">
                                        <select id="state" name="state">
                                        <?php

                                            $s = "SELECT * FROM state";
                                            $q = mysqli_query($connect, $s);
                                            while($r = mysqli_fetch_assoc($q))
                                            {                               
                                            ?>
                                            <option value="<?php echo $r['name'];?>"><?php echo $r['name'];?></option>
                                            <?php } ?>
                                        </select>
                                </div>
                               


                                <label for="city">Enter City</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="city" id="city" class="form-control" placeholder="Enter City">
                                    </div>
                                </div>

                                <br>
                                <button type="submit" name="submit_size" class="btn btn-primary m-t-15 waves-effect">Add City</button>
                            </form>
                        </div>
                         <table class="table table-bordered">
                            <tr>
                                <th>Subcategory</th>
                                <th>Parent ID</th>
                                <th>Remove</th>
                            </tr>
                            <?php
                            $s1 = "SELECT * FROM city";
                            $q1 = mysqli_query($connect, $s1);
                            while($r1 = mysqli_fetch_assoc($q1))
                            {                               
                            ?>
                            <tr>
                                <th><?php echo $r1['name'];?></th>
                                <th><?php echo $r1['state_id'];?></th>
                                <th><a href="delete_city.php?id=<?php echo $r1['id'];?>">Remove<a/></th>
                            </tr>
                            <?php }?>
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
</body>

</html>
