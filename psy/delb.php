<?php
$isbn=$_POST["isbnno"];


//Database connection
$host="localhost";
$dbusername="root";
$dbpassword="2004";
$dbname="libsy";


// Create connection
$conn =  mysqli_connect($host,$dbusername,$dbpassword,$dbname);

$sql="DELETE FROM books WHERE isbn='$isbn'";

$result=mysqli_query($conn,$sql);
       if($result){
        //success
        header("Location: delbs.html");
        exit();
       }
       else{
        // failed
        header("Location: addbn.html");
        exit();
       }

       $conn->close();