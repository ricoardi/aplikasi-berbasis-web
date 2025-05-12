<?php
// 1. Membuat Associative Array
$harga_buah = array(
    "Apel" => 15000,
    "Jeruk" => 12000,
    "Mangga" => 10000,
    "Pisang" => 8000
);

// 2. Mengakses elemen array menggunakan kunci
echo "Harga Apel: Rp" . $harga_buah["Apel"] . "\n";   // Mengakses elemen dengan kunci "Apel"
echo "Harga Jeruk: Rp" . $harga_buah["Jeruk"] . "\n";   // Mengakses elemen dengan kunci "Jeruk"
echo "Harga Mangga: Rp" . $harga_buah["Mangga"] . "\n"; // Mengakses elemen dengan kunci "Mangga"
echo "Harga Pisang: Rp" . $harga_buah["Pisang"] . "\n"; // Mengakses elemen dengan kunci "Pisang"

echo "\n";

// 3. Menambahkan elemen ke dalam Associative Array
$harga_buah["Semangka"] = 18000;  // Menambahkan kunci "Semangka" dengan nilai 18000
echo "Setelah menambahkan Semangka:\n";
foreach ($harga_buah as $buah => $harga) {
    echo "$buah: Rp$harga\n";
}

echo "\n";

// 4. Mengubah nilai elemen dengan kunci tertentu
$harga_buah["Jeruk"] = 13000;  // Mengubah harga Jeruk menjadi 13000
echo "Setelah mengubah harga Jeruk:\n";
foreach ($harga_buah as $buah => $harga) {
    echo "$buah: Rp$harga\n";
}

echo "\n";

// 5. Menghapus elemen dari Associative Array
unset($harga_buah["Mangga"]);  // Menghapus elemen dengan kunci "Mangga"
echo "Setelah menghapus Mangga:\n";
foreach ($harga_buah as $buah => $harga) {
    echo "$buah: Rp$harga\n";
}

echo "\n";

// 6. Menggunakan `count()` untuk mengetahui jumlah elemen
echo "Jumlah elemen dalam array harga_buah: " . count($harga_buah) . "\n";
?>
