<!DOCTYPE html>
<html>
<body>
<pre>

<?php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);
?>

</pre>
<hr>
<h5>Access Associative Arrays</h5>
<?php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];
?>
<hr>
<h5>Change Value</h5>
<?php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car["year"] = 2024;
var_dump($car);
?>
<hr>
<h5>Loop Through an Associative Array</h5>
<?php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}
?>
</body>
</html>
