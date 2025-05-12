<?php
// process.php

// Inisialisasi variabel untuk error
$namaErr = $emailErr = $passwordErr = $confirmPasswordErr = $pesanErr = "";
$nama = $email = $password = $confirm_password = $pesan = "";

// Mengecek apakah form sudah disubmit menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validasi Nama
    if (empty($_POST["nama"])) {
        $namaErr = "Nama diperlukan";
    } else {
        $nama = sanitize_input($_POST["nama"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
            $namaErr = "Hanya huruf dan spasi yang diperbolehkan";
        }
    }

    // Validasi Email
    if (empty($_POST["email"])) {
        $emailErr = "Email diperlukan";
    } else {
        $email = sanitize_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Format email tidak valid";
        }
    }

    // Validasi Password
    if (empty($_POST["password"])) {
        $passwordErr = "Password diperlukan";
    } else {
        $password = sanitize_input($_POST["password"]);
        if (strlen($password) < 8) {
            $passwordErr = "Password harus lebih dari 8 karakter";
        }
    }

    // Validasi Konfirmasi Password
    if (empty($_POST["confirm_password"])) {
        $confirmPasswordErr = "Konfirmasi password diperlukan";
    } else {
        $confirm_password = sanitize_input($_POST["confirm_password"]);
        if ($password !== $confirm_password) {
            $confirmPasswordErr = "Password dan konfirmasi password tidak cocok";
        }
    }

    // Validasi Pesan
    if (empty($_POST["pesan"])) {
        $pesanErr = "Pesan diperlukan";
    } else {
        $pesan = sanitize_input($_POST["pesan"]);
    }

    // Jika tidak ada error, proses form
    if (empty($namaErr) && empty($emailErr) && empty($passwordErr) && empty($confirmPasswordErr) && empty($pesanErr)) {
        echo "<h2>Pendaftaran Berhasil!</h2>";
        echo "<strong>Nama:</strong> $nama<br>";
        echo "<strong>Email:</strong> $email<br>";
        echo "<strong>Pesan:</strong> $pesan<br>";
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

    E-mail: <input type="email" name="email" value="<?php echo $email; ?>"><br>
    <span style="color: red;"><?php echo $emailErr; ?></span><br><br>

    Password: <input type="password" name="password"><br>
    <span style="color: red;"><?php echo $passwordErr; ?></span><br><br>

    Konfirmasi Password: <input type="password" name="confirm_password"><br>
    <span style="color: red;"><?php echo $confirmPasswordErr; ?></span><br><br>

    Pesan: <textarea name="pesan"><?php echo $pesan; ?></textarea><br>
    <span style="color: red;"><?php echo $pesanErr; ?></span><br><br>

    <input type="submit" value="Kirim">
</form>
