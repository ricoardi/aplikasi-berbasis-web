<?php
// Mendeklarasikan variabel
$angka = 10;

// 1. Penggunaan if statement dasar
if ($angka > 5) {
    echo "Angka lebih besar dari 5.<br>";  // Ini akan dieksekusi karena 10 > 5
}

// 2. Penggunaan if-else statement
if ($angka < 5) {
    echo "Angka lebih kecil dari 5.<br>";
} else {
    echo "Angka lebih besar atau sama dengan 5.<br>";  // Ini yang akan dieksekusi karena 10 >= 5
}

// 3. Penggunaan if-elseif-else statement
if ($angka < 5) {
    echo "Angka lebih kecil dari 5.<br>";
} elseif ($angka == 10) {
    echo "Angka sama dengan 10.<br>";  // Ini yang akan dieksekusi karena 10 == 10
} else {
    echo "Angka lebih besar dari 10.<br>";
}

// 4. Penggunaan if dengan kondisi boolean
$is_raining = true;

if ($is_raining) {
    echo "Bawa payung, hujan!<br>";  // Ini akan dieksekusi karena $is_raining bernilai true
} else {
    echo "Tidak hujan, tidak perlu payung.<br>";
}

// 5. Penggunaan if dengan operator logika
$nilai = 75;

if ($nilai >= 60 && $nilai <= 80) {
    echo "Nilai Anda sedang baik.<br>";  // Ini akan dieksekusi karena 75 berada di rentang 60 hingga 80
} else {
    echo "Nilai Anda tidak berada di rentang yang diharapkan.<br>";
}

?>
