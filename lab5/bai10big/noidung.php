<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head></head>

<body>
    Trang quan tri
    <?php
    if (isset($_COOKIE['username']) && isset($_COOKIE['password']))
        echo "Hello " . $_COOKIE['username'];
    elseif (isset($_SESSION['username']) && isset($_SESSION['password'])) {
        echo "Xin chào: " . $_SESSION['username'];
        echo "<br><a href='logout.php'>Logout</a>";
    } else {
        echo "<script language='javascript'>alert('Ban chua dang nhap - Vui long dang nhap lai');";
        echo "location.href='dangnhap.php';</script>";
    }
    ?>
    <a href="logout.php">Thoat ra </a>
</body>

</html>