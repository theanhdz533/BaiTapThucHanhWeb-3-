<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
</head>
<body>
    <?php
    echo "Chao ban"." ".$_SESSION['name']." co tuoi la ".$_SESSION['age'];
    ?>
    <a href="huy_session.php">Huy</a>
</body>
</html>