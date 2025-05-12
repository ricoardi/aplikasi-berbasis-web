<?php
// Contoh penggunaan break dalam for loop
echo "Contoh for loop:\n";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break; // Keluar dari loop ketika $i sama dengan 5
    }
    echo "Angka: $i\n";
}

echo "\n";

// Contoh penggunaan break dalam while loop
echo "Contoh while loop:\n";
$i = 1;
while ($i <= 10) {
    if ($i == 7) {
        break; // Keluar dari loop ketika $i sama dengan 7
    }
    echo "Angka: $i\n";
    $i++;
}

echo "\n";

// Contoh penggunaan break dalam switch statement
echo "Contoh switch statement:\n";
$warna = "merah";

switch ($warna) {
    case "biru":
        echo "Warna biru.\n";
        break;
    case "merah":
        echo "Warna merah.\n"; // Akan dieksekusi
        break;
    case "hijau":
        echo "Warna hijau.\n";
        break;
    default:
        echo "Warna tidak diketahui.\n";
        break;
}

?>
