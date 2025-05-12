<?php
// Mendeklarasikan variabel
$hari = 3;
$nilai = 85;
$pekerjaan = "developer";
$warna = "merah";

// 1. Switch statement untuk menentukan nama hari
switch ($hari) {
    case 1:
        echo "Hari ini adalah Senin.<br>";
        break;
    case 2:
        echo "Hari ini adalah Selasa.<br>";
        break;
    case 3:
        echo "Hari ini adalah Rabu.<br>";
        break;
    case 4:
        echo "Hari ini adalah Kamis.<br>";
        break;
    case 5:
        echo "Hari ini adalah Jumat.<br>";
        break;
    case 6:
        echo "Hari ini adalah Sabtu.<br>";
        break;
    case 7:
        echo "Hari ini adalah Minggu.<br>";
        break;
    default:
        echo "Input tidak valid.<br>";
}

// 2. Switch statement untuk menentukan grade berdasarkan nilai ujian
switch (true) {
    case ($nilai >= 90):
        echo "Grade A - Luar biasa!<br>";
        break;
    case ($nilai >= 80):
        echo "Grade B - Sangat Baik.<br>";
        break;
    case ($nilai >= 70):
        echo "Grade C - Baik.<br>";
        break;
    case ($nilai >= 60):
        echo "Grade D - Cukup.<br>";
        break;
    default:
        echo "Grade E - Gagal.<br>";
}

// 3. Switch statement untuk mengecek pekerjaan
switch ($pekerjaan) {
    case "developer":
        echo "Pekerjaan Anda adalah Developer.<br>";
        break;
    case "designer":
        echo "Pekerjaan Anda adalah Designer.<br>";
        break;
    case "manager":
        echo "Pekerjaan Anda adalah Manager.<br>";
        break;
    default:
        echo "Pekerjaan Anda tidak terdaftar.<br>";
}

// 4. Switch statement untuk menentukan kategori warna
switch ($warna) {
    case "merah":
        echo "Warna yang dipilih adalah Merah.<br>";
        break;
    case "biru":
        echo "Warna yang dipilih adalah Biru.<br>";
        break;
    case "hijau":
        echo "Warna yang dipilih adalah Hijau.<br>";
        break;
    default:
        echo "Warna yang dipilih tidak dikenali.<br>";
}
?>
