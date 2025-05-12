<form action="proses.php" method="POST">
    Nama: <input type="text" name="nama"><br>
    Email: <input type="email" name="email"><br>
    <input type="submit" value="Kirim">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form yang dikirimkan menggunakan metode POST
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    // Menampilkan data yang diterima
    echo "Nama yang diterima: " . $nama . "<br>";
    echo "Email yang diterima: " . $email . "<br>";
}
?>
