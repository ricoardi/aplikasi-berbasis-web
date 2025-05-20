<!DOCTYPE html>
<html>
<body>
<h5>Upper Case</h5>
<?php
$x = "Hello World!";
echo strtoupper($x);
?> 
<hr>
<h5>Lower Case</h5>
<?php
$x = "Hello World!";
echo strtolower($x);
?> 
<hr>
<h5>Replace String</h5>
<?php
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);
?> 
<hr>
<h5>Reverse a String</h5>
<?php
$x = "Hello World!";
echo strrev($x);
?> 
<hr>
<h5>Remove Whitespace</h5>
<?php
$x = " Hello World! ";
echo trim($x);
?> 

<p>The whitespaces are invisible in plain HTML,<br>
but check out the difference in two input fields:</p>

<?php
echo "<input value='" . $x . "'>";
echo "<br>";
echo "<input value='" . trim($x) . "'>";
?> 
<hr>
<h5>Convert String into Array</h5>
<?php
$x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);
?> 

</body>
</html>
