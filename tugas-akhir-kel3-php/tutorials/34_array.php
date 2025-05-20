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
<h5>Array Items</h5>
<?php  
// function example:
function myFunction() {
  echo "This text comes from a function";
}

// create array:
$myArr = array("Volvo", 15, ["apples", "bananas"], myFunction());

// calling the function from the array item:
$myArr[3];
?>  
<hr>
<h5>Array Functions</h5>
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>

</body>
</html>
