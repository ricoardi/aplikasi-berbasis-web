<?php
// Membuat Indexed Array
$buah = ["Apel", "Jeruk", "Mangga", "Pisang"];

// Menghapus elemen pada indeks tertentu
unset($buah[1]);  // Menghapus elemen dengan indeks 1 (Jeruk)

// Menampilkan hasil array setelah penghapusan
echo "Array setelah penghapusan dengan unset():\n";
foreach ($buah as $item) {
    echo "$item\n";
}
?>
