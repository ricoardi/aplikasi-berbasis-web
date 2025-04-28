<!DOCTYPE html>
<html>
<head>
    <title>Operasi String</title>
</head>
<body>
    <?php
    $text = "saya senang belajar PHP";

    echo substr($text, 0, 11);
    echo "<br>";
    echo substr($text, 12);
    echo "<br>";
    echo strtoupper($text);
    echo "<br>";
    echo ucwords($text);
    echo "<br>";
    echo str_replace("senang", "suka", $text);
    echo "<br>";
    echo strpos($text, "p");
    $kata = explode(' ', $text);
    echo "<br>";
    echo $kata[1];
    ?>
</body>
</html>
