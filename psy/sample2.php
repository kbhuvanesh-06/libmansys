<?php
    //Database connection
$host="localhost";
$dbusername="root";
$dbpassword="2004";
$dbname="libsy";


// Create connection
$conn =  mysqli_connect($host,$dbusername,$dbpassword,$dbname);

$sql="select * from books,record where books.isbn=record.isbnno;";
$result=mysqli_query($conn,$sql);



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
<th>ISBN</th>
<th>BOOKNAME</th>
<th>AUTHOR NAME</th>
<th>GENRE</th>
<th>ISSUE NUMBER</th>
<th>ISBN NUMBER</th>
<th>STATUS</th>
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
				<td><?php echo $row["isbn"];?></td>
				<td><?php echo $row["bookname"];?></td>
				<td><?php echo $row["author_name"];?></td>
				<td><?php echo $row["genre"];?></td>
        <td><?php echo $row["issueno"];?></td>
        <td><?php echo $row["isbnno"];?></td>
        <td><?php echo $row["status"];?></td>
        
			</tr>
			<?php
				}
			?>
		</table>
    <div class="btn1">
            
            <button type="submit"><a href="button.html">EXIT</a></button>
            
        </div>
	</section>
      </div>
</body>

</html>
        

        
        <?php
       }

       

?>