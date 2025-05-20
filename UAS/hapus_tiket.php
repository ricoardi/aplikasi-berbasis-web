<?php
// Koneksi database
$conn = new mysqli("localhost", "root", "", "dbuas");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil ID dari URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    // Hapus data berdasarkan id
    $sql = "DELETE FROM tbtikon WHERE id_tikon = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil dihapus'); window.location.href='index.php';</script>";
    } else {
        echo "Gagal menghapus data: " . $conn->error;
    }
} else {
    echo "ID tidak valid.";
}

$conn->close();
?>
