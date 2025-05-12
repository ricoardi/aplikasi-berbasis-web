<?php
$kota = "Jakarta";
$negara = "Indonesia";

// print hanya bisa satu argumen
print "Kota: " . $kota . "<br>";
print "Negara: " . $negara . "<br>";

// print bisa digunakan dalam ekspresi karena mengembalikan nilai
$hasil = print("Halo dari $kota!<br>");
echo "Nilai kembalian dari print: $hasil<br>"; // Akan mencetak 1
?>
