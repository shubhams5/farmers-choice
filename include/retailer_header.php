<?php
include "admin/include/connection.php";
?>
<header>
    <div class="header-wrapper border-bottom">
        <div class="container space-y--15">
            <div class="row align-items-center">
                <div class="col-auto">
                    <!-- header logo -->
                    <div class="header-logo">
                        <a href="retailer_dashboard.php">
                            <img style="    max-height: 90px;
                        max-width: 40%;
                        overflow: visible;
                        padding-top: 0;
                        padding-bottom: 0;
                        border-radius: 50%;" src="assets/img/logo1.jpeg" class="img-fluid img-responsive img-resize" height="200" alt="">
                        </a>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <!-- header search -->
                    <div class="header-search">
                        <form action="product_search_retailer.php" name="search" method="get">
                            <input type="text" id="search" name="search" placeholder="Search anything">
                            <img src="assets/img/icons/search.svg" class="injectable" alt="">
                        </form>
                    </div>
                </div>
                <div class="col-auto">
                    <!-- header menu trigger -->
                    <button class="header-menu-trigger" id="header-menu-trigger">
                        <img src="assets/img/icons/menu.svg" class="injectable" alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- search keywords -->
    <!-- <div class="search-keyword-area space-xy--15 bg-color--grey2" id="search-keyword-box">
        <div class="search-keyword-header space-mb--20">
            <h4 class="search-keyword-header__title">Hot Keywords</h4>
        </div>
        <ul class="search-keywords">
            <li><a href="search.html">Shoes</a></li>
            <li><a href="search.html">Fashion Bag</a></li>
            <li><a href="search.html">Light Bag</a></li>
            <li><a href="search.html">Parts</a></li>
            <li><a href="search.html">Sport Shoes</a></li>
            <li><a href="search.html">Travel Bag</a></li>
        </ul>
    </div> -->
</header>