<!DOCTYPE html>
<html>
<body>
<h5>Break in For loop</h5>
<?php  
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
?>
<hr>
<h5>Break in While Loop</h5>
<?php  
$x = 0;
 
while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
} 
?>  
<hr>
<h5>Break in Do While Loop</h5>
<?php  
$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);
?>  
<hr>
<h5>Break in For Each Loop</h5>
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}
?>

</body>
</html>

