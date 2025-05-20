<!DOCTYPE html>
<html>
<body>
<h5>Create Array</h5>
<?php  
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
?>  
<hr>
<?php  
$cars = ["Volvo", "BMW", "Toyota"];
var_dump($cars);
?>  
<hr>
<h5>Multiple Lines</h5>
<?php  
$cars = [
  "Volvo",
  "BMW",
  "Toyota"
];
var_dump($cars);
?>  
<hr>
<h5>Trailing Comma</h5>
<?php  
$cars = [
  "Volvo",
  "BMW",
  "Toyota",
];
var_dump($cars);
?>  
<hr>
<h5>Array Keys</h5>
<?php  
$cars = [
  0 => "Volvo",
  1 => "BMW",
  2 =>"Toyota"
];

var_dump($cars);
?>  

<hr>
<?php  
$myCar = [
  "brand" => "Ford",
  "model" => "Mustang",
  "year" => 1964
];

var_dump($myCar);
?> 
<hr>
<h5>Declare Empty Array</h5>
<?php  
$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

var_dump($cars);
?>  
<hr>
<?php  
$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = 1964;

var_dump($myCar);
?>  

<hr>
<h5>Mixing Array Keys</h5>
<?php  
$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";

var_dump($myArr);
?>  
</body>
</html>
