<?php
$isbn=$_POST["isbnno"];
$bname=$_POST["bname"];
$aname=$_POST["aname"];
$gname=$_POST["gname"];

//Database connection
$host="localhost";
$dbusername="root";
$dbpassword="2004";
$dbname="libsy";


// Create connection
$conn =  mysqli_connect($host,$dbusername,$dbpassword,$dbname);

$sql="INSERT INTO books VALUES ('$isbn','$bname','$aname','$gname')";

$result=mysqli_query($conn,$sql);
       if($result){
        //success
        header("Location: addbs.html");
        exit();
       }
       else{
        // failed
        header("Location: addbn.html");
        exit();
       }

       $conn->close();




?>