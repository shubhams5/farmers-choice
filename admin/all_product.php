<?php include "admin/include/connection.php"; ?>
<?php

                                        $id = $_GET['id'];
                                        $s = "SELECT * FROM product where id = $id";
                                        $q = mysqli_query($connect, $s);
                                        $r = mysqli_fetch_array($q,MYSQLI_ASSOC);
                                                                       
                                 ?>


<!DOCTYPE html>
<html lang="zxx">

<head>
        <?php include "include/linker.php" ?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    
            <?php include "include/header.php" ?> 
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->
 
    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Kids</a></li>
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Price</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="33" data-max="98">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                        <a href="#" class="filter-btn">Filter</a>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Color</h4>
                        <div class="fw-color-choose">
                            <div class="cs-item">
                                <input type="radio" id="cs-black">
                                <label class="cs-black" for="cs-black">Black</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-violet">
                                <label class="cs-violet" for="cs-violet">Violet</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-blue">
                                <label class="cs-blue" for="cs-blue">Blue</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-yellow">
                                <label class="cs-yellow" for="cs-yellow">Yellow</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-red">
                                <label class="cs-red" for="cs-red">Red</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-green">
                                <label class="cs-green" for="cs-green">Green</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Size</h4>
                        <div class="fw-size-choose">
                            <div class="sc-item">
                                <input type="radio" id="s-size">
                                <label for="s-size">s</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="m-size">
                                <label for="m-size">m</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="l-size">
                                <label for="l-size">l</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="xs-size">
                                <label for="xs-size">xs</label>
                            </div>
                        </div>
                    </div>
                </div>
                   
                <div class="col-lg-9">
                    <div class="row">
                       
                       
  <?php
                    $cat = $_GET['id']; 
                    
                    $s = "SELECT * FROM product where category_id = '$cat'";
                    $q = mysqli_query($connect, $s);
                    while($r = mysqli_fetch_array($q,MYSQLI_ASSOC))
                    {                               
                    ?>
                    <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                          <a href="product.php?id=<?php echo $r['id']; ?>"> <img style="border-radius: 20px" src="admin/uploads/<?php echo $r['image']; ?>" alt=""> </a>
                          <?php if($r['is_new']==1)
                          {
                          ?>
                          <div class="sale">New</div>
                          <?php }?>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                           <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.php?id=<?php echo $r['id'];?>">View Product</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                        </div>
                        <div class="pi-text">
                             <div class="catagory-name"><?php 

                                    $catid = $r['category_id']; 

                                    $sql1 = "SELECT category FROM category where id = $catid";
                                    $result = mysqli_query($connect, $sql1);
                                    $row1 = mysqli_fetch_array($result, MYSQLI_ASSOC);   
                                    echo $row1['category']; 

                                ?></div>
                               
                                     <a href="product.php?id=<?php echo $r['id']; ?>"> 
                                     <h5><?php echo $r['product_name'];?></h5>
                                </a>
                                <div class="product-price">
                                  Rs.<?php echo $r['product_price'];?>
                                  
                                </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                
                       
                       
                     </div>
                </div>
			</div>
		</div>
           
    
    </section>
    <!-- Product Shop Section End -->

    <!-- Related Products Section End -->
  
    <!-- Related Products Section End -->

    <!-- Partner Logo Section Begin -->
  
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
<?php include ("include/footer.php");?>

</body>

</html>