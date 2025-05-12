<?php
$x = 10; // Variabel global

function tampilkanX() {
    // Tidak bisa mengakses $x secara langsung di dalam fungsi
    echo "Nilai x tidak bisa diakses langsung di sini.<br>";
}
tampilkanX();
?>
<!-- Mengakses Global dengan global Keyword -->
<?php
$a = 5;
$b = 10;

function jumlahkan() {
    global $a, $b;
    $c = $a + $b;
    echo "Hasil penjumlahan: $c<br>";
}
jumlahkan();
?>
<!-- Local Scope -->
<?php
function lokalContoh() {
    $lokalVar = "Saya lokal!";
    echo $lokalVar . "<br>";
}
lokalContoh();
// echo $lokalVar; // Akan error karena berada di luar fungsi
?>
<!-- Static Scope -->
<?php
function hitungPanggilan() {
    static $count = 0; // Nilainya akan dipertahankan antar pemanggilan fungsi
    $count++;
    echo "Fungsi ini dipanggil $count kali<br>";
}
hitungPanggilan();
hitungPanggilan();
hitungPanggilan();
?>
