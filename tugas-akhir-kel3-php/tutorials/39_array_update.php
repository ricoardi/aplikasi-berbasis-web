<!DOCTYPE html>
<html>
<body>
<pre>
<h5>Update Array Item</h5>
<?php  
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
var_dump($cars);
?>  

</pre>
<hr>
<?php  
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$cars["year"] = 2024;
var_dump($cars);
?>  
<hr>
<h5>Update Array Items in a Foreach Loop</h5>
<?php  
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}
unset($x);
var_dump($cars);
?>  
<hr>
<?php  
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}

$x = "ice cream";

var_dump($cars);
?>  

<h5></h5>
</body>
</html>
