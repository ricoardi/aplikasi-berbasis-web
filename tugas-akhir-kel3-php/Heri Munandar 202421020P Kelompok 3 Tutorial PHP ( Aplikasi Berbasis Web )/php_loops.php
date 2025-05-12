<?php
// 1. for loop
echo "Contoh for loop:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-$i<br>";
}

// 2. while loop
echo "<br>Contoh while loop:<br>";
$j = 1;
while ($j <= 5) {
    echo "Perulangan ke-$j<br>";
    $j++;  // Jangan lupa untuk meningkatkan nilai $j agar loop berhenti
}

// 3. do...while loop
echo "<br>Contoh do...while loop:<br>";
$k = 1;
do {
    echo "Perulangan ke-$k<br>";
    $k++;  // Meningkatkan nilai $k
} while ($k <= 5);

// 4. foreach loop (untuk array)
echo "<br>Contoh foreach loop dengan array:<br>";
$warna = array("Merah", "Biru", "Hijau", "Kuning");
foreach ($warna as $value) {
    echo "Warna: $value<br>";
}

// 5. foreach loop dengan key dan value
echo "<br>Contoh foreach loop dengan key dan value:<br>";
$age = array("Peter" => 35, "John" => 28, "Jane" => 42);
foreach ($age as $name => $years) {
    echo "$name adalah $years tahun.<br>";
}
?>
