<!doctype html>
<html class="no-js" lang="en">



<!-- Mirrored from template.hasthemes.com/ruiz/ruiz/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jan 2022 19:52:07 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php echo $title; ?> - Watch</title>
<meta name="robots" content="noindex, follow" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.ico">

<!-- CSS
============================================ -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
<!-- Icon Font CSS -->
<link rel="stylesheet" href="/assets/css/vendor/font-awesome.min.css">
<link rel="stylesheet" href="/assets/css/vendor/simple-line-icons.css">

<!-- Plugins CSS -->
<link rel="stylesheet" href="/assets/css/plugins/animation.css">
<link rel="stylesheet" href="/assets/css/plugins/slick.css">
<link rel="stylesheet" href="/assets/css/plugins/animation.css">
<link rel="stylesheet" href="/assets/css/plugins/nice-select.css">
<link rel="stylesheet" href="/assets/css/plugins/fancy-box.css">
<link rel="stylesheet" href="/assets/css/plugins/jqueryui.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  


<!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
<!--
<script src="/assets/js/vendor/vendor.min.js"></script>
<script src="/assets/js/plugins/plugins.min.js"></script>
-->

<!-- Main Style CSS (Please use minify version for better website load performance) -->
<link rel="stylesheet" href="/assets/css/style.css">
<!--<link rel="stylesheet" href="/assets/css/style.min.css">-->

</head>

<body>

<div class="main-wrapper">
    
    <!--  Header Start -->
<header class="header">

<!-- haeader Mid Start -->
<div class="haeader-mid-area bg-gren border-bm-1 d-none d-lg-block ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-5">
                <div class="logo-area">
                    <a href="<?php echo '/index.php'?>"><img src="/assets/images/logo/logo.png" alt=""></a>
                </div>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="col-lg-6">
                <div class="search-box-wrapper">
                    <div class="search-box-inner-wrap">
                        <form method="get" action="/product" class="search-box-inner">
                            <div class="search-field-wrap">
                                <input id="filter_name" type="text" name="s" value="<?php echo $this->input->get('s'); ?>" class="search-field" placeholder="Search product...">

                                <div class="search-btn">
                                    <button type="submit"><i class="icon-magnifier"></i></button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>                
        </div>
    </div>
</div>
<!-- haeader Mid End -->

    <!-- haeader bottom Start -->
    <div class="haeader-bottom-area bg-gren header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 d-none d-lg-block">
                    <div class="main-menu-area white_text">
                        <!--  Start Mainmenu Nav-->
                        <nav class="main-navigation text-center">
                            <ul>
                                <li class="active"><a href="<?php echo '/index.php'; ?>">Home</a>
                                </li>

                                <li><a href="<?php echo '/product'; ?>">Shop</a>
                                </li>
                                <li><a href="<?php echo '/about_us';?>">About Us</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>

                <div class="col-5 col-md-6 d-block d-lg-none">
                    <div class="logo"><a href="index.html"><img src="/assets/images/logo/logo.png" alt=""></a></div>
                </div>
                
                
                <div class="col-lg-3 col-md-6 col-7 d-block d-lg-none">
                    <div class="right-blok-box text-white d-flex">
                        <div class="mobile-menu-btn d-block d-lg-none">
                            <div class="off-canvas-btn">
                                <a href="#"><img src="/assets/images/icon/bg-menu.png" alt=""></a>
                            </div>
                        </div>

                    </div>
                </div>
                
                
                
            </div>
        </div>
    </div>
    <!-- haeader bottom End -->
    
    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="fa fa-times"></i>
            </div>

            <div class="off-canvas-inner">

                <div class="search-box-offcanvas">
                    <form method="get" action="/product">
                        <input id="filter_name" type="text" name="s" value="<?php echo $this->input->get('s'); ?>" placeholder="Search product...">
                        <button type="submit" class="search-btn"><i class="icon-magnifier"></i></button>
                    </form>
                </div>

                <!-- mobile menu start -->
                <div class="mobile-navigation">

                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="#">Home</a>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Shop</a>
                            </li>
                            <li class="menu-item-has-children "><a href="#">Blog</a>
                            </li>
                            <li class="menu-item-has-children "><a href="#">Pages</a>
                            </li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->


                <div class="header-top-settings offcanvas-curreny-lang-support">
                    <h5>My Account</h5>
                    <ul class="nav align-items-center">
                        <li class="language">English <i class="fa fa-angle-down"></i>
                            <ul class="dropdown-list">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                            </ul>
                        </li>
                        <li class="curreny-wrap">Currency <i class="fa fa-angle-down"></i>
                            <ul class="dropdown-list curreny-list">
                                <li><a href="#">$ USD</a></li>
                                <li><a href="#"> € EURO</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->
    
</header>
    <!--  Header Start -->
