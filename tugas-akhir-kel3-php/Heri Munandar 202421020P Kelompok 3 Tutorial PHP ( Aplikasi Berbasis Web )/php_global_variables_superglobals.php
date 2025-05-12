<?php
// 1. Menggunakan $_GET untuk mengambil data dari URL
if (isset($_GET['nama'])) {
    $nama = $_GET['nama'];
    echo "Nama yang diterima dari URL: $nama\n";
} else {
    echo "Nama tidak ditemukan di URL\n";
}

// 2. Menggunakan $_POST untuk mengambil data dari form POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        echo "\nEmail yang diterima dari form POST: $email\n";
    }
} else {
    echo "\nForm POST belum dikirim\n";
}

// 3. Menggunakan $_REQUEST untuk mengambil data dari GET atau POST
if (isset($_REQUEST['usia'])) {
    $usia = $_REQUEST['usia'];
    echo "\nUsia yang diterima dari REQUEST: $usia\n";
}

// 4. Menggunakan $_SERVER untuk mengambil informasi server
echo "\nNama server: " . $_SERVER['SERVER_NAME'] . "\n";
echo "Alamat server: " . $_SERVER['SERVER_ADDR'] . "\n";
echo "Script yang sedang dijalankan: " . $_SERVER['SCRIPT_NAME'] . "\n";

// 5. Menggunakan $_FILES untuk mengambil data file yang diunggah
// Membuat form HTML untuk mengunggah file
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file_upload'])) {
    $file_name = $_FILES['file_upload']['name'];
    echo "\nNama file yang diunggah: $file_name\n";
    echo "Tipe file: " . $_FILES['file_upload']['type'] . "\n";
} else {
    echo "\nForm unggah file belum dikirim\n";
}

// 6. Menggunakan $_COOKIE untuk mengambil nilai cookie
setcookie("user", "JohnDoe", time() + 3600, "/");  // Menyimpan cookie
if (isset($_COOKIE['user'])) {
    echo "\nNama pengguna dari cookie: " . $_COOKIE['user'] . "\n";
} else {
    echo "\nCookie 'user' tidak ditemukan\n";
}

// 7. Menggunakan $_SESSION untuk mengambil data sesi
session_start();  // Memulai sesi
$_SESSION['username'] = 'JaneDoe';  // Menyimpan data sesi

echo "\nNama pengguna yang disimpan dalam sesi: " . $_SESSION['username'] . "\n";

// Menampilkan semua superglobals
echo "\nSuperglobals - $_GET: ";
print_r($_GET);
echo "\nSuperglobals - $_POST: ";
print_r($_POST);
echo "\nSuperglobals - $_REQUEST: ";
print_r($_REQUEST);
echo "\nSuperglobals - $_SERVER: ";
print_r($_SERVER);
echo "\nSuperglobals - $_FILES: ";
print_r($_FILES);
echo "\nSuperglobals - $_COOKIE: ";
print_r($_COOKIE);
echo "\nSuperglobals - $_SESSION: ";
print_r($_SESSION);
?>
