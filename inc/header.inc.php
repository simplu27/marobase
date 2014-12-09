<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo isset($pageTitle) ? $pageTitle: 'Page Title'; ?> | <?php echo $siteName;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- ============	CSS		============ -->
<link rel="stylesheet" media="screen" href="<?php echo $root_css;?>normalize.css">
<link rel="stylesheet" media="screen" href="<?php echo $root_css;?>style.css">

</head>
<body>
<div id="logo"><span><?php echo $siteName;?> </span><?php echo $siteTagline;?></div>


<?php include (INC.'menu.inc.php');?>
<hr>
