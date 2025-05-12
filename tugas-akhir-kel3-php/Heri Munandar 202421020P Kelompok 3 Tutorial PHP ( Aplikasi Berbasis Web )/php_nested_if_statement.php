<?php
// Mendeklarasikan variabel
$nilai = 85;
$umur = 20;
$pendapatan = 4000;
$stok = 5;
$harga = 120;
$pekerjaan = "developer";

// 1. Nested if untuk pengecekan nilai ujian
if ($nilai >= 60) {
    echo "Selamat, Anda Lulus!<br>";

    if ($nilai >= 80) {
        echo "Anda mendapatkan nilai yang sangat baik!<br>";  // Output jika nilai >= 80
    } else {
        echo "Nilai Anda cukup baik.<br>";  // Output jika nilai >= 60 tapi < 80
    }
} else {
    echo "Maaf, Anda Gagal.<br>";  // Output jika nilai < 60
}

// 2. Nested if untuk pengecekan umur dan kelayakan pinjaman
if ($umur >= 18) {
    echo "Anda Dewasa.<br>";

    if ($pendapatan >= 3000) {
        echo "Kelayakan pinjaman: Lulus.<br>";  // Output jika umur >= 18 dan pendapatan >= 3000
    } else {
        echo "Kelayakan pinjaman: Tidak Lulus (pendapatan rendah).<br>";  // Output jika umur >= 18 dan pendapatan < 3000
    }
} else {
    echo "Anda belum cukup umur untuk pinjaman.<br>";  // Output jika umur < 18
}

// 3. Nested if untuk pengecekan harga dan stok produk
if ($harga > 100) {
    echo "Produk Mahal.<br>";

    if ($stok > 0) {
        echo "Produk tersedia di stok.<br>";  // Output jika harga > 100 dan stok > 0
    } else {
        echo "Produk mahal tapi stok habis.<br>";  // Output jika harga > 100 dan stok == 0
    }
} else {
    echo "Produk Murah.<br>";

    if ($stok > 0) {
        echo "Produk murah dan tersedia di stok.<br>";  // Output jika harga <= 100 dan stok > 0
    } else {
        echo "Produk murah tapi stok habis.<br>";  // Output jika harga <= 100 dan stok == 0
    }
}

// 4. Nested if untuk pengecekan pekerjaan dan gaji
if ($pekerjaan == "developer") {
    echo "Anda seorang developer.<br>";

    if ($pendapatan > 5000) {
        echo "Pendapatan Anda sangat tinggi.<br>";  // Output jika pekerjaan adalah developer dan pendapatan > 5000
    } else {
        echo "Pendapatan Anda cukup baik untuk seorang developer.<br>";  // Output jika pekerjaan adalah developer dan pendapatan <= 5000
    }
} else {
    echo "Pekerjaan Anda bukan developer.<br>";  // Output jika pekerjaan bukan developer
}
?>
