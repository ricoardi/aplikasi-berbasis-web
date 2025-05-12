<?php
// Mendeklarasikan variabel
$nilai = 85;
$umur = 20;
$pendapatan = 2500;
$stok = 0;
$harga = 200;

// 1. Shorthand if dengan Ternary Operator untuk Nilai Ujian
echo ($nilai >= 60) ? "Selamat, Anda Lulus!<br>" : "Maaf, Anda Gagal.<br>";

// 2. Shorthand if dengan Ternary Operator untuk Umur
echo ($umur >= 18) ? "Anda Dewasa.<br>" : "Anda Masih Anak-Anak.<br>";

// 3. Shorthand if dengan Ternary Operator untuk Kelayakan Pinjaman
echo ($pendapatan >= 3000) ? "Kelayakan Pinjaman: Lulus.<br>" : "Kelayakan Pinjaman: Tidak Lulus.<br>";

// 4. Shorthand if untuk Mengecek Stok Barang
echo ($stok > 0) ? "Produk Tersedia di Stok.<br>" : "Produk Tidak Tersedia di Stok.<br>";

// 5. Shorthand if dengan Ternary Operator untuk Cek Harga Produk
echo ($harga > 100) ? "Produk Mahal.<br>" : "Produk Murah.<br>";

// 6. Shorthand if Nested (Ternary Operator Bersarang) untuk Grade
echo ($nilai >= 90) ? "Grade A" : (($nilai >= 80) ? "Grade B" : (($nilai >= 70) ? "Grade C" : "Grade D"));
?>
