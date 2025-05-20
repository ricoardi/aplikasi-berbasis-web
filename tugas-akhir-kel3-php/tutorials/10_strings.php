<!DOCTYPE html>
<html>
<body>
<h5>Strings</h5>
<?php
echo "Hello";
print "Hello";
?>
<hr>
<h5>Double or Single Quotes</h5>
<?php
$x = "John";
echo "Hello $x";
?>
<?php
$x = "John";
echo 'Hello $x';
?>
<hr>
<h5>String Length</h5>
<?php
echo strlen("Hello world!");
?> 
<hr>
<h5>Word Count</h5>
<?php
echo str_word_count("Hello world!");
?> 
<hr>
<h5>Search For Text Within a String - Mencari Teks Dalam String</h5>
<?php
echo strpos("Hello world!", "world");
?> 
</body>
</html>
