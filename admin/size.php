<?php 

include "include/connection.php";


#post details get and transfer to the variable


if(isset($_POST['submit_color']))
{

            $color = $_POST['color'];
            $sql = "INSERT into `color` (color) values ('$color')";
            $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
            if($query)
            {
                header("Location: size.php");
            }
	else{
                echo "Error: " . $sql . "<br>" . mysqli_error($connect);
            }
        }


if(isset($_POST['submit_size']))
{

            $size = $_POST['size'];
            $grams = $_POST['grams'];
            $grams = $grams/1000;
            $sql1 = "INSERT into `size` (size,label) values ('$size','$grams')";
            $query1 = mysqli_query($connect, $sql1);
            if($query1)
            {
                header("Location: size.php");
            }else{
                echo "Error: " . $sql1 . "<br>" . mysqli_error($connect);
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
                <h2>Color & Size  List</h2>
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
                                        <input type="text" name="color" id="color" class="form-control" placeholder="Enter Color">
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

                            $s = "SELECT * FROM color";
                            $q = mysqli_query($connect, $s);
							while($r = mysqli_fetch_assoc($q))
							{								
							?>
                        	<tr>
                        		<th><?php echo $r['color'];?></th>
                        		<th><a href="delete_color.php?id=<?php echo $r['id'];?>">Remove<a/></th>
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
                            <form action="" method="post">
                               
                                <label for="product_name">Size</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="size" id="size" class="form-control" placeholder="Enter Size">
                                    </div>
                                </div>
                                 <label for="product_name">Enter Equivalent Grams(Do not put measuring label) </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="grams" id="grams" class="form-control" placeholder="Ex:- 1kg =1000">
                                    </div>
                                </div>
                               

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
                            $s1 = "SELECT * FROM size";
                            $q1 = mysqli_query($connect, $s1);
							while($r1 = mysqli_fetch_assoc($q1))
							{								
							?>
                        	<tr>
                        		<th><?php echo $r1['size'];?></th>
                           		<th><a href="delete_size.php?id=<?php echo $r1['id'];?>">Remove<a/></th>
     		
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
