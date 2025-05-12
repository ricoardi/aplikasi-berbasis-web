<?php
// 1. Membuat Array Indeks Numerik
$buah = array("Apel", "Jeruk", "Mangga", "Pisang");

// 2. Menampilkan elemen array menggunakan indeks
echo "Mengakses Array Indexed dengan Indeks Numerik:\n";
echo "Elemen pertama: " . $buah[0] . "\n";  // Apel
echo "Elemen kedua: " . $buah[1] . "\n";    // Jeruk
echo "Elemen ketiga: " . $buah[2] . "\n";   // Mangga
echo "Elemen keempat: " . $buah[3] . "\n";  // Pisang

echo "\n";

// 3. Menambahkan elemen baru ke dalam array
$buah[] = "Semangka";  // Menambahkan "Semangka" di akhir array
echo "Setelah menambahkan Semangka:\n";
foreach ($buah as $item) {
    echo "$item\n";
}

echo "\n";

// 4. Mengubah nilai elemen array
$buah[1] = "Jeruk Bali";  // Mengubah elemen dengan indeks 1 (Jeruk)
echo "Setelah mengubah nilai elemen kedua:\n";
foreach ($buah as $item) {
    echo "$item\n";
}

echo "\n";

// 5. Menggunakan count() untuk mengetahui jumlah elemen dalam array
echo "Jumlah elemen dalam array: " . count($buah) . "\n";

echo "\n";

// 6. Mengakses elemen terakhir menggunakan indeks
$lastElement = $buah[count($buah) - 1];  // Mengakses elemen terakhir
echo "Elemen terakhir: $lastElement\n";

?>
