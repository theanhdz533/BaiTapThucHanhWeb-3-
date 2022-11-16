<?php
$config = mysqli_connect("localhost","root","admin","review");
if(mysqli_connect_error()!=0){
    die("Can not connect to the database");
}
mysqli_set_charset($config,'utf8');
?>