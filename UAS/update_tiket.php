<?php
$conn = new mysqli("localhost", "root", "", "dbuas");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$id = $_POST['id_tikon'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$telpn = $_POST['telpn'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];
$metode = $_POST['metode'];
$fasilitas = $_POST['fasilitas'];
$catatan = $_POST['catatan'];

$sql = "UPDATE tbtikon SET 
    nama='$nama',
    email='$email',
    password='$password',
    telpn='$telpn',
    jenis='$jenis',
    jumlah='$jumlah',
    metode='$metode',
    fasilitas='$fasilitas',
    catatan='$catatan'
    WHERE id_tikon=$id";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Data berhasil diperbarui'); window.location.href='index.php';</script>";
} else {
    echo "Gagal update data: " . $conn->error;
}

$conn->close();
?>
