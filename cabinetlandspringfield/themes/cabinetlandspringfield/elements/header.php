<?php defined("C5_EXECUTE") or die(_("Access Denied"));
$nh=Loader::helper('navigation');
 ?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Ensures best rendering possible in each supported version of IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- set content to full screen on iphones -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="Andrew Oldfield">


      <!-- styles -->
      <link type="text/css" rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/assets/css/bootstrap.css" />
      <link type="text/css" rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/assets/js/rs-plugin/css/settings.css" />
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
      <link type="text/css" rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/assets/css/style.css" />
      <link type="text/css" rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/assets/css/font-awesome.css" />
      <link type="text/css" rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/assets/css/media.css" />
      <link type="text/css" rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/assets/css/owl.carousel.css" />
      <link type="text/css" rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/assets/css/owl.theme.css" />
      <link type="text/css" rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/assets/css/royalslider.css" />
      <link type="text/css" rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/assets/css/rs-default.css" />
      <!-- /end styles -->

      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
      <![endif]-->

      <?php Loader::element('header_required'); ?>

      <?php $u = new User(); if ($u->isLoggedIn()) {  ?>
        <style type="text/css">
        .bottom { margin-top: 49px; }
        #container { z-index: 1 !important; }
        </style>
      <?php  } ?>
  </head>
  <body>
      <div id="container" class="main">
          <div id="out">
            <div id="home_marker"></div>
            <div id="header">
                <div class="inner">
                    <div class="top">
                        <a href="#" class="scrollup"></a>
                    </div>
                    <div class="bottom">
                        <div class="container">
                            <div class="logo clearfix">
                                <!-- insert header logo here -->
                                <a href="index.html" id="logo"><img class="img-responsive" src="<?php echo $this->getThemePath(); ?>/assets/img/logo.png" alt="" /></a>
                            </div>
                            <div class="contacts_block">
                                <!-- edit header address and phone number here -->
                                <div class="tabLine">4340 N PEORIA RD | SPRINGFIELD, ILLINOIS 62702</div>
                                <div class="phoneNo styler_color"><i class="fa fa-phone"></i> <a href="tel:2175237523">(217) 523-7253</a></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!-- top navigation starts here -->
                        <?php
                            //hard-code nav rather than making it an area - we don't want this editable
                            $navBlock = BlockType::getByHandle('autonav');
                            $navBlock->controller->displayPages = 'top';
                            $navBlock->controller->orderBy = 'display_asc';
                            $navBlock->controller->displaySubPages = 'all';
                            $navBlock->controller->displaySubPageLevels = 'all';
                            $navBlock->render('templates/bootstrap_navbar');
                        ?>
                    </div> <!-- .bottom -->
                </div> <!-- .innter -->
            </div> <!-- .header -->
            <div id="wrapper">