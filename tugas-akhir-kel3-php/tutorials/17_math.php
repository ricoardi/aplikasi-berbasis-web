<!DOCTYPE html>
<html>
<body>
<h5>PHP pi() Function</h5>
<?php
echo(pi());
?>
<hr>
<h5>PHP min() and max() Functions</h5>
<?php
echo(min(0, 150, 30, 20, -8, -200) . "<br>");
echo(max(0, 150, 30, 20, -8, -200));
?>
<hr>
<h5>PHP abs() Function</h5>
<?php
echo(abs(-6.7));
?>
<hr>
<h5>PHP sqrt() Function</h5>
<?php
echo(sqrt(64) . "<br>");
echo(sqrt(0) . "<br>");
echo(sqrt(1) . "<br>");
echo(sqrt(9));
?>
<hr>
<h5>PHP round() Function</h5>
<?php
echo(round(0.60) . "<br>");
echo(round(0.50) . "<br>");
echo(round(0.49) . "<br>");
echo(round(-4.40) . "<br>");
echo(round(-4.60));
?>
<hr>
<h5>Random Numbers</h5>
<?php
echo(rand());
?>
<br>
<?php
echo(rand(10, 100));
?>
</body>
</html>
