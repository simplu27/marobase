<?php 
include_once ('inc/config.php');
$pageId = 'homePage';
$pageTitle = "Home page";
$pageDesc = "Page Description";

include_once (INC.'header.inc.php');
?>

<p>Content for <?php echo $pageTitle;?></p>

<?php include_once (INC.'footer.inc.php');?>
