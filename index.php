<?php
 declare(strict_types = 1);
 require "includes/autoloader.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sample Title</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<center>
<?php
 // Sample Content <start>
 $testObj = new Sample;
 echo $testObj->getContent();
 //Sample Content <end>
?>
</center>

</body>
</html>
