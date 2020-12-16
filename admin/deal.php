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
  
    $targetdir = "deal/";
    $filename = basename($_FILES['file']['name']);
    $targetFiledir = $targetdir.$filename;
    $filetype = pathinfo($targetFiledir, PATHINFO_EXTENSION);
     $sd = "SELECT * FROM deal_of_week";
      $qd = mysqli_query($connect, $sd);
      $rd = mysqli_fetch_assoc($qd);	
        #upload to file to server
        if(move_uploaded_file($_FILES["file"]['tmp_name'], $targetFiledir))
        {
			$filename=basename($_FILES['file']['name']);
		}
		else
		{
			$filename=$rd['image'];
		}
	
	
	
	$sql = "update `deal_of_week` set image='$filename'";
            $query = mysqli_query($connect, $sql);
            if($query)
            {
				
                header("Location: deal.php");
				
            }else{
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
                <h2>Deal </h2>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add Deal of Week
                            </h2>
                        </div>
                          <?php
                                           $sd = "SELECT * FROM deal_of_week";
                                            $qd = mysqli_query($connect, $sd);
                                            $rd = mysqli_fetch_assoc($qd);	
                                            ?>
                                       
        <div class="body">
          <form action="#" method="post" enctype="multipart/form-data">
                              
                             
                    <img src="deal/<?php echo $rd['image'];?>" height="250">

                                <div class="col-sm-6">
                                <label for="file">Enter Deal Image</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" name="file" id="file" class="form-control">
                                    </div>
                                </div>

                            </div>
                         
							
								
                                <br>
                               
                                <button type="submit" name="submit" class="btn btn-primary m-t-15 waves-effect">Add Dea of Week</button>
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
