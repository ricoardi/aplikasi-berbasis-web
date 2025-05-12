<?php
// Menampilkan informasi server
echo "Nama Server: " . $_SERVER['SERVER_NAME'] . "\n";
echo "Alamat Server: " . $_SERVER['SERVER_ADDR'] . "\n";
echo "Perangkat Lunak Server: " . $_SERVER['SERVER_SOFTWARE'] . "\n";

// Menampilkan informasi mengenai skrip yang sedang dijalankan
echo "Nama Skrip yang Dijalanakan: " . $_SERVER['SCRIPT_NAME'] . "\n";
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "\n";
echo "Query String: " . $_SERVER['QUERY_STRING'] . "\n";

// Menampilkan informasi tentang user agent (browser atau klien yang mengakses)
echo "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\n";

// Menampilkan alamat IP pengunjung
echo "Alamat IP Pengunjung: " . $_SERVER['REMOTE_ADDR'] . "\n";

// Menampilkan URI permintaan yang diterima oleh server
echo "URI Permintaan: " . $_SERVER['REQUEST_URI'] . "\n";

// Menampilkan PHP_SELF (nama skrip yang sedang dijalankan)
echo "Nama Skrip PHP (PHP_SELF): " . $_SERVER['PHP_SELF'] . "\n";
?>
