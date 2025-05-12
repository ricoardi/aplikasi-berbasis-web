<!-- form.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling Example</title>
</head>
<body>

<h2>Formulir Pengguna</h2>

<form action="process.php" method="POST">
    Nama: <input type="text" name="nama" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <input type="submit" value="Kirim">
</form>

</body>
</html>
<?php
// process.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data yang dikirimkan melalui POST
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    // Validasi dan sanitasi input
    $nama = sanitize_input($nama);
    $email = sanitize_input($email);

    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Format email tidak valid.";
    } else {
        // Menampilkan data yang diterima
        echo "Nama yang diterima: " . $nama . "<br>";
        echo "Email yang diterima: " . $email . "<br>";
    }
}

// Fungsi untuk menghilangkan karakter yang tidak diinginkan
function sanitize_input($data) {
    $data = trim($data); // Menghapus spasi yang tidak perlu
    $data = stripslashes($data); // Menghapus backslashes
    $data = htmlspecialchars($data); // Menghindari XSS
    return $data;
}
?>
