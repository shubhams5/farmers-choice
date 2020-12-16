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

if(isset($_POST['submit']))
{

extract($_POST);
	session_start();
	$id=$_SESSION['id'];
  	$sql = "update pages_description set  name='$title', description='$page_desc' where page_description_id='$id'";
            $query = mysqli_query($connect, $sql);
            if($query)
            {
					$_SESSION['id']=$id;
					$_SESSION['prod']=$product_name;
                header("Location: page1.php");
				
            }else{
                echo "Error: " . $sql . "<br>" . mysqli_error($connect);
            }
        }
    
if($_GET['id'])
{
	$_SESSION['id']=$_GET['id'];
	$id=$_SESSION['id'];
}
else
{
	$id=$_SESSION['id'];
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

<?php

                                   
                                        $s = "SELECT * FROM pages_description where `page_description_id` = '$id'";
                                        $q = mysqli_query($connect, $s);
                                        $r = mysqli_fetch_array($q,MYSQLI_ASSOC);
                                                                       
                                 ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><?php echo $r['name'];?> Details</h2>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Update Page Details
                            </h2>
                        </div>
                        <div class="body">
                            <form action="#" method="post" enctype="multipart/form-data">
								
                                <label for="product_name">Page Title</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="title" value="<?php echo $r['name'];?>" id="title" class="form-control" placeholder="Enter Page title">
                                    </div>
                                </div>
                                <label for="product_desc">Page Descriptation</label>
                                <div class="form-group">
                                    <div class="form-line">
                                      
                                        
                                        <textarea id="editor" class="form-control ckeditor" name="page_desc" style="border:none;"><?php echo $r['description'];?></textarea>

							<?php
														
								$page_desc="";
								include_once '../ckeditor/ckeditor.php';
								$ckeditor = new CKEditor('page_desc');
								$ckeditor->basePath = '../ckeditor/';															 
								$ckeditor->replace("");
							
							?>      
                                    </div>
                                </div>
                            
								
                                <button type="submit" name="submit" class="btn btn-primary m-t-15 waves-effect">Update Page Content</button>
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
