<!DOCTYPE HTML>
<html>
<head>
    <title>Looping Foreach</title>
</head>
<body>
<?php
$abw = array("januari", "febuari", "maret", "april", "mei", "juni", "juli",
             "agustus", "september", "oktober", "november", "desember");

foreach($abw as $mont)
{
    echo "$mont <br>";
}
?>
</body>
</html>
