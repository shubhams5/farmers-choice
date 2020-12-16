<?php
include "admin/include/connection.php";

// session_start();

$id = $_SESSION['login_id'];

// $id = $_GET['id'];
$sql5 = "SELECT * FROM users WHERE id = '$id'";
$res5 = mysqli_query($connect, $sql5);

$row5 = mysqli_fetch_assoc($res5);



?>

<div class="offcanvas-menu" id="offcanvas-menu">
    <div class="profile-card text-center">
        <div class="profile-card__image space-mb--10">
            <img src="assets/img/profile1.png" class="img-fluid" style="
    height: 100px;
"  alt="">
        </div>
        <div class="profile-card__content">
            <p class="name"><?php echo $row5['fname']; ?> <span class="id"><?php echo $row5['id']; ?></span></p>
        </div>
    </div>
    <div class="offcanvas-navigation-wrapper space-mt--40">
        <ul class="offcanvas-navigation">
            <?php
            if (isset($_SESSION['login_id'])) {
                echo '<li><span class="icon"><img src="assets/img/icons/profile.svg" class="injectable" alt=""></span><a href="logout.php">Logout</a></li>';
            } else {
                echo '<li><span class="icon"><img src="assets/img/icons/profile.svg" class="injectable" alt=""></span><a href="register_user.php">Franchise</a></li>';
            }
            ?>
            <li><span class="icon"><img src="assets/img/icons/profile-two.svg" class="injectable" alt=""></span><a href="retailer_profile.php">My Profile</a></li>
            <li><span class="icon"><img src="assets/img/icons/product.svg" class="injectable" alt=""></span><a href="retailer_dashboard.php">All products</a></li>
            <li><span class="icon"><img src="assets/img/icons/cart-two.svg" class="injectable" alt=""></span><a href="retailer_order.php">My Order</a></li>
            <li><span class="icon"><img src="assets/img/icons/wishlist.svg" class="injectable" alt=""></span><a href="retailer_add_product.php">Add product</a></li>
            <li><span class="icon"><img src="assets/img/icons/wishlist.svg" class="injectable" alt=""></span><a href="retailer_view_vendor_product.php">view Product</a></li>
            <li><span class="icon"><img src="assets/img/icons/cart-three.svg" class="injectable" alt=""></span><a href="retailer_cart.php">Cart</a></li>
            <li><span class="icon"><img src="assets/img/icons/wishlist.svg" class="injectable" alt=""></span><a href="retailer_wishlist.php">Wishlist</a></li>
            <li><span class="icon"><img src="assets/img/icons/gear-two.svg" class="injectable" alt=""></span><a href="retailer_edit-profile.php">Settings</a></li>
            <!-- <li><span class="icon"><img src="assets/img/icons/profile.svg" class="injectable" alt=""></span><a href="contact.html">Contact Us</a></li> -->
        </ul>
    </div>
</div>