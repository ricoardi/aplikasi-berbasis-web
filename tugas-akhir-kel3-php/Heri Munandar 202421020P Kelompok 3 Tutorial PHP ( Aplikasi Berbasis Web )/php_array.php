<?php
// 1. Array Indeks Numerik
$buah = array("Apel", "Jeruk", "Mangga", "Pisang");
echo "Array Indeks Numerik:\n";
foreach ($buah as $item) {
    echo "$item\n";
}

echo "\n";

// 2. Array Asosiatif
$harga_buah = array(
    "Apel" => 15000,
    "Jeruk" => 12000,
    "Mangga" => 10000,
    "Pisang" => 8000
);
echo "Array Asosiatif:\n";
foreach ($harga_buah as $buah => $harga) {
    echo "$buah: Rp$harga\n";
}

echo "\n";

// 3. Array Multidimensi
$buah_dan_harga = array(
    array("Apel", 15000),
    array("Jeruk", 12000),
    array("Mangga", 10000),
    array("Pisang", 8000)
);
echo "Array Multidimensi:\n";
foreach ($buah_dan_harga as $item) {
    echo "Buah: $item[0], Harga: Rp$item[1]\n";
}

echo "\n";

// 4. Menambahkan Elemen ke Array
$buah[] = "Semangka"; // Menambahkan elemen di akhir array
echo "Array setelah menambahkan Semangka:\n";
foreach ($buah as $item) {
    echo "$item\n";
}

echo "\n";

// 5. Mengakses Elemen Array
echo "Harga Mangga: Rp" . $harga_buah["Mangga"] . "\n";
?>
