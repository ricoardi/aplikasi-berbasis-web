<!DOCTYPE HTML>
<html>
<head>
    <title>latihan PHP</title>
</head>
<body>
<?php
// cara 1
$profil = array("nama" => "nabil", "alamat" => "tegal", "usia" => "4");

echo "nama saya $profil[nama], saya berasal dari $profil[alamat], 
usia saya $profil[usia] tahun";

// cara 2
$profil['nama'] = "afaf";
$profil['alamat'] = "banjarnegara";
$profil['usia'] = 5;

echo "<br>nama saya $profil[nama], saya berasal dari $profil[alamat], 
usia saya $profil[usia] tahun";
?>
</body>
</html>
