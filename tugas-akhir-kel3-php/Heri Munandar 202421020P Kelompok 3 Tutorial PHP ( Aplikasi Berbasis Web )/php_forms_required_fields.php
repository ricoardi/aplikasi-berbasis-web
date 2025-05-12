<!-- form.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form dengan Required Fields</title>
</head>
<body>

<h2>Formulir Kontak</h2>

<form action="process.php" method="POST">
    Nama: <input type="text" name="nama" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Pesan: <textarea name="pesan" required></textarea><br><br>
    <input type="submit" value="Kirim">
</form>

</body>
</html>
<?php
// process.php

// Inisialisasi variabel untuk error
$namaErr = $emailErr = $pesanErr = "";
$nama = $email = $pesan = "";

// Mengecek apakah form sudah disubmit menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validasi Nama
    if (empty($_POST["nama"])) {
        $namaErr = "Nama diperlukan";
    } else {
        $nama = sanitize_input($_POST["nama"]);
    }

    // Validasi Email
    if (empty($_POST["email"])) {
        $emailErr = "Email diperlukan";
    } else {
        $email = sanitize_input($_POST["email"]);
        // Memeriksa apakah email valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Format email tidak valid";
        }
    }

    // Validasi Pesan
    if (empty($_POST["pesan"])) {
        $pesanErr = "Pesan diperlukan";
    } else {
        $pesan = sanitize_input($_POST["pesan"]);
    }

    // Jika tidak ada error, proses form
    if (empty($namaErr) && empty($emailErr) && empty($pesanErr)) {
        echo "Formulir berhasil dikirim!<br>";
        echo "Nama: $nama<br>";
        echo "Email: $email<br>";
        echo "Pesan: $pesan<br>";
    }
}

// Fungsi untuk mensanitasi input
function sanitize_input($data) {
    $data = trim($data); // Menghapus spasi yang tidak perlu
    $data = stripslashes($data); // Menghapus backslashes
    $data = htmlspecialchars($data); // Menghindari XSS
    return $data;
}
?>

<h2>Hasil Pengiriman Formulir</h2>

<form action="process.php" method="POST">
    Nama: <input type="text" name="nama" value="<?php echo $nama; ?>"><br>
    <span style="color: red;"><?php echo $namaErr; ?></span><br><br>

    Email: <input type="email" name="email" value="<?php echo $email; ?>"><br>
    <span style="color: red;"><?php echo $emailErr; ?></span><br><br>

    Pesan: <textarea name="pesan"><?php echo $pesan; ?></textarea><br>
    <span style="color: red;"><?php echo $pesanErr; ?></span><br><br>

    <input type="submit" value="Kirim">
</form>
