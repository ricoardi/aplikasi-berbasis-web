<?php
// Koneksi database
$conn = new mysqli("localhost", "root", "", "abw");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Simpan data dari POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['product_name'];
    $desc = $_POST['product_description'];
    $jumlah = $_POST['jumlah'];

    $sql = "INSERT INTO product (product_name, product_description, jumlah)
            VALUES ('$name', '$desc', $jumlah)";
    $conn->query($sql);
}

// Redirect kembali ke halaman utama
$conn->close();
header("Location: create_product.php");
exit;
