<!DOCTYPE html>
<html>
<body>
<pre>
<h5>Remove Array Item</h5>
<?php  
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);
var_dump($cars);
?>  

</pre>
<hr>
<h5>Using the unset Function</h5>
<?php  
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]);
var_dump($cars);
?>  
<hr>
<h5>Remove Multiple Array Items</h5>
<?php  
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 2);
var_dump($cars);
?>  
<hr>
<?php  
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[0], $cars[1]);
var_dump($cars);
?>  
<hr>
<h5>Remove Item From an Associative Array</h5>
<?php  
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);
var_dump($cars);
?>  
<hr>
<h5>Using the array_diff Function</h5>
<?php  
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);
var_dump($newarray);
?>  
<hr>
<h5>Remove the Last Item</h5>
<?php  
$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);
var_dump($cars);
?>
<hr>
<h5>Remove the First Item</h5>
<?php  
$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);
var_dump($cars);
?>  

</body>
</html>
