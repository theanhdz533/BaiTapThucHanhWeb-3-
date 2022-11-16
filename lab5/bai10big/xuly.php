<?php
session_start();
ob_start();
include("../bai10big/connect.php");
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
}
$sl = "select * from tintuc where Username='$username' and Password='$password'";
$kq = mysqli_query($connect,$sl);
$row = mysqli_fetch_array($kq);
if (mysqli_num_rows($kq) > 0) { 

    $_SESSION['username'] = $username;
     $_SESSION['password'] = $password;
     if(isset($_POST['remember']) && ($_POST['remember']=="on")){
        setcookie("username",$username,time()+60);
        setcookie("password",$password,time()+60);
     }
     echo "<script>alert('Login Successfull.'); location.href='noidung.php';</script>";
} else {
    echo "<script language='javascript'>alert('Login Failed');";
    echo "location.href='dangnhap.php';</script>";
}
?>