<!DOCTYPE html>
<html>
<body>
    
<?php
$x = 5;
var_dump($x);
?>

<hr>
<h5>PHP STRING</h5>
<?php 
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>"; 
var_dump($y);
?>
<hr>
<h5>PHP INT</h5>
<?php  
$x = 5985;
var_dump($x);
?> 
<hr>
<h5>PHP FLOAT</h5>
<?php  
$x = 10.365;
var_dump($x);
?>  
<hr>
<h5>PHP Boolean</h5>
<?php 
$x = true;
var_dump($x);
?>
<hr>
<h5>PHP Array</h5>
<?php  
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>  
<hr>
<h5>PHP Object</h5>
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
?>
<hr>
<h5>PHP NULL Value</h5>
<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>
<hr>
<h5>Change Data Type</h5>
<?php
$x = 5;
var_dump($x);

echo "<br>";

$x = "Hello";
var_dump($x);
?> 
<br>
<?php
$x = 5;
$x = (string) $x;
var_dump($x);
?> 
</body>
</html>
