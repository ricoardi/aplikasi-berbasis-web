<?php
// 1. Mendefinisikan Konstanta
define('PI', 3.14159);
define('SITE_NAME', 'My Awesome Website');
define('MAX_USERS', 100);
define('TAX_RATE', 0.15);

// 2. Menampilkan Nilai Konstanta
echo "Nilai PI adalah: " . PI . "<br>"; // Output: Nilai PI adalah: 3.14159
echo "Nama situs ini: " . SITE_NAME . "<br>"; // Output: Nama situs ini: My Awesome Website
echo "Jumlah maksimal pengguna: " . MAX_USERS . "<br>"; // Output: Jumlah maksimal pengguna: 100
echo "Tingkat pajak: " . TAX_RATE * 100 . "%<br>"; // Output: Tingkat pajak: 15%

// 3. Menggunakan Konstanta dalam Operasi Matematika
$radius = 10;
$area = PI * pow($radius, 2);
echo "Luas lingkaran dengan radius $radius adalah: " . $area . "<br>"; // Output: Luas lingkaran dengan radius 10 adalah: 314.159

// 4. Memeriksa apakah Konstanta sudah didefinisikan
if (defined('SITE_NAME')) {
    echo "Konstanta SITE_NAME sudah didefinisikan: " . SITE_NAME . "<br>"; // Output: Konstanta SITE_NAME sudah didefinisikan: My Awesome Website
} else {
    echo "Konstanta SITE_NAME belum didefinisikan.<br>";
}

// 5. Mengakses Konstanta dengan Fungsi `constant()`
echo "Mengakses SITE_NAME dengan fungsi constant(): " . constant('SITE_NAME') . "<br>"; // Output: My Awesome Website

// 6. Konstanta Predefined di PHP
echo "Versi PHP yang sedang digunakan: " . PHP_VERSION . "<br>"; // Output: Versi PHP yang sedang digunakan: (versi PHP Anda)
echo "Sistem Operasi: " . PHP_OS . "<br>"; // Output: Sistem Operasi: Linux (atau sistem operasi Anda)
echo "Nilai maksimum integer: " . PHP_INT_MAX . "<br>"; // Output: Nilai maksimum integer: 2147483647
?>
