<?php include('header.php');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
  <title><?php echo $title;?></title>
  <link rel="stylesheet" href="reset-fonts-grids.css" type="text/css">
  <link rel="stylesheet" href="base-min.css" type="text/css">
  <link rel="stylesheet" href="book.css" type="text/css">
</head>
<body>
<div id="doc" class="yui-t7">
  <div id="hd" role="banner"><h1><?php echo $heading;?></h1></div>
  <div id="bd" role="main">
    <div class="yui-b" id="sidebar">
    <?php $all=1;include('nav.php');?>
    </div>
    <div id="yui-main"><div class="yui-b">
    </div></div>
  </div>
  <div id="ft" role="contentinfo"><?php include('footer.php');?>
  </div>
</div>
</body>
</html>