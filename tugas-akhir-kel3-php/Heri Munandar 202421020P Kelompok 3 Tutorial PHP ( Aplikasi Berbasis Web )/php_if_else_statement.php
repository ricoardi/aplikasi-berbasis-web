<?php
// Mendeklarasikan variabel
$nilai = 75;
$umur = 20;
$harga = 100;
$stok = 0;
$pendapatan = 5000;

// 1. if...else untuk nilai ujian
if ($nilai >= 60) {
    echo "Selamat, Anda Lulus!<br>";
} else {
    echo "Maaf, Anda Gagal.<br>";
}

// 2. if...else untuk memeriksa umur
if ($umur >= 18) {
    echo "Anda dewasa.<br>";
} else {
    echo "Anda masih anak-anak.<br>";
}

// 3. if...elseif...else untuk kategori nilai
if ($nilai >= 90) {
    echo "Grade A<br>";
} elseif ($nilai >= 80) {
    echo "Grade B<br>";
} elseif ($nilai >= 70) {
    echo "Grade C<br>";
} elseif ($nilai >= 60) {
    echo "Grade D<br>";
} else {
    echo "Grade E<br>";
}

// 4. if...else dengan operator logika
if ($umur >= 18 && $pendapatan > 3000) {
    echo "Kelayakan untuk pinjaman: Lulus.<br>";
} else {
    echo "Kelayakan untuk pinjaman: Tidak Lulus.<br>";
}

// 5. Nested if...else (if dalam if)
if ($harga > 50) {
    echo "Harga produk lebih mahal dari 50.<br>";

    if ($stok > 0) {
        echo "Produk tersedia di stok.<br>";
    } else {
        echo "Produk tidak tersedia di stok.<br>";
    }
} else {
    echo "Harga produk kurang dari atau sama dengan 50.<br>";
}

// 6. if...else dengan ternary operator
echo ($nilai == 75) ? "Nilai Anda adalah 75.<br>" : "Nilai Anda bukan 75.<br>";  // Output: Nilai Anda adalah 75.
?>
