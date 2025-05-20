<!DOCTYPE html>
<html>
<body>
<h3>PHP Numbers</h3>
<?php
$a = 5;
$b = 5.34;
$c = "25";

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
?> 

<p>Line breaks were added for better readability.</p>
<hr>
<h5>PHP Integers</h5>
<?php
// Check if the type of a variable is integer   
$x = 5985;
var_dump(is_int($x));

echo "<br>";

// Check again... 
$x = 59.85;
var_dump(is_int($x));
?>  
<hr>
<h5>PHP Floats</h5>
<?php
// Check if the type of a variable is float 
$x = 10.365;
var_dump(is_float($x));
?>  
<hr>
<h5>PHP Infinity</h5>
<?php
// Check if a numeric value is finite or infinite 
$x = 1.9e411;
var_dump($x);
?>  
<hr>
<h5>PHP NaN</h5>
<?php
// Invalid calculation will return a NaN value - ACOS(Arc cosinus)
$x = acos(8);
var_dump($x);
?>  
<hr>
<h5>PHP Numerical Strings</h5>
<?php
// Check if the variable is numeric   
$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));
?>  
<hr>
<h5>PHP Casting Strings and Floats to Integers</h5>
<?php
// Cast float to int 
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
  
echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>  
</body>
</html>
