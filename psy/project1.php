<?php
$pass=$_POST["pass"];
$uid=$_POST["uid"];
$pass1=2004;
$uid1=662004;

if($pass==$pass1 && $uid==$uid1){
    $servername="localhost";
    $username="root";
    $password="2004";
    $conn= mysqli_connect($servername, $username, $password);
    echo "connection was success";
  }
?>