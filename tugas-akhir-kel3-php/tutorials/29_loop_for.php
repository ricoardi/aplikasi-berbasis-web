<!DOCTYPE html>
<html>
<body>

<?php  
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?>  
<hr>
<h5>The break Statement</h5>
<?php  
for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) break;
  echo "The number is: $x <br>";
}
?>  
<hr>
<h5>The continue Statement</h5>
<?php  
for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) continue;
  echo "The number is: $x <br>";
}
?>  
<hr>
<h5>Step 10</h5>
<?php  
for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}
?>  
</body>
</html>
