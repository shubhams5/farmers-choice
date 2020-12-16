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
                <h2>Add Member</h2>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Basic Information
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form>

                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Middle Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line demo-masked-input">
                                            <input type="text" class="form-control mobile-phone-number" placeholder="Mobile No">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line demo-masked-input">
                                        <input type="text" class="form-control date" placeholder="Birth Date Ex: DD/MM/YYYY">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <div class="demo-radio-button">
                                        <input name="group4" type="radio" id="radio_7" class="radio-col-red" checked="true">
                                        <label for="radio_7">Male</label>
                                        <input name="group4" type="radio" id="radio_7" class="radio-col-red" checked="">
                                        <label for="radio_7">Female</label>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group demo-masked-input">
                                        <div class="form-line">
                                            <input type="text" class="form-control height" placeholder="Height Ex: 5.5">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <select class="form-control show-tick" tabindex="-98">
                                                <option value="">-- Residency Status --</option>
                                                <option value="10">Citizen</option>
                                                <option value="20">Permanent Resident</option>
                                                <option value="30">Student Visa</option>
                                                <option value="40">Temporary Visa</option>
                                                <option value="50">Work Permit</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="header">
                                    <h2>
                                        Family Information
                                    </h2>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="No of Brothers">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="Married Brothers">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <input type="number" class="form-control" placeholder="No of Sister">
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="Married Sister">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Family Location">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <select class="form-control show-tick" tabindex="-98">
                                                <option value="">-- Affluence --</option>
                                                <option value="10">Upper Middle Class</option>
                                                <option value="20">Middle Class</option>
                                                <option value="30">Lower Middle Class</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="header">
                                    <h2>
                                        Background & Cast Information
                                    </h2>
                                </div>
                            </div>


                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <select class="form-control show-tick" tabindex="-98">
                                                <option value="">-- Mother Tongue --</option>
                                                <option value="10">Hindu Sindhi</option>
                                                <option value="20">Hindu Marathi</option>
                                                <option value="30">Hindu Gujarathi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <select class="form-control show-tick" tabindex="-98">
                                                <option value="">-- Community --</option>
                                                <option value="10">Sindhi Bhanusali</option>
                                                <option value="20">Gujar Dode</option>
                                                <option value="30">Maratha</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <select class="form-control show-tick" tabindex="-98">
                                                <option value="">-- Marital Status --</option>
                                                <option value="10">Never Married</option>
                                                <option value="20">Divorce</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <select class="form-control show-tick" tabindex="-98">
                                                <option value="">-- Gothra --</option>
                                                <option value="10">Agasthi</option>
                                                <option value="20">Airan</option>
                                                <option value="30">Alampayana</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <select class="form-control show-tick" tabindex="-98">
                                                <option value="">-- Nakshatra --</option>
                                                <option value="10">AShwini</option>
                                                <option value="20">Bharani</option>
                                                <option value="30">Kritika</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <select class="form-control show-tick" tabindex="-98">
                                                <option value="">-- Manglik --</option>
                                                <option value="10">Yes</option>
                                                <option value="20">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <select class="form-control show-tick" tabindex="-98">
                                                <option value="">-- Complexion --</option>
                                                <option value="10">Very Fair</option>
                                                <option value="20">Fair</option>
                                                <option value="30">Wheatish</option>
                                                <option value="30">Dark</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <select class="form-control show-tick" tabindex="-98">
                                                <option value="">-- Diet --</option>
                                                <option value="10">Veg</option>
                                                <option value="20">Non-Veg</option>
                                                <option value="30">Occasionally Non Veg</option>
                                                <option value="30">Eggetarian</option>
                                                <option value="30">Jain</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <select class="form-control show-tick" tabindex="-98">
                                                <option value="">-- Body Type --</option>
                                                <option value="10">Slim</option>
                                                <option value="20">Athletic</option>
                                                <option value="20">Average</option>
                                                <option value="20">Heavy</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="header">
                                    <h2>
                                        Proffestional & Income Information
                                    </h2>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <select class="form-control show-tick" tabindex="-98">
                                                <option value="">-- Proffestional Studies --</option>
                                                <option value="10">Medical </option>
                                                <option value="20">Fair</option>
                                                <option value="30">Wheatish</option>
                                                <option value="30">Dark</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <select class="form-control show-tick" tabindex="-98">
                                                <option value="">-- Diet --</option>
                                                <option value="10">Veg</option>
                                                <option value="20">Non-Veg</option>
                                                <option value="30">Occasionally Non Veg</option>
                                                <option value="30">Eggetarian</option>
                                                <option value="30">Jain</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <select class="form-control show-tick" tabindex="-98">
                                                <option value="">-- Body Type --</option>
                                                <option value="10">Slim</option>
                                                <option value="20">Athletic</option>
                                                <option value="20">Average</option>
                                                <option value="20">Heavy</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            



                                <br>
                                <button type="button" class="btn btn-primary m-t-15 waves-effect">Register</button>
                            </form>
                        </div>
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
    <script src="plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
    <script src="js/pages/forms/advanced-form-elements.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
