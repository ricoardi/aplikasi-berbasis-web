<!DOCTYPE html>
<html>
<body>
<h5>Creating (Declaring) PHP Variables</h5>
<?php
$x = 5;
$y = "John";

echo $x;
echo "<br>";
echo $y;
?>

<hr>
<h5>Output Variables</h5>
<?php
$txt = "W3Schools.com";
echo "I love $txt!";
?>

<?php
$txt = "W3Schools.com";
echo "I love " . $txt . "!";
?>

<hr>
<h5>SUM 2 variable</h5>
<?php
$x = 5;
$y = 4;
echo $x + $y;
?>
<hr>
<h5>Variable Types</h5>
<?php
$x = 5;      // $x is an integer
$y = "John"; // $y is a string

echo $x;
echo $y;
?>
<hr>
<h5>VarDump</h5>
<?php
$x = 5;
var_dump($x);
?>
<p>----</p>
<?php
var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);
?>
<hr>
<h5>Menetapkan String ke Variable</h5>
<?php
$x = "John";
echo $x;
?>
<hr>
<h5>Menetapkan String Multi Variable</h5>
<?php
$x = $y = $z = "Fruit";

echo $x;
echo $y;
echo $z;

?>
</body>
</html>
