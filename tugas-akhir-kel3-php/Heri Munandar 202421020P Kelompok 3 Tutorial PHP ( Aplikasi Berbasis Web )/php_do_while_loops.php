<?php
// 1. do...while loop untuk menampilkan angka dari 1 sampai 5
$i = 1;
echo "Contoh do...while loop - Menampilkan angka 1 sampai 5:<br>";
do {
    echo "Angka: $i<br>";
    $i++;  // Menambah nilai $i untuk melanjutkan iterasi
} while ($i <= 5);

// 2. do...while loop untuk menghitung mundur dari 5
$j = 5;
echo "<br>Contoh do...while loop - Menghitung mundur dari 5:<br>";
do {
    echo "Hitung mundur: $j<br>";
    $j--;  // Mengurangi nilai $j untuk menghentikan loop
} while ($j > 0);

// 3. do...while loop dengan kondisi yang lebih kompleks
$k = 10;
echo "<br>Contoh do...while loop - Kondisi yang lebih kompleks:<br>";
do {
    if ($k % 2 == 0) {
        echo "$k adalah angka genap.<br>";
    } else {
        echo "$k adalah angka ganjil.<br>";
    }
    $k--;  // Mengurangi nilai $k untuk melanjutkan iterasi
} while ($k >= 1);

// 4. Infinite loop yang berhenti setelah 5 iterasi (untuk tujuan demonstrasi)
echo "<br>Contoh Infinite Loop yang berhenti setelah 5 iterasi:<br>";
$counter = 0;
do {
    $counter++;
    if ($counter == 5) {
        echo "Loop dihentikan setelah 5 iterasi.<br>";
        break;  // Menghentikan infinite loop setelah 5 iterasi
    }
} while (true);  // Loop ini akan terus berjalan tanpa henti, tapi berhenti setelah 5 iterasi
?>
