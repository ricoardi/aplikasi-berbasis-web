<!DOCTYPE HTML>
<html>
<head>
    <title>Session Start</title>
</head>
<body>
<?php
session_start();
if(!empty($_SESSION['username']) and !empty($_SESSION['password']))
{
    echo "username : ".$_SESSION['username'];
    echo "<br> password : ".$_SESSION['password'];
    echo "<br> <a href='24_session_hapus.php'> hapus session </a>";
}
else
{
    echo "session telah dihapus";
    echo "<br> <a href='24_session.php'>buat session</a>";
}
?>
</body>
</html>
