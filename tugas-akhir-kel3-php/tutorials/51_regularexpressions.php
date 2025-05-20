<!DOCTYPE html>
<html>
<body>
<h5>Using preg_match()</h5>
<?php
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); 
?>
<hr>
<h5>Using preg_match_all()</h5>
<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);
?>
<hr>
<h5>Using preg_replace()</h5>
<?php
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str);
?>
<hr>
<h5>Grouping</h5>
<?php
$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str);
?>
</body>
</html>
