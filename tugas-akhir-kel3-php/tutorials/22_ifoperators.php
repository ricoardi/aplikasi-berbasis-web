<!DOCTYPE html>
<html>
<body>
<h5>Comparison Operators</h5>
<?php
$t = 14;

if ($t == 14) {
  echo "Have a good day!";
}
?> 
<hr>
<h5>Logical Operators</h5>
<?php
$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c ) {
  echo "Both conditions are true";
}
?>
<hr>
<?php
$a = 5;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
  echo "$a is a number between 2 and 7";
}
?> 
</body>
</html>
