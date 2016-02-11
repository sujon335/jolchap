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
         

        </nav>
      </header>
     

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      

<section><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-sm-offset-1">
                <?php
                if (isset($status) && $status != NULL):
                    $class_name = "";
                    if ($status == "success")
                        $class_name = "success";
                    else if ($status == "failed")
                        $class_name = "danger";
                    ?>
                    <div class="alert alert-<?php echo $class_name; ?>">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?php echo $message; ?>
                    </div>
                    <?php
                endif;
                ?>
            </div>
            <div class="col-sm-2"></div>

            <div class="col-sm-11 col-sm-offset-1">
                <div class="row">
                <div class="login-form"><!--login form-->
                    <h2>Login to your account</h2>
                    <form action="<?php echo base_url() ?>index.php/admin_auth/login" method="post">
                        <br>
                        <input type="email" name="email" placeholder="Email" />
                        <br>
                        <input type="password" name="password" placeholder="Password" />
                        <br>
                        <input type="hidden" name="admin_login_captcha_id" value="<?php echo $admin_login_captcha_id; ?>" />
                        <input type="text" name="admin_login_captcha" placeholder="Input the text shown below" />
                        <br>
                        <?php echo $admin_login_captcha['image']; ?>
                        <br>
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div><!--/login form-->
                </div>
            </div>
            
            
        </div>
        
    </div>
</section><!--/form-->

