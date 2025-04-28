<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Form PHP</title>
</head>

<body>
    <?php
    // Periksa apakah data dikirimkan melalui metode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari form menggunakan variabel PHP
        $nama = $_POST["nama"];
        $umur = $_POST["umur"];

        // Tampilkan hasil
        echo "<p>Halo, $nama! Umur kamu $umur tahun.</p>";
    }
    ?>
</body>

</html>
