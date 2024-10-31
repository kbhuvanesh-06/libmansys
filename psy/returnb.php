<?php
$issueno=$_POST["issueno"];


//Database connection
$host="localhost";
$dbusername="root";
$dbpassword="2004";
$dbname="libsy";


// Create connection
$conn =  mysqli_connect($host,$dbusername,$dbpassword,$dbname);

$sql="DELETE FROM record WHERE issueno='$issueno'";

$result=mysqli_query($conn,$sql);
       if($result){
        //success
        header("Location: returnbs.html");
        exit();
       }
       else{
        // failed
        header("Location: addbn.html");
        exit();
       }

       $conn->close();