<?php
// 1. Membuat Multidimensional Array
$buah = [
    ["Apel", 15000],
    ["Jeruk", 12000],
    ["Mangga", 10000],
    ["Pisang", 8000]
];

// Menampilkan data multidimensional array
echo "Daftar buah dan harga:\n";
foreach ($buah as $item) {
    echo "Buah: $item[0], Harga: Rp$item[1]\n";
}

// 2. Mengakses Elemen di Multidimensional Array
echo "\nMengakses elemen kedua (Jeruk) dan harganya:\n";
echo "Buah: " . $buah[1][0] . ", Harga: Rp" . $buah[1][1] . "\n";

// 3. Mengubah Elemen pada Multidimensional Array
$buah[2][0] = "Alpukat";  // Mengubah "Mangga" menjadi "Alpukat"
$buah[2][1] = 18000;      // Mengubah harga Mangga menjadi 18000

echo "\nSetelah mengubah elemen:\n";
foreach ($buah as $item) {
    echo "Buah: $item[0], Harga: Rp$item[1]\n";
}

// 4. Menambahkan Elemen Baru pada Multidimensional Array
$buah[] = ["Semangka", 20000];  // Menambahkan Semangka dengan harga 20000

echo "\nSetelah menambahkan Semangka:\n";
foreach ($buah as $item) {
    echo "Buah: $item[0], Harga: Rp$item[1]\n";
}

// 5. Menghapus Elemen dari Multidimensional Array
unset($buah[1]);  // Menghapus elemen dengan indeks 1 (Jeruk)

echo "\nSetelah menghapus Jeruk:\n";
foreach ($buah as $item) {
    echo "Buah: $item[0], Harga: Rp$item[1]\n";
}

// 6. Menggunakan Array Functions dengan Multidimensional Array
// Mengurutkan berdasarkan harga (kolom kedua)
usort($buah, function ($a, $b) {
    return $a[1] - $b[1];  // Ascending berdasarkan harga
});

echo "\nSetelah mengurutkan berdasarkan harga:\n";
foreach ($buah as $item) {
    echo "Buah: $item[0], Harga: Rp$item[1]\n";
}
?>
