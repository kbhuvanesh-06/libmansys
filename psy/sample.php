<?php

 //Database connection
 $host="localhost";
 $dbusername="root";
 $dbpassword="";
 $dbname="dentistry";


// Create connection
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

// Check connection
if ($conn->connect_error) 
{
 die("Connection failed: " . $conn->connect_error);
}
      $query=" SELECT
      patient.pno,
      patient.name,
      patient.date,
      services.s_offer,
      services.cost,
      patient.mobile,
      patient.gender,
      patient.age
    FROM
      patient
      INNER JOIN services ON patient.pno = services.pno;";

      $insert=mysqli_query($conn,$query);
      $conn->close();
       if(!$insert){
        //insertion failed
        header("Location: adde.html");
        exit();
       }
       else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Details</title>
  <link rel="stylesheet" href="add1.css">
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
    
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid rgb(104, 78, 219);
      position: fixed;
      top: 15%;
      left: 27.5%;
  
		}

		h1 {
      position: fixed;
    top: 7%;
    left:38%;
    color: rgb(104, 78, 219);
    text-shadow: 2px 2px rgba(0, 0, 139, 0.315);
    margin-bottom: auto;
    font-size: xx-large;
    font-family: Arial, Helvetica, sans-serif;
		}

		td {
			background-color: rgba(74, 163, 167, 0.116) ;
			border: 1px solid rgb(104, 78, 219);
		}

		
		td {
			font-weight: bold;
			border: 1px solid rgb(104, 78, 219);
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
  <div class="header">
	<section>
		<h1>PATIENT DATA REPORT</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>DATE</th>
				<th>ID</th>
				<th>NAME</th>
				<th>SERVICES</th>
        <th>COST</th>
        <th>MOBILE NO</th>
        <th>GENDER</th>
        <th>AGE</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php 
				// LOOP TILL END OF DATA
				while($rows=$insert->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['date'];?></td>
				<td><?php echo $rows['pno'];?></td>
				<td><?php echo $rows['name'];?></td>
				<td><?php echo $rows['s_offer'];?></td>
        <td><?php echo $rows['cost'];?></td>
        <td><?php echo $rows['mobile'];?></td>
        <td><?php echo $rows['gender'];?></td>
        <td><?php echo $rows['age'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
    <div class="btn1">
            
            <button type="submit"><a href="task.html">EXIT</a></button>
            
        </div>
	</section>
      </div>
</body>

</html>
        

        
        <?php
       }

       

?>