<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<h5>echo</h5>

<?php
echo "Hello World!";
?>

<h5>Case Sensitivity</h5>
<p>In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.</p>
<p>ex : ECHO, echo,EcHo</p>
<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

<h5>Case Sensitivity Variable</h5>
<p>ex: $color,$COLOR,$coLOR are treated as three different variables</p>
<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>


</body>
</html>