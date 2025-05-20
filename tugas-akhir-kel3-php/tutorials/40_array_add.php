<!DOCTYPE html>
<html>
<body>
<h5>Add Array Item</h5>
<pre>
<?php  
$fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";

//Output the array:
var_dump($fruits);
?>
</pre>
<hr>
<h5>Associative Arrays</h5>
<?php  
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";

//Output the array:
var_dump($cars);
?>
<hr>
<h5>Add Multiple Array Items</h5>
<?php  
$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");

//Output the array:
var_dump($fruits);
?>
<hr>
<h5>Add Multiple Items to Associative Arrays</h5>
<?php  
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];

//Output the array:
var_dump($cars);
?>
</body>
</html>
