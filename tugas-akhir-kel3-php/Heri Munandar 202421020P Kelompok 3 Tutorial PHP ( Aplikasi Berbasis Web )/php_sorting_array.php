<?php
// 1. Mengurutkan Indexed Array
$buah = ["Mangga", "Apel", "Jeruk", "Pisang"];

// Mengurutkan dalam urutan menaik
sort($buah);  
echo "Indexed Array setelah diurutkan dengan sort():\n";
foreach ($buah as $item) {
    echo "$item\n";
}

// Mengurutkan dalam urutan menurun
rsort($buah);
echo "\nIndexed Array setelah diurutkan dengan rsort():\n";
foreach ($buah as $item) {
    echo "$item\n";
}

// 2. Mengurutkan Associative Array
$harga_buah = [
    "Apel" => 15000,
    "Jeruk" => 12000,
    "Mangga" => 10000,
    "Pisang" => 8000
];

// Mengurutkan berdasarkan nilai (harga)
asort($harga_buah);
echo "\nAssociative Array setelah diurutkan dengan asort():\n";
foreach ($harga_buah as $buah => $harga) {
    echo "$buah: Rp$harga\n";
}

// Mengurutkan berdasarkan kunci (nama buah)
ksort($harga_buah);
echo "\nAssociative Array setelah diurutkan dengan ksort():\n";
foreach ($harga_buah as $buah => $harga) {
    echo "$buah: Rp$harga\n";
}

// Mengurutkan berdasarkan nilai dalam urutan menurun
arsort($harga_buah);
echo "\nAssociative Array setelah diurutkan dengan arsort():\n";
foreach ($harga_buah as $buah => $harga) {
    echo "$buah: Rp$harga\n";
}

// Mengurutkan berdasarkan kunci dalam urutan menurun
krsort($harga_buah);
echo "\nAssociative Array setelah diurutkan dengan krsort():\n";
foreach ($harga_buah as $buah => $harga) {
    echo "$buah: Rp$harga\n";
}
?>
