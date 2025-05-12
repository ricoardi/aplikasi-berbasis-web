<?php
// 1. Menggunakan while loop untuk menampilkan angka dari 1 sampai 5
$i = 1;
echo "Contoh while loop - Menampilkan angka 1 sampai 5:<br>";
while ($i <= 5) {
    echo "Angka: $i<br>";
    $i++;  // Jangan lupa meningkatkan nilai $i agar loop berhenti
}

// 2. Menggunakan while loop untuk menghitung mundur dari 5
$j = 5;
echo "<br>Contoh while loop - Menghitung mundur dari 5:<br>";
while ($j > 0) {
    echo "Hitung mundur: $j<br>";
    $j--;  // Mengurangi nilai $j
}

// 3. Menggunakan while loop dengan kondisi yang lebih kompleks
$k = 10;
echo "<br>Contoh while loop - Kondisi yang lebih kompleks:<br>";
while ($k >= 1) {
    if ($k % 2 == 0) {
        echo "$k adalah angka genap.<br>";
    } else {
        echo "$k adalah angka ganjil.<br>";
    }
    $k--;
}

// 4. Infinite loop yang berhenti setelah 10 detik (untuk tujuan demonstrasi)
echo "<br>Contoh Infinite Loop yang berhenti setelah 10 detik:<br>";
$counter = 0;
while (true) {
    $counter++;
    if ($counter == 5) {
        echo "Loop dihentikan setelah 5 iterasi.<br>";
        break;  // Menghentikan infinite loop setelah 5 iterasi
    }
}
?>
