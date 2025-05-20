<!DOCTYPE html>
<html>
<body>
<h5>Call a Function</h5>
<?php
function myMessage() {
  echo "Hello world!";
}

myMessage();
?> 
<hr>
<h5>PHP Function Arguments</h5>
<?php
function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>
<hr>
<?php
function familyNamex($fnamex, $yearx) {
  echo "$fnamex Refsnes. Born in $yearx <br>";
}

familyNamex("Hege","1975");
familyNamex("Stale","1978");
familyNamex("Kai Jim","1983");
?>
<hr>
<h5>PHP Default Argument Value</h5>
<?php
function setHeight($minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
?>

<hr>
<h5>PHP Functions - Returning values</h5>
<?php
function sum($x, $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);
?>
<hr>
<h5>Passing Arguments by Reference</h5>
<?php
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;
?>
<hr>
<h5>Variable Number of Arguments</h5>
<?php
function sumMyNumbers(...$x) {
  $n = 0;
  $len = count($x);
  for($i = 0; $i < $len; $i++) {
    $n += $x[$i];
  }
  return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;
?>
<hr>
<?php
function myFamily($lastname, ...$firstname) {
  $txt = "";
  $len = count($firstname);
  for($i = 0; $i < $len; $i++) {
    $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
  }
  return $txt;
}

$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;
?>
<!-- <hr>
<h5>PHP is a Loosely Typed Language</h5>
< ?php
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days"); 
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?> -->
<!-- <hr>
<h5>PHP Return Type Declarations</h5>
< ?php declare(strict_types=1); // strict requirement
function addNumbersx(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbersx(1.2, 5.2); 
?>
<hr>
< ?php declare(strict_types=1); // strict requirement
function addNumbersxx(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addNumbersxx(1.2, 5.2); 
?> -->

</body>
</html>
