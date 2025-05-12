<?php
$kalimat = "   belajar php itu menyenangkan   ";

echo "Asli: '$kalimat'<br>";
echo "trim(): '" . trim($kalimat) . "'<br>";
echo "strtoupper(): " . strtoupper($kalimat) . "<br>";
echo "ucwords(): " . ucwords(trim($kalimat)) . "<br>";
echo "substr(): " . substr($kalimat, 3, 10) . "<br>";
echo "str_replace(): " . str_replace("php", "programming", $kalimat) . "<br>";
?>
