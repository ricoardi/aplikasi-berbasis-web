<!DOCTYPE html>
<html>
<body>
<h5>The PHP while Loop</h5>
<?php  
$i = 1;

while ($i < 6) {
  echo $i;
  $i++;
} 
?>  
<hr>
<h5>The break Statement</h5>
<?php  
$i = 1;

while ($i < 6) {
  if ($i == 3) break;  
  echo $i;
  $i++;
} 
?>  
<hr>
<h5>The continue Statement</h5>
<?php  
$i = 0;

while ($i < 6) {
  $i++;
  if ($i == 3) continue;  
  echo $i;
} 
?>  
<hr>
<h5>Alternative Syntax</h5>
<?php  
$i = 1;

while ($i < 6):
  echo $i;
  $i++;
endwhile;
?>  
<hr>
<h5>Step 10</h5>
<?php  
$i = 0;

while ($i < 100) {
  $i+=10;
  echo "$i<br>";
}
?>  

</body>
</html>
