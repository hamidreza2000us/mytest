<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>my Hello World</p>'; ?> 
  <?php
echo gethostname(); // may output e.g,: sandie

// Or, an option that also works before PHP 5.3
echo php_uname('n'); // may output e.g,: sandie
?>
 </body>
</html>
