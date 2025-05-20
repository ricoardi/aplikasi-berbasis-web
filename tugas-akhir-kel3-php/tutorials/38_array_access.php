<!DOCTYPE html>
<html>
<body>
<h5>Access Array Item</h5>
<?php  
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[2];
?>  
<hr>
<?php  
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["year"];
?>  
<hr>
<h5>Double or Single Quotes</h5>
<?php  
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["model"];
echo "<br>";
echo $cars['model'];
?> 
<hr>
<h5>Excecute a Function Item</h5>
<?php  
function myFunction() {
  echo "I come from a function!";
}

$myArr = array("Volvo", 15, myFunction());

$myArr[2];
?>  
<hr>
<?php  
function myFunctionx() {
  echo "I come from a function!";
}

$myArr = array("car" => "Volvo", "age" => 15, "message" => myFunctionx());

$myArr["message"];
?>  
<hr>
<h5>Loop Through an Associative Array</h5>
<?php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}
?>
<hr>
<h5>Loop Through an Indexed Array</h5>
<?php
$cars = array("Volvo", "BMW", "Toyota"); 

foreach ($cars as $x) {
  echo "$x <br>";
}
?>
</body>
</html>
