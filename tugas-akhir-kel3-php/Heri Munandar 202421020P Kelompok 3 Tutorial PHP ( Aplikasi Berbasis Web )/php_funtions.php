<?php
// Fungsi tanpa parameter dan tanpa nilai balik
function sayHello() {
    echo "Hello, selamat datang di PHP!\n";
}

// Fungsi dengan parameter
function greetUser($name) {
    echo "Halo, $name! Selamat datang di PHP!\n";
}

// Fungsi dengan nilai balik (return)
function addNumbers($a, $b) {
    return $a + $b;
}

// Fungsi dengan parameter default
function greet($name = "Pengguna") {
    echo "Halo, $name!\n";
}

// Memanggil fungsi tanpa parameter dan tanpa nilai balik
sayHello();

// Memanggil fungsi dengan parameter
greetUser("Budi");

// Memanggil fungsi dengan nilai balik dan menampilkan hasilnya
$result = addNumbers(5, 10);
echo "Hasil penjumlahan 5 dan 10 adalah: $result\n";

// Memanggil fungsi dengan parameter default
greet();
greet("Andi");

?>
