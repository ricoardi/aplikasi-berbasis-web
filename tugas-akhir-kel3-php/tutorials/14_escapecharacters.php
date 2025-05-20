
<!DOCTYPE html>
<html>
<body>
<h3>Escape Characters</h3>
<?php
//PHP will raise an error when executing this statement:

$x = "We are the so-called "Vikings" from the north.";
echo $x;
?> 

<hr>
<?php
$x = "We are the so-called \"Vikings\" from the north.";
echo $x;
?> 
<hr>

</body>
</html>
