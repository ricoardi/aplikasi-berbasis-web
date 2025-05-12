<?php
// Contoh 1: Mengambil data dari URL menggunakan metode GET
if (isset($_REQUEST['nama'])) {
    $nama = $_REQUEST['nama'];
    echo "Nama yang diterima melalui REQUEST (GET): $nama\n";
} else {
    echo "Nama tidak ditemukan di REQUEST (GET)\n";
}

// Contoh 2: Mengambil data dari form menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_REQUEST['email'])) {
        $email = $_REQUEST['email'];
        echo "Email yang diterima melalui REQUEST (POST): $email\n";
    }
} else {
    echo "Form POST belum dikirim\n";
}

// Contoh 3: Mengambil data dari cookie menggunakan metode COOKIE
setcookie("user", "JohnDoe", time() + 3600, "/");  // Menyimpan cookie selama 1 jam
if (isset($_REQUEST['user'])) {
    echo "Nama pengguna yang diterima melalui REQUEST (COOKIE): " . $_REQUEST['user'] . "\n";
} else {
    echo "Cookie 'user' tidak ditemukan di REQUEST\n";
}
?>
