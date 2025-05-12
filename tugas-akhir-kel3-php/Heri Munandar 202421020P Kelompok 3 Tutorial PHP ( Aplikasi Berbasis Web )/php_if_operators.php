<?php
// Mendeklarasikan variabel
$a = 10;
$b = 5;
$c = 20;
$angka = 8;
$is_raining = true;
$str1 = "PHP ";
$str2 = "is fun!";
$array1 = array("x" => "apple", "y" => "banana");
$array2 = array("x" => "apple", "y" => "banana");
$array3 = array("a" => "orange", "b" => "grape");

// 1. Operator Pembandingan
if ($a == $b) {
    echo "a sama dengan b.<br>";
} else {
    echo "a tidak sama dengan b.<br>";  // Output: a tidak sama dengan b.
}

if ($a > $b) {
    echo "a lebih besar dari b.<br>";  // Output: a lebih besar dari b.
}

if ($a != $c) {
    echo "a tidak sama dengan c.<br>";  // Output: a tidak sama dengan c.
}

// 2. Operator Logika
if ($a > $b && $c > $b) {
    echo "a lebih besar dari b DAN c lebih besar dari b.<br>";  // Output: a lebih besar dari b DAN c lebih besar dari b.
}

if ($a < $b || $a == 10) {
    echo "a lebih kecil dari b ATAU a sama dengan 10.<br>";  // Output: a lebih kecil dari b ATAU a sama dengan 10.
}

if (!($a < $b)) {
    echo "a tidak lebih kecil dari b.<br>";  // Output: a tidak lebih kecil dari b.
}

// 3. Ternary Operator
echo ($angka == 8) ? "Angka adalah 8.<br>" : "Angka bukan 8.<br>";  // Output: Angka adalah 8.
echo ($is_raining) ? "Bawa payung, hujan!<br>" : "Tidak hujan, tidak perlu payung.<br>";  // Output: Bawa payung, hujan!

// 4. Operator String
$str = $str1 . $str2;
echo $str . "<br>";  // Output: PHP is fun!

// 5. Operator Array
if ($array1 == $array2) {
    echo "Array 1 dan Array 2 memiliki nilai yang sama.<br>";  // Output: Array 1 dan Array 2 memiliki nilai yang sama.
} else {
    echo "Array 1 dan Array 2 tidak memiliki nilai yang sama.<br>";
}

if ($array1 !== $array3) {
    echo "Array 1 dan Array 3 tidak sama (termasuk urutan).<br>";  // Output: Array 1 dan Array 3 tidak sama (termasuk urutan).
}

// 6. Operator Penugasan dalam if
$a += 5;  // $a = $a + 5
if ($a == 15) {
    echo "Nilai a adalah 15 setelah penugasan.<br>";  // Output: Nilai a adalah 15 setelah penugasan.
}

$b -= 3;  // $b = $b - 3
if ($b == 2) {
    echo "Nilai b adalah 2 setelah pengurangan.<br>";  // Output: Nilai b adalah 2 setelah pengurangan.
}

?>
