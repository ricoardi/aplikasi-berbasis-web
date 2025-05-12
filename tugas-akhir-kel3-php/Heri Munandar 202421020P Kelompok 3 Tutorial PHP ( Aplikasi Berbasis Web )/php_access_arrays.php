<?php
// Indexed Array
$buah = ["Apel", "Jeruk", "Mangga", "Pisang"];

// Mengakses elemen dengan indeks
echo "Buah pertama: " . $buah[0] . "\n";  // Apel
echo "Buah kedua: " . $buah[1] . "\n";    // Jeruk

// Associative Array
$harga_buah = [
    "Apel" => 15000,
    "Jeruk" => 12000,
    "Mangga" => 10000,
    "Pisang" => 8000
];

// Mengakses elemen dengan kunci
echo "Harga Apel: Rp" . $harga_buah["Apel"] . "\n";   // Rp15000
echo "Harga Jeruk: Rp" . $harga_buah["Jeruk"] . "\n";   // Rp12000
?>
