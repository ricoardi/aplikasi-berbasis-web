<?php
// Contoh penggunaan continue dalam for loop
echo "Contoh for loop dengan continue:\n";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue; // Lewati iterasi ketika $i sama dengan 5
    }
    echo "Angka: $i\n";
}

echo "\n";

// Contoh penggunaan continue dalam while loop
echo "Contoh while loop dengan continue:\n";
$i = 1;
while ($i <= 10) {
    if ($i == 3) {
        $i++;
        continue; // Lewati iterasi ketika $i sama dengan 3
    }
    echo "Angka: $i\n";
    $i++;
}

echo "\n";

// Contoh penggunaan continue dalam foreach loop
echo "Contoh foreach loop dengan continue:\n";
$buah = array("Apel", "Jeruk", "Mangga", "Pisang", "Semangka");

foreach ($buah as $item) {
    if ($item == "Mangga") {
        continue; // Lewati iterasi ketika item adalah Mangga
    }
    echo "Buah: $item\n";
}
?>
