<?php
// Membuat Indexed Array
$buah = ["Apel", "Jeruk", "Mangga"];

// Menambahkan lebih dari satu item
array_push($buah, "Pisang", "Semangka");  // Menambahkan Pisang dan Semangka di akhir array

// Menampilkan hasil array setelah penambahan
echo "Array setelah penambahan dengan array_push():\n";
foreach ($buah as $item) {
    echo "$item\n";
}
?>
