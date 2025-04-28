<!DOCTYPE HTML>
<html>
<head>
    <title>Function with Parameter</title>
</head>
<body>
    <?php
    function ucap_salam($nama)
    {
        echo "<b>halo, apa kabar <b>$nama</b>?</b>";
    }

    ucap_salam("nabil");
    echo "<p>kita dapat menggunakannya lagi seperti berikut:</p>";
    ucap_salam("afaf");
    ?>
</body>
</html>
