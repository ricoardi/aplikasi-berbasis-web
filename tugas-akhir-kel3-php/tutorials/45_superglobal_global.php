<!DOCTYPE html>
<html>
<body>

<?php  
$x = 75;
  
function myfunction() {
  echo $GLOBALS['x'];
}

myfunction()
?>  

<hr>

<?php  
$x = 75;
  
function myfunctionx() {
  global $x;
  echo $x;
}

myfunctionx()
?>  
<hr>
<h5>Create Global Variables</h5>
<?php  
$x = 100;

echo $GLOBALS["x"];
echo $x;
?>  
<hr>
<?php  
function myfunctionxx() {
  $GLOBALS["x"] = 100;
}

myfunctionxx();

echo $GLOBALS["x"];
echo $x;
?>  
</body>
</html>
