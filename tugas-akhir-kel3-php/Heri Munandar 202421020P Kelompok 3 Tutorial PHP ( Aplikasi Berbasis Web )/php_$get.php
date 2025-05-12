<?php
// Cek apakah data dikirim melalui GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Mengambil data dari query string (URL) menggunakan $_GET
    if (isset($_GET['nama']) && isset($_GET['usia'])) {
        $nama = $_GET['nama'];
        $usia = $_GET['usia'];

        // Menampilkan data yang diterima dari GET
        echo "Nama yang diterima: " . htmlspecialchars($nama) . "<br>";
        echo "Usia yang diterima: " . htmlspecialchars($usia) . "<br>";
    } else {
        echo "Parameter nama atau usia tidak ditemukan dalam URL.";
    }
} else {
    echo "Permintaan bukan menggunakan metode GET.";
}
?>
