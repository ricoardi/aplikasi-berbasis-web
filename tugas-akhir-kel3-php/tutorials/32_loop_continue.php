<!DOCTYPE html>
<html>
<body>
<h5>Continue in For Loops</h5>
<?php  
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
?>
<hr>
<h5>Continue in While Loop</h5>
<?php  
$x = 0;
 
while($x < 10) {
  $x++;
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
} 
?>  
<hr>
<h5>Continue in Do While Loop</h5>
<?php  
$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);
?>  
<hr>
<h5>Continue in For Each Loop</h5>
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}
?>

</body>
</html>

