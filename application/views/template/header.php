<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Teste</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

   <!--Made with love by Mutiullah Samim -->
   
  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!-- Favicons -->
  <link href="<?php echo base_url();?>public/assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>public/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>public/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>public/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url();?>public/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>public/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>public/assets/css/style.css" rel="stylesheet">

  <?php
    if(isset($styles)){
      foreach ($styles as $style_name) {
        $href=base_url()."public/assets/css".$style_name;?>

        <link href="<?php echo $href?>" rel="stylesheet">

<?php
      }
    }
  ?>
  
  <!-- =======================================================
  * Template Name: Rapid - v2.3.0
  * Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-end fixed-top topbar-transparent">
    <div class="container d-flex justify-content-end">
      <div class="social-links">
        <a href="<?php base_url();?>#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="<?php base_url();?>#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="<?php base_url();?>#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="<?php base_url();?>#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a><i class="fa fa-user"></i></a>
        <a href="<?php base_url();?>restrict/logoff"><i class="fa fa-sign-out"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="<?php echo base_url();?>">AniMix</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="main-nav d-none d-lg-block navbar-shink">
        <ul>
          <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
          <li><a href="<?php base_url();?>about">About Us</a></li>
          <li class="drop-down"><a href="<?php base_url();?>#portfolio">Lista</a>
            <ul>
              <li><a href="<?php base_url();?>lista" name="anime">Anime</a></li>
            </ul>
          </li>
          <li><a href="<?php base_url();?>#team">Team</a></li>
          <li class="drop-down"><a href="<?php base_url();?>#">Drop Down</a>
            <ul>
              <li><a href="<?php base_url();?>#">Drop Down 1</a></li>
              <li class="drop-down"><a href="<?php base_url();?>#">Drop Down 2</a>
                <ul>
                  <li><a href="<?php base_url();?>#">Deep Drop Down 1</a></li>
                  <li><a href="<?php base_url();?>#">Deep Drop Down 2</a></li>
                  <li><a href="<?php base_url();?>#">Deep Drop Down 3</a></li>
                  <li><a href="<?php base_url();?>#">Deep Drop Down 4</a></li>
                  <li><a href="<?php base_url();?>#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="<?php base_url();?>#">Drop Down 3</a></li>
              <li><a href="<?php base_url();?>#">Drop Down 4</a></li>
              <li><a href="<?php base_url();?>#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url();?>restrict">Login</a></li>
        </ul>
      </nav><!-- .main-nav-->

    </div>
  </header><!-- End Header -->
