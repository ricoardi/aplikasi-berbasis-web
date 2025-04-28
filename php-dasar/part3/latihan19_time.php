<!DOCTYPE html>
<html>
<head>
    <title>Time</title>
</head>
<body>
    <?php
    $sekarang = mktime(12, 13, 40, date('m'), date('d'), date('Y'));
    echo "sekarang tanggal " . date('d F Y', $sekarang);

    $bulanlalu = mktime(0, 0, 0, date('m') - 1, date('d'), date('Y'));
    echo "<br>satu bulan yang lalu adalah tanggal " . date('d F Y', $bulanlalu);

    $lusa = mktime(0, 0, 0, date('m'), date('d') + 2, date('Y'));
    echo "<br>lusa adalah tanggal " . date('d F Y', $lusa);

    $tahun = mktime(0, 0, 0, date('m'), date('d'), date('Y') - 2);
    echo "<br>dua tahun yang lalu adalah tanggal " . date('d F Y', $tahun);
    ?>
</body>
</html>
