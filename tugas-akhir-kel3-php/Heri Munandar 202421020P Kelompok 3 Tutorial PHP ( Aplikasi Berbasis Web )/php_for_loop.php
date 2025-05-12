<?php
// 1. for loop untuk menampilkan angka dari 1 hingga 5
echo "Contoh for loop - Menampilkan angka 1 hingga 5:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Angka: $i<br>";
}

// 2. for loop untuk menghitung mundur dari 5
echo "<br>Contoh for loop - Menghitung mundur dari 5:<br>";
for ($j = 5; $j >= 1; $j--) {
    echo "Hitung mundur: $j<br>";
}

// 3. for loop untuk mencetak angka genap dari 2 hingga 10
echo "<br>Contoh for loop - Menampilkan angka genap dari 2 hingga 10:<br>";
for ($k = 2; $k <= 10; $k += 2) {
    echo "Angka genap: $k<br>";
}

// 4. for loop untuk iterasi array menggunakan indeks
echo "<br>Contoh for loop dengan array:<br>";
$warna = array("Merah", "Biru", "Hijau", "Kuning");
for ($i = 0; $i < count($warna); $i++) {
    echo "Warna: $warna[$i]<br>";
}

// 5. for loop untuk menampilkan bilangan kuadrat dari 1 sampai 5
echo "<br>Contoh for loop - Menampilkan bilangan kuadrat:<br>";
for ($n = 1; $n <= 5; $n++) {
    $kuadrat = $n * $n;
    echo "Bilangan: $n, Kuadrat: $kuadrat<br>";
}
?>
