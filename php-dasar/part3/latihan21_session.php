<!DOCTYPE html>
<html>
<head>
    <title>Session</title>
</head>
<body>
    <?php
    session_start();
    $_SESSION['username'] = "administrator";
    $_SESSION['password'] = "rahasia";

    echo "session telah dibuat, 
    <a href='24_session_cek.php'>cek session</a>";
    ?>
</body>
</html>
