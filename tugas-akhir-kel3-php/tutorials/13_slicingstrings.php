<!DOCTYPE html>
<html>
<body>
<h5>Slicing</h5>
<?php
$x = "Hello World!";
echo substr($x, 6, 5);
?> 
<hr>
<h5>Slice to the End</h5>
<?php
$x = "Hello World!";
echo substr($x, 6);
?> 
<hr>
<h5>Slice From the End</h5>
<?php
$x = "Hello World!";
echo substr($x, -5, 3);
?> 
<hr>
<h5>Negative Length</h5>
<?php
$x = "Hi, how are you?";
echo substr($x, 5, -3);
?> 

</body>
</html>
