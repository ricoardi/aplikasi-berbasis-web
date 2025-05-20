<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <?php
echo "=== 1. Arithmetic Operators ===\n";
$a = 10;
$b = 3;
echo "a + b = " . ($a + $b) . "\n"; // Addition
echo "a - b = " . ($a - $b) . "\n"; // Subtraction
echo "a * b = " . ($a * $b) . "\n"; // Multiplication
echo "a / b = " . ($a / $b) . "\n"; // Division
echo "a % b = " . ($a % $b) . "\n"; // Modulus
echo "a ** b = " . ($a ** $b) . "\n"; // Exponentiation

echo "\n=== 2. Assignment Operators ===\n";
$x = 5;
echo "x = $x\n";
$x += 2; echo "x += 2 => $x\n";
$x -= 1; echo "x -= 1 => $x\n";
$x *= 3; echo "x *= 3 => $x\n";
$x /= 2; echo "x /= 2 => $x\n";
$x %= 4; echo "x %= 4 => $x\n";

echo "\n=== 3. Comparison Operators ===\n";
$x = 10;
$y = "10";
echo "x == y: "; var_export($x == $y); echo "\n";
echo "x === y: "; var_export($x === $y); echo "\n";
echo "x != y: "; var_export($x != $y); echo "\n";
echo "x <> y: "; var_export($x <> $y); echo "\n";
echo "x !== y: "; var_export($x !== $y); echo "\n";
echo "x > 5: "; var_export($x > 5); echo "\n";
echo "x < 20: "; var_export($x < 20); echo "\n";
echo "x >= 10: "; var_export($x >= 10); echo "\n";
echo "x <= 9: "; var_export($x <= 9); echo "\n";
echo "x <=> y: " . ($x <=> $y) . "\n"; // Spaceship operator

echo "\n=== 4. Increment / Decrement Operators ===\n";
$x = 5;
echo "x = $x\n";
echo "x++ = " . $x++ . "\n"; // Post-increment
echo "Now x = $x\n";
echo "++x = " . ++$x . "\n"; // Pre-increment
echo "x-- = " . $x-- . "\n"; // Post-decrement
echo "Now x = $x\n";
echo "--x = " . --$x . "\n"; // Pre-decrement

echo "\n=== 5. Logical Operators ===\n";
$a = true;
$b = false;
echo "a and b: "; var_export($a and $b); echo "\n";
echo "a or b: "; var_export($a or $b); echo "\n";
echo "a && b: "; var_export($a && $b); echo "\n";
echo "a || b: "; var_export($a || $b); echo "\n";
echo "!a: "; var_export(!$a); echo "\n";

echo "\n=== 6. String Operators ===\n";
$str1 = "Hello";
$str2 = "World";
echo "Concatenation: " . $str1 . " " . $str2 . "\n";
$str1 .= " " . $str2;
echo "After .= : $str1\n";

echo "\n=== 7. Array Operators ===\n";
$arr1 = ["a" => "apple", "b" => "banana"];
$arr2 = ["c" => "cherry", "a" => "apricot"];
print_r($arr1 + $arr2); // Union
var_export($arr1 == $arr2); echo " // Equal\n";
var_export($arr1 === $arr2); echo " // Identical\n";
var_export($arr1 != $arr2); echo " // Not equal\n";
var_export($arr1 <> $arr2); echo " // Not equal (<> operator)\n";
var_export($arr1 !== $arr2); echo " // Not identical\n";

echo "\n=== 8. Conditional Assignment Operators ===\n";
$user = "";
$status = isset($user) ? $user : "anonymous";
echo "Ternary: $status\n";

$user = null;
$status = $user ?? "guest";
echo "Null coalescing: $status\n";
?>

</body>
</html>