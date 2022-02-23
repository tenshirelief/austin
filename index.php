<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>

<?php echo '<p>Hello World</p>'; ?> 
<?php echo file_get_contents("inc/header-general.html"); ?> 
<?php echo file_get_contents("inc/body-general.html"); ?> 
<?php echo file_get_contents("inc/footer-general.html"); ?>
<?php echo file_get_contents("inc/copyright.html"); ?> 

 </body>
</html>

