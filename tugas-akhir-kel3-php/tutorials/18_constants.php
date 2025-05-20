<!DOCTYPE html>
<html>
<body>

<?php
// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?> 
<hr>
<h5>PHP const Keyword</h5>
<?php
const MYCAR = "Volvo";

echo MYCAR;
?> 
<hr>
<h5>PHP Constant Arrays</h5>
<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?> 
<hr>
<h5>Constants are Global</h5>
<?php
define("GREETINGS", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETINGS;
}
 
myTest();
?> 


</body>
</html>
