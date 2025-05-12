<?php
// 1. Operator Aritmatika
$a = 10;
$b = 5;

echo "Penjumlahan: " . ($a + $b) . "<br>"; // 15
echo "Pengurangan: " . ($a - $b) . "<br>"; // 5
echo "Perkalian: " . ($a * $b) . "<br>"; // 50
echo "Pembagian: " . ($a / $b) . "<br>"; // 2
echo "Modulus: " . ($a % $b) . "<br>"; // 0
echo "Pangkat: " . ($a ** $b) . "<br>"; // 100000

// 2. Operator Penugasan
$a = 10;
$a += 5; // $a = $a + 5
echo "Nilai a setelah penambahan: " . $a . "<br>"; // 15

$a -= 3; // $a = $a - 3
echo "Nilai a setelah pengurangan: " . $a . "<br>"; // 12

$a *= 2; // $a = $a * 2
echo "Nilai a setelah perkalian: " . $a . "<br>"; // 24

$a /= 4; // $a = $a / 4
echo "Nilai a setelah pembagian: " . $a . "<br>"; // 6

$a %= 3; // $a = $a % 3
echo "Nilai a setelah modulus: " . $a . "<br>"; // 0

// 3. Operator Pembandingan
$a = 10;
$b = 5;

echo "Apakah a sama dengan b? " . var_export($a == $b, true) . "<br>"; // false
echo "Apakah a lebih besar dari b? " . var_export($a > $b, true) . "<br>"; // true
echo "Apakah a lebih kecil atau sama dengan b? " . var_export($a <= $b, true) . "<br>"; // false

// 4. Operator Logika
$a = true;
$b = false;

echo "a AND b: " . var_export($a && $b, true) . "<br>"; // false
echo "a OR b: " . var_export($a || $b, true) . "<br>"; // true
echo "NOT a: " . var_export(!$a, true) . "<br>"; // false

// 5. Operator Inkrement dan Dekremen
$a = 5;
echo "Nilai a sebelum inkremen: " . $a . "<br>"; // 5
echo "Nilai a setelah inkremen: " . ++$a . "<br>"; // 6

$a = 5;
echo "Nilai a sebelum dekremen: " . $a . "<br>"; // 5
echo "Nilai a setelah dekremen: " . --$a . "<br>"; // 4

// 6. Operator String
$a = "Hello, ";
$b = "World!";
echo $a . $b . "<br>"; // Output: Hello, World!

$a .= $b;
echo $a . "<br>"; // Output: Hello, World!

// 7. Operator Array
$a = array("a" => "apple", "b" => "banana");
$b = array("b" => "banana", "c" => "cherry");

$c = $a + $b; // Penggabungan array
print_r($c); // Output: Array ( [a] => apple [b] => banana [c] => cherry )

echo "Apakah array a dan b memiliki nilai yang sama? " . var_export($a == $b, true) . "<br>"; // true

// 8. Ternary Operator
$a = 10;
$b = 5;
$result = ($a > $b) ? "a lebih besar" : "b lebih besar";
echo $result; // Output: a lebih besar
?>
