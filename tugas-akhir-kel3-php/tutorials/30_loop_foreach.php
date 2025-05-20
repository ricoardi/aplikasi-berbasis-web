<!DOCTYPE html>
<html>
<body>
<h5>The foreach Loop on Arrays</h5>
<?php  
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $x) {
  echo "$x <br>";
}
?>  
<hr>
<h5>Keys and Values</h5>
<?php
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}
?>
<hr>
<h5>The foreach Loop on Objects</h5>
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
}

$myCar = new Car("red", "Volvo");

foreach ($myCar as $x => $y) {
  echo "$x: $y<br>";
}
?>
<hr>
<h5>The break Statement</h5>
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}
?>
<hr>
<h5>The continue Statement</h5>
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}
?>
<hr>
<h5>Foreach Byref</h5>
<pre>
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors);
?>
</pre>
<hr>
<h5>&</h5>
<pre>
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as &$x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors);
?>
</pre>
<hr>
<h5>Alternative Syntax</h5>
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) :
  echo "$x <br>";
endforeach;
?>


</body>
</html>
