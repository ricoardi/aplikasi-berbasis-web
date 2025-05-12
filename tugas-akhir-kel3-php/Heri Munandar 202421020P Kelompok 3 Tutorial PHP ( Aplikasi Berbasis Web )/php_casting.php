<?php
$nilai = "100.25";

// String ke Integer
$intVal = (int) $nilai;     // 100

// String ke Float
$floatVal = (float) $nilai; // 100.25

// Integer ke Boolean
$boolVal = (bool) $intVal;  // true

// Integer ke String
$stringVal = (string) $intVal; // "100"

echo "Integer: $intVal<br>";
echo "Float: $floatVal<br>";
echo "Boolean: " . ($boolVal ? "true" : "false") . "<br>";
echo "String: $stringVal<br>";
?>
