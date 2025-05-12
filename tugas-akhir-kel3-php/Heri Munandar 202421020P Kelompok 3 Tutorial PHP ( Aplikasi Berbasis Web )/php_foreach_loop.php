<?php
// Array contoh
$buah = array("Apel", "Jeruk", "Mangga", "Pisang", "Semangka");

// Menggunakan foreach untuk menampilkan elemen array
echo "Daftar buah-buahan:\n";
foreach ($buah as $item) {
    echo "- $item\n";
}

// Array dengan kunci dan nilai
$harga_buah = array(
    "Apel" => 15000,
    "Jeruk" => 12000,
    "Mangga" => 10000,
    "Pisang" => 8000,
    "Semangka" => 18000
);

// Menggunakan foreach untuk menampilkan kunci dan nilai array
echo "\nHarga buah-buahan:\n";
foreach ($harga_buah as $buah => $harga) {
    echo "$buah: Rp$harga\n";
}
?>
