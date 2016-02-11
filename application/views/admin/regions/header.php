<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JolchapBD Admin Panel| <?php if(isset($content_name)) echo $content_name; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
   
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_assets/plugins/iCheck/all.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_assets/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_assets/dist/css/skins/_all-skins.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    
    <![endif]-->

  </head>
  <body class="hold-transition skin-yellow-light sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>JolchapBD</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>JolchapBD</b>Admin</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>assets/admin_assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $this->session->userdata('name'); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>assets/admin_assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $this->session->userdata('name'); ?>
                      
                    </p>
                  </li>
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>index.php/admin_auth/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            
              <li class="<?php if(isset($content_name) &&$content_name == "Dashboard" ) echo "active"; ?>"><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
              <li class="<?php if(isset($parent_content_name) && $parent_content_name == "Products") echo "active"; ?> treeview">
              <a href="#">
                <i class="fa fa-archive"></i>
                <span>Products</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if(isset($content_name) && $content_name == "New Product") 
                    echo "active"; ?>" >
                    <a href="<?php echo base_url(); ?>index.php/admin/new_product">
                        <i class="fa fa-circle-o"></i> New Product
                    </a>
                </li>
                <li class="<?php if(isset($content_name) && $content_name == "Product List")
                    echo "active"; ?>">
                    <a href="<?php echo base_url(); ?>index.php/admin/product_list">
                        <i class="fa fa-circle-o"></i> Product List
                    </a>
                </li>
                <li class="<?php if(isset($content_name) && $content_name == "Featured Products") 
                    echo "active"; ?>">
                    <a href="<?php echo base_url(); ?>index.php/admin/featured_products">
                        <i class="fa fa-circle-o"></i> Featured Products
                    </a>
                </li>
                <li class="<?php if(isset($content_name) && $content_name == "Recommended Products") 
                    echo "active"; ?>">
                    <a href="<?php echo base_url(); ?>index.php/admin/recommended_products">
                        <i class="fa fa-circle-o"></i> Recommended Products
                    </a>
                </li>
              </ul>
            </li>
            <li class="<?php if(isset($parent_content_name) && $parent_content_name == "Orders") echo "active"; ?> treeview">
              <a href="#">
                <i class="fa fa-cart-plus"></i>
                <span>Orders</span>
                <!--<span class="label label-primary pull-right">4</span>-->
              </a>
              <ul class="treeview-menu">
                <li class="<?php if(isset($content_name) && $content_name == "New Orders") 
                    echo "active"; ?>" >
                        <a href="<?php echo base_url(); ?>index.php/admin_order/new_orders">
                            <i class="fa fa-circle-o"></i>New Orders
                        </a>
                </li>
                <li class="<?php if(isset($content_name) && $content_name == "Processing Orders") 
                    echo "active"; ?>" >
                        <a href="<?php echo base_url(); ?>index.php/admin_order/process_orders">
                            <i class="fa fa-circle-o"></i>Processing Orders
                        </a>
                </li>
                <li class="<?php if(isset($content_name) && $content_name == "Printing Orders") 
                    echo "active"; ?>">
                        <a href="<?php echo base_url(); ?>index.php/admin_order/print_orders">
                            <i class="fa fa-circle-o"></i> Printing
                        </a>
                </li>
                
                <li class="<?php if(isset($content_name) && $content_name == "Shipping Orders") 
                    echo "active"; ?>">
                        <a href="<?php echo base_url(); ?>index.php/admin_order/shipping_orders">
                            <i class="fa fa-circle-o"></i> Shipping
                        </a>
                </li>
                <li class="<?php if(isset($content_name) && $content_name == "Delivered Orders") 
                    echo "active"; ?>">
                        <a href="<?php echo base_url(); ?>index.php/admin_order/delivered_orders">
                            <i class="fa fa-circle-o"></i>Delivered
                        </a>
                </li>
                <li class="<?php if(isset($content_name) && $content_name == "Trash Orders") 
                    echo "active"; ?>">
                        <a href="<?php echo base_url(); ?>index.php/admin_order/trash_orders">
                            <i class="fa fa-circle-o"></i>Trash
                        </a>
                </li>
              </ul>
            </li>
          </ul>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php if(isset($content_name)) echo $content_name; ?>
            <small>Version 1.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> <?php if(isset($parent_content_name)) echo $parent_content_name; ?></a></li>
            <li class="active"><?php if(isset($content_name)) echo $content_name; ?></li>
          </ol>
        </section>