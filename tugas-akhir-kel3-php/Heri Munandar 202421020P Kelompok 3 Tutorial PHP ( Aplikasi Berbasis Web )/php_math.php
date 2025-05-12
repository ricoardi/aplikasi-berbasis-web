<?php
// 1. Nilai Mutlak
$angka = -10;
echo "Nilai mutlak dari $angka adalah " . abs($angka) . "<br>";

// 2. Membulatkan ke angka terdekat
$angka = 5.678;
echo "Angka $angka dibulatkan menjadi " . round($angka) . "<br>";

// 3. Membulatkan ke atas
$angka = 5.123;
echo "Angka $angka dibulatkan ke atas menjadi " . ceil($angka) . "<br>";

// 4. Membulatkan ke bawah
$angka = 5.987;
echo "Angka $angka dibulatkan ke bawah menjadi " . floor($angka) . "<br>";

// 5. Nilai maksimum dan minimum
$nilai1 = 50;
$nilai2 = 30;
$nilai3 = 80;
echo "Nilai maksimum: " . max($nilai1, $nilai2, $nilai3) . "<br>"; // Output: 80
echo "Nilai minimum: " . min($nilai1, $nilai2, $nilai3) . "<br>"; // Output: 30

// 6. Pangkat
$basis = 3;
$pangkat = 4;
echo "$basis pangkat $pangkat adalah " . pow($basis, $pangkat) . "<br>"; // Output: 81

// 7. Akar kuadrat
$angka = 16;
echo "Akar kuadrat dari $angka adalah " . sqrt($angka) . "<br>"; // Output: 4

// 8. Angka acak antara 1 dan 100
echo "Angka acak antara 1 dan 100: " . rand(1, 100) . "<br>";

// 9. Nilai Pi
echo "Nilai Pi: " . pi() . "<br>"; // Output: 3.1415926535898

// 10. Menghitung luas lingkaran dengan radius 7
$radius = 7;
$area = pi() * pow($radius, 2); // Menghitung luas lingkaran
echo "Luas lingkaran dengan radius $radius adalah: " . round($area, 2) . "<br>"; // Output: 153.94
?>
