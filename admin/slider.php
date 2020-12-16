<?php 

include "include/connection.php";


#post details get and transfer to the variable


if(isset($_POST['submit']))
{

extract($_POST);
	session_start();
    $targetdir = "slider/";
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
			$filename='';
		}
	
	
	$sql = "INSERT into `slider` (image, title, content, active) values ('$filename', '$title', '$content', '1')";
            $query = mysqli_query($connect, $sql);
            if($query)
            {
					$_SESSION['id']=$id;
					$_SESSION['prod']=$product_name;
                header("Location: view_slider.php");
				
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
                <h2>Home Page Slider</h2>
            </div>


            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add Home Page Slider
                            </h2>
                        </div>
                        <div class="body">
                            <form action="#" method="post" enctype="multipart/form-data">
                               
                                   <label for="file">Select Slider Image</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" name="file" id="file" class="form-control">
                                    </div>
                                </div>
 			 <label for="product_name">Title</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter Slider Title">
                                    </div>
                                </div>
                                <label for="product_desc">Slider Short Descriptation</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="2" name="content" class="form-control no-resize" placeholder="Please enter some information about Slider..."></textarea>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" name="submit" class="btn btn-primary m-t-15 waves-effect">Add Slider Image</button>
                            </form>
                        </div>
                    
                    </div>
                </div>
                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                            </h2>
                        </div>
                   
                       
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
