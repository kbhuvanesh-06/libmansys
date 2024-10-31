<?php
$issueno=$_POST["issueno"];
$isbn=$_POST["isbnno"];
$status="issued";


//Database connection
$host="localhost";
$dbusername="root";
$dbpassword="2004";
$dbname="libsy";


// Create connection
$conn =  mysqli_connect($host,$dbusername,$dbpassword,$dbname);

$sql="INSERT INTO record VALUES ('$issueno','$isbn','$status')";

$result=mysqli_query($conn,$sql);
       if($result){
        //success
        header("Location: issuebs.html");
        exit();
       }
       else{
        // failed
        header("Location: addbn.html");
        exit();
       }

       $conn->close();