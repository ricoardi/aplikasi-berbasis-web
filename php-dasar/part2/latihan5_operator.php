<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>
<body>
<?php
    $a = 10;
    $b = 3;

    // Operator Aritmatika
    echo "Penjumlahan: $a + $b = " . ($a + $b) . "<br>";
    echo "Pengurangan: $a - $b = " . ($a - $b) . "<br>";
    echo "Perkalian: $a * $b = " . ($a * $b) . "<br>";
    echo "Pembagian: $a / $b = " . ($a / $b) . "<br>";
    echo "Modulus: $a % $b = " . ($a % $b) . "<br><br>";

    // Operator Perbandingan
    echo "Sama dengan: $a == $b = " . var_export($a == $b, true) . "<br>";
    echo "Tidak sama dengan: $a != $b = " . var_export($a != $b, true) . "<br>";
    echo "Lebih besar: $a > $b = " . var_export($a > $b, true) . "<br>";
    echo "Lebih kecil: $a < $b = " . var_export($a < $b, true) . "<br>";
    echo "Lebih besar atau sama dengan: $a >= $b = " . var_export($a >= $b, true) . "<br>";
    echo "Lebih kecil atau sama dengan: $a <= $b = " . var_export($a <= $b, true) . "<br><br>";

    // Operator Logika
    // AND: kedua kondisi harus benar
    if ($a > 5 && $b < 5) {
        echo "AND: Kedua kondisi benar (a > 5 dan b < 5)<br>";
    } else {
        echo "AND: Salah satu atau kedua kondisi salah<br>";
    }

    // OR: salah satu kondisi cukup benar
    if ($a < 5 || $b < 5) {
        echo "OR: Salah satu kondisi benar (a < 5 atau b < 5)<br>";
    } else {
        echo "OR: Kedua kondisi salah<br>";
    }

    // NOT: membalikkan hasil kondisi
    if (!($a < 5)) {
        echo "NOT: a tidak kurang dari 5 (benar karena a = 10)<br>";
    } else {
        echo "NOT: a kurang dari 5 (salah)<br>";
    }
?>

</body>
</html>