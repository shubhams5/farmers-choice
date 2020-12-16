<?php 

include "include/connection.php";


#post details get and transfer to the variable


if(isset($_POST['submit_color']))
{
	extract($_POST);
	$id=$_POST['id'];
                            $s1 = "SELECT * FROM category where id='$id'";
                            $q1 = mysqli_query($connect, $s1);
							$r1 = mysqli_fetch_assoc($q1);
  $targetdir = "uploads/";
    $filename = basename($_FILES['file']['name']);
    $targetFiledir = $targetdir.$filename;
    $filetype = pathinfo($targetFiledir, PATHINFO_EXTENSION);

        #upload to file to server
        if(move_uploaded_file($_FILES["file"]['tmp_name'], $targetFiledir))
        {
			$filename=basename($_FILES['file']['name']);
		}
		else
		{
			$filename=$r1['icon'];
		}
	
	 $filename1 = basename($_FILES['file1']['name']);
    $targetFiledir1 = $targetdir.$filename1;
    $filetype1 = pathinfo($targetFiledir1, PATHINFO_EXTENSION);

        #upload to file to server
        if(move_uploaded_file($_FILES["file1"]['tmp_name'], $targetFiledir1))
        {
			$filename1=basename($_FILES['file1']['name']);
		}
		else
		{
			$filename1=$r1['side_ban'];
		}
	
            $color = $_POST['category'];
            $sql = "update `category`  set category='$category', icon= '$filename', side_ban= '$filename1' where id='$id'";
            $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
            if($query)
            {
                header("Location: add_category.php");
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
                <h2>Change Category Details</h2>
            </div>


            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Update Category
                            </h2>
                        </div>
                        <?php
							$id=$_GET['id'];
                            $s1 = "SELECT * FROM category where id='$id'";
                            $q1 = mysqli_query($connect, $s1);
							$r1 = mysqli_fetch_assoc($q1);	
							?>
                        <div class="body">
                            <form action="#" method="post" enctype="multipart/form-data">
                               
                                <label for="product_name">Category</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="hidden" name="id" value="<?php echo $r1['id'];?>" id="id" class="form-control" placeholder="Enter Parent category">
                                        <input type="text" name="category" value="<?php echo $r1['category'];?>" id="category" class="form-control" placeholder="Enter Parent category">
                                    </div>
                                </div>
                                 <label for="file">Icon</label>
                                <div class="form-group">
                                    <div class="form-line">
                                       <img src="uploads/<?php echo $r1['icon'];?>" width="70">
                                        <input type="file" name="file" id="file" class="form-control">
                                    </div>
                                </div>
  <label for="file">Side Banner</label>
                                <div class="form-group">
                                    <div class="form-line">
                                             <img src="uploads/<?php echo $r1['side_ban'];?>" width="70">
                                        <input type="file" name="file1" id="file1" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" name="submit_color" class="btn btn-primary m-t-15 waves-effect">Update Category</button>
                            </form>
                        </div>
                       
                    </div>
                </div>
                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Category List
                            </h2>
                        </div>
                         <table class="table table-bordered">
                        	<tr>
                        		<th>Category</th><th>Change</th><th>Remove</th>
                        	</tr>
                        	<?php

                            $s = "SELECT * FROM category";
                            $q = mysqli_query($connect, $s);
							while($r = mysqli_fetch_assoc($q))
							{								
							?>
                        	<tr>
                        		<th><img src="uploads/<?php echo $r['icon'];?>" width="70"> <?php echo $r['category'];?></th>
                        		<th><a href="update_cat.php?id=<?php echo $r['id'];?>">Change<a/></th>
                        		<th><a href="delete_cat.php?id=<?php echo $r['id'];?>">Remove<a/></th>
                        	</tr>
                        	<?php } ?>
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
