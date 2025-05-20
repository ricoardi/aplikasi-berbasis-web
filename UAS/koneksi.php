<?php
// Koneksi database
$conn = new mysqli("localhost", "root", "", "dbuas");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Simpan data dari POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $telpn = $_POST['telpn'];
    $jenis = $_POST['jenis'];
    $jumlah = $_POST['jumlah'];
    $metode = $_POST['metode'];
    $fasilitas = $_POST['fasilitas'];
    $catatan = $_POST['catatan'];

    // var_dump($metode); exit;

    $sql = "INSERT INTO tbtikon (nama, email, password, telpn, jenis, jumlah, metode, fasilitas, catatan)
            VALUES ('$nama', '$email', '$password', '$telpn', '$jenis', '$jumlah', '$metode', '$fasilitas', '$catatan')";
    // $conn->query($sql);

    // if ($conn->query($sql) === TRUE) {
    //     echo "<script>alert('Data berhasil diperbarui'); window.location.href='index.php';</script>";
    // } else {
    //     echo "Gagal update data: " . $conn->error;
    // }

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil Ditambah'); window.location.href='index.php';</script>";
    } else {
        echo "Gagal Tambah data: " . $conn->error;
    }


}

// Redirect kembali ke halaman utama
$conn->close();
// <!-- header("Location: index.php");
// exit; -->
?>
