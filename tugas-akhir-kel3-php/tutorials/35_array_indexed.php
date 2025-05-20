<!DOCTYPE html>
<html>
<body>
<pre>

<?php
$cars = array("Volvo", "BMW", "Toyota"); 
var_dump($cars);
?>

</pre>

<hr>
<h5>Access Indexed Arrays</h5>
Access Indexed Arrays
To access an array item you can refer to the ind
<hr>
<h5>Change Value</h5>
<?php
$cars = array("Volvo", "BMW", "Toyota"); 
$cars[1] = "Ford";
var_dump($cars);
?>
<hr>
<h5>Loop Through an Indexed Array</h5>
<?php
$cars = array("Volvo", "BMW", "Toyota"); 

foreach ($cars as $x) {
  echo "$x <br>";
}
?>
<hr>
<h5>Index Number</h5>
<?php
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

array_push($cars, "Ford");
var_dump($cars);
?>
<hr>
<h5>Array Push</h5>
<pre>
<?php
$cars[5] = "Volvo";
$cars[7] = "BMW";
$cars[14] = "Toyota";

array_push($cars, "Ford");
var_dump($cars);
?>
</pre>
</body>
</html>
