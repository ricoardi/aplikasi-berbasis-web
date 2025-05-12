<?php
// Membuat Indexed Array
$buah = ["Apel", "Jeruk", "Mangga"];

// Menambahkan elemen baru ke array
$buah[] = "Pisang";  // Menambahkan Pisang di akhir array

echo "Array setelah menambahkan Pisang:\n";
foreach ($buah as $item) {
    echo "$item\n";
}
?>
