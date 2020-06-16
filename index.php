<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
  $str1= gethostname();
  $str2= php_uname('n');
  echo '<p>my Hello World,' . $str1 . ' ' . $str2 . '</p>';
  ?> 
  </body>
</html>
