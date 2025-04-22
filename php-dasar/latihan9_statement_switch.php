<!DOCTYPE HTML>
<html>
<head>
    <title>Statement Switch</title>
</head>
<body>
<?php
$kota = "bandung";

switch($kota)
{
    case "bandung": 
        echo "ibukota jawa barat";
        break;
    case "surabaya": 
        echo "ibukota jawa timur";
        break;
    case "semarang": 
        echo "ibukota jawa tengah";
        break;
    default: 
        echo "ibukota provinsi lain";
        break;
}
?>
</body>
</html>
