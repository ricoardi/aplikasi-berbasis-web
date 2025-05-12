<!-- form.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Validasi Email dan URL</title>
</head>
<body>

<h2>Formulir Pendaftaran Pengguna</h2>

<form action="process.php" method="POST">
    E-mail: <input type="email" name="email" required><br><br>
    URL: <input type="text" name="url" required><br><br>
    <input type="submit" value="Kirim">
</form>

</body>
</html>
<?php
// process.php

// Inisialisasi variabel untuk error
$emailErr = $urlErr = "";
$email = $url = "";

// Mengecek apakah form sudah disubmit menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validasi Email
    if (empty($_POST["email"])) {
        $emailErr = "Email diperlukan";
    } else {
        $email = sanitize_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Format email tidak valid";
        }
    }

    // Validasi URL
    if (empty($_POST["url"])) {
        $urlErr = "URL diperlukan";
    } else {
        $url = sanitize_input($_POST["url"]);
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            $urlErr = "Format URL tidak valid";
        }
    }

    // Jika tidak ada error, proses form
    if (empty($emailErr) && empty($urlErr)) {
        echo "Formulir berhasil dikirim!<br>";
        echo "E-mail: $email<br>";
        echo "URL: $url<br>";
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
    E-mail: <input type="email" name="email" value="<?php echo $email; ?>"><br>
    <span style="color: red;"><?php echo $emailErr; ?></span><br><br>

    URL: <input type="text" name="url" value="<?php echo $url; ?>"><br>
    <span style="color: red;"><?php echo $urlErr; ?></span><br><br>

    <input type="submit" value="Kirim">
</form>
