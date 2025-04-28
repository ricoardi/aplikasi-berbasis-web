<!DOCTYPE HTML>
<html>
<head>
    <title>Session and Destroy</title>
</head>
<body>
<?php
session_start();

session_destroy();

echo "session telah dihapus,
<a href='24_session_cek.php'> cek session </a>";
?>
</body>
</html>
