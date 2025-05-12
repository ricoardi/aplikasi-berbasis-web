<!DOCTYPE html>
<html>
<body>
<h5>Global Scope</h5>
<?php
$x = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

<h5>Local Scope</h5>
<?php
function myTest2() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest2();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>
<h5>PHP The global Keyword</h5>
<?php
$x = 5;
$y = 10;

function myTest3() {
  global $x, $y;
  $y = $x + $y;
} 

myTest3();  // run function
echo $y; // output the new value for variable $y
?>
<h5>Contoh di atas dapat ditulis ulang seperti ini:</h5>
<?php
$x = 5;
$y = 10;

function myTest4() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 

myTest4();
echo $y;
?>
<h5>Static Keyword</h5>
<?php
function myTest5() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest5();
echo "<br>";
myTest5();
echo "<br>";
myTest5();
?> 
</body>
</html>