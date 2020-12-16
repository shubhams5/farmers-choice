<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="images/user.png" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin Panel</div>
            <div class="email">Admin</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="dashboard.php">
                    <i class="material-icons">home</i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">assessment</i>
                    <span>Orders</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="orders.php">Order</a>
                    </li>
                    <li>
                        <a href="order_subscription.php">Order for subscription</a>
                    </li>

                </ul>


            </li>




            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">card_membership</i>
                    <span>Category</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="add_category.php">Add Product Category</a>
                    </li>

                </ul>



            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">contacts</i>
                    <span>Product</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="add_product.php">Add Product</a>
                    </li>
                    <!-- <li>-->
                    <!--    <a href="product_approve.php">Approve Products </a>-->
                    <!--</li>-->

                    <li>
                        <a href="view_product_wholesaler.php">View Product</a>
                    </li>


                </ul>
            </li>







            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">contacts</i>
                    <span>Delivery Boy Register</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="add_boy.php">Add Delivery Boy</a>
                    </li>
                    <li>
                        <a href="view_boy.php">View Delivery Boy</a>
                    </li>


                </ul>

            </li>
            <li>
                <a href="vendor.php" class="menu-toggle">
                    <i class="material-icons">account_circle</i>
                    <span>WholeSellar</span>
                </a>


            </li>

            <li>
                <a href="view_slider.php" class="menu-toggle">
                    <i class="material-icons">assessment</i>
                    <span>Home Page Slider</span>
                </a>
            </li>

            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">settings</i>
                    <span>Utilities</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="size.php">Size/Colors</a>
                    </li>
                    <li>
                        <a href="state.php">State</a>
                    </li>
                    <li>
                        <a href="city.php">City</a>
                    </li>

                </ul>
            </li>



        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">

    </div>
    <!-- #Footer -->
</aside>