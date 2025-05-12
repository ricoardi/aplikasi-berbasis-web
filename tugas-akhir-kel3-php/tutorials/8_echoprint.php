<!DOCTYPE html>
<html>
<body>

<?php
echo "Hello";
//same as:
echo("Hello");
?>
<h5>Display Text</h5>
<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?> 
<h5>Display Variables</h5>
<p>Kutip 2</p>
<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo "<h2>$txt1</h2>";
echo "<p>Study PHP at $txt2</p>";
?>
<p>Kutip 1</p>
<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo '<h2>' . $txt1 . '</h2>';
echo '<p>Study PHP at ' . $txt2 . '</p>';
?>
<h5>The PHP print Statement</h5>
<?php
print "Hello";
//same as:
print("Hello");
?>
<h5>Display Text</h5>
<?php
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?> 
<h5>Display Variables</h5>
<p>Kutip 2</p>
<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

print "<h2>$txt1</h2>";
print "<p>Study PHP at $txt2</p>";
?>
<p>Kutip 1</p>
<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

print '<h2>' . $txt1 . '</h2>';
print '<p>Study PHP at ' . $txt2 . '</p>';
?>
<p>echo bisa mencetak beberapa string sekaligus (dipisah dengan koma). <br>print hanya bisa mencetak satu string.</p>
</body>
</html>
