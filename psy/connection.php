<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$adminname=$_POST['uid'];
$password=$_POST['pass'];

 //Database connection
 $host="localhost";
 $dbusername="root";
 $dbpassword="2004";
 $dbname="libsy";


// Create connection
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

// Check connection
if ($conn->connect_error) 
{
 die("Connection failed: " . $conn->connect_error);
}
      $query="SELECT *FROM login WHERE id='$adminname' AND password='$password' ";

      $result=$conn->query($query);
       if($result->num_rows == 1){
        //login success
        header("Location: button.html");
        exit();
       }
       else{
        //login failed
        header("Location: error.html");
        exit();
       }

       $conn->close();
}
?>