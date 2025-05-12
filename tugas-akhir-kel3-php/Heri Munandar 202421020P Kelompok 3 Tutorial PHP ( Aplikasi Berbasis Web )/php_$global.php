<?php
// Variabel global
$nama = "John";
$usia = 25;

// Fungsi untuk mengakses dan mengubah variabel global menggunakan $GLOBALS
function tampilkanInformasi() {
    // Mengakses variabel global menggunakan $GLOBALS
    echo "Nama: " . $GLOBALS['nama'] . "\n";
    echo "Usia: " . $GLOBALS['usia'] . "\n";
}

// Memanggil fungsi untuk menampilkan informasi
tampilkanInformasi();

// Mengubah nilai variabel global melalui $GLOBALS
$GLOBALS['nama'] = "Jane";
$GLOBALS['usia'] = 30;

// Menampilkan informasi setelah perubahan
echo "\nSetelah perubahan:\n";
tampilkanInformasi();

// Menambah nilai usia melalui $GLOBALS
function tambahUsia() {
    // Menambah usia 5 tahun menggunakan $GLOBALS
    $GLOBALS['usia'] += 5;
}

tambahUsia(); // Panggil fungsi untuk menambah usia
echo "\nSetelah menambah usia:\n";
tampilkanInformasi();
?>
