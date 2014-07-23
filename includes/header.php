<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="author" content="Aaron McCloud, www.AaronMcCloud.com">
    <meta name="keywords" content="<?php echo $pageKeywords; ?>">
    <link rel="icon" href="/favicon/favicon.ico">

    <title><?php echo $pageTitle; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Carousel styles for this template -->
    <link href="/css/carousel.css" rel="stylesheet">

    <!-- My Custom CSS For This Project -->
    <link href="/css/custom-styles.css" rel="stylesheet">

    <!-- Full-Screen Carousel, Homepage CSS -->
    <?php if($_SERVER['PHP_SELF'] == '/index.php') { ?>
      <link rel="stylesheet" href="/css/jquery.carousel.fullscreen.css" />
    <? } ?>

    <?php if($_SERVER['PHP_SELF'] == '/pages/contact-thanks.php') { ?>
      <meta name="robots" content="noindex">
    <? } ?>

    <!-- Lightbox Gallery CSS -->
    <?php if($_SERVER['PHP_SELF'] == '/pages/art.php') { ?>
      <link href="/css/lightbox.css" rel="stylesheet" />
      <link href="/css/custom-styles-gallery.css" rel="stylesheet" />
    <? } ?>

    <?php if($_SERVER['PHP_SELF'] == '/pages/recent-photos.php') { ?>
      <link href="/css/lightbox.css" rel="stylesheet" />
      <link href="/css/custom-styles-gallery.css" rel="stylesheet" />
    <? } ?>
    
    <?php if($_SERVER['PHP_SELF'] == '/pages/2012-photo-shoot.php') { ?>
      <link href="/css/lightbox.css" rel="stylesheet" />
      <link href="/css/custom-styles-gallery.css" rel="stylesheet" />
    <? } ?>

    <?php if($_SERVER['PHP_SELF'] == '/pages/contact.php') { ?>
      <link href="/css/custom-styles-gallery.css" rel="stylesheet" />
    <? } ?>

  </head>








