<?php
// Membuat Indexed Array
$buah = array("Apel", "Jeruk", "Mangga", "Pisang");

// Mengupdate elemen pada indexed array
$buah[1] = "Jeruk Bali";  // Mengubah "Jeruk" menjadi "Jeruk Bali"
$buah[3] = "Pisang Mas";  // Mengubah "Pisang" menjadi "Pisang Mas"

// Menampilkan hasil update array
echo "Array setelah update:\n";
foreach ($buah as $item) {
    echo "$item\n";
}
?>
