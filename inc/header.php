<?php include 'database/database.php'; ?>
<?php include 'function/function.php'; ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php getTitle()?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-aller.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="http://localhost/black/">black<span>pod</span> <small>Company Slogan Goes Here</small></a></h1>
      </div>
      <div class="menu_nav">
        <ul>
          <li class="<?php active('index.php')   ?>"><a href="http://localhost/black/index.php"><span>Home Page</span></a></li>
          <li class="<?php active('support.php') ?>"><a href="http://localhost/black/support.php"><span>Support</span></a></li>
          <li class="<?php active('about.php')   ?>"><a href="http://localhost/black/about.php"><span>About Us</span></a></li>
          <li class="<?php active('blog.php') ?>"><a href="http://localhost/black/blog.php"><span>Blog</span></a></li>
          <li class="<?php active('contact.php') ?>"><a href="http://localhost/black/contact.php"><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
      <?php include'slider.php'; ?>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">






