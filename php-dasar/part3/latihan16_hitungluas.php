<!DOCTYPE HTML>
<html>
<head>
    <title>Pengembalian Nilai</title>
</head>
<body>
    <?php
    function hitung_luas($panjang, $lebar)
    {
        $luas = $panjang * $lebar;
        return $luas;
    }

    echo "luas ruangan adalah " . hitung_luas(10, 8);

    echo "<p>kita dapat menggunakannya lagi seperti berikut:</p>";

    $p = 15;
    $l = 10;
    $luas = hitung_luas($p, $l);
    echo "luas ruangan adalah $luas";
    ?>
</body>
</html>
