<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Home | E-Shopper</title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/prettyPhoto.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/price-range.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        
        <!-- conditional includes -->
        <?php if(isset($header_name) && $header_name=="login"): ?>
            <link href="<?php echo base_url(); ?>assets/bootstrap-social-gh-pages/bootstrap-social.css" rel="stylesheet">
        <?php endif; ?>
        <!-- conditional includes end-->
        <!--[if lt IE 9]>
        <script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/images/ico/apple-touch-icon-57-precomposed.png">
        
        <!-- custom css -->
        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="#"><i class="fa fa-phone"></i> +880 1710 358518</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> info@jolchapbd.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="index.html"><img src="<?php echo base_url(); ?>assets/images/home/logo.png" height="39px" width="auto" alt="" /></a>
                            </div>
                            
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                   
                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/wishlist"
                                           <?php if(isset($header_name) && $header_name == 'wishlist') echo 'class="active"';?>>
                                            <i class="fa fa-star"></i> Wishlist
                                        </a>
                                    </li>
                                    <li>
                                         <a href="<?php echo base_url(); ?>index.php/checkout"
                                           <?php if(isset($header_name) && $header_name == 'checkout') echo 'class="active"';?>>
                                            <i class="fa fa-crosshairs"></i> Checkout</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/cart"
                                           <?php if(isset($header_name) && $header_name == 'cart') echo 'class="active"';?>>
                                            <i class="fa fa-shopping-cart"></i> Cart
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/myCards"
                                           <?php if(isset($header_name) && $header_name == 'myCards') echo 'class="active"';?>>
                                            <i class="fa fa-shopping-cart"></i> My Cards
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/login"
                                           <?php if(isset($header_name) && $header_name == 'login') echo 'class="active"';?>>
                                            <i class="fa fa-lock"></i> Login
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/home" 
                                        <?php if(isset($header_name) && $header_name=="home") echo 'class="active"'; ?>>
                                            <i class="fa fa-home"></i> Home</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/shop/view"
                                           <?php if(isset($header_name) && $header_name=="shop") echo 'class="active"'; ?>>
                                                <i class="fa fa-shopping-basket"></i> Shop</a>
                                    </li> 
                                    <li>
                                        <a href="#"><i class="fa fa-info"></i> Our Service</a>
                                    </li> 
                                    <li>
                                         <a href="<?php echo base_url(); ?>index.php/contactUs"
                                           <?php if(isset($header_name) && $header_name=="contact_us") echo 'class="active"'; ?>>
                                            <i class="fa fa-question-circle"></i> Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="search_box pull-right">
                                <input type="text" placeholder="Search"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
        </header><!--/header-->
